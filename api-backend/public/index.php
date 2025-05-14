<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Factory\AppFactory;
use GraphQL\GraphQL;
use GraphQL\Type\Schema;
use GraphQL\Type\Definition\ObjectType;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Simple GraphQL schema
$schema = new Schema([
    'query' => new ObjectType([
        'name' => 'Query',
        'fields' => [
            'hello' => [
                'type' => \GraphQL\Type\Definition\Type::string(),
                'resolve' => fn() => 'Hello, world!'
            ]
        ]
    ])
]);

// GraphQL endpoint
$app->post('/graphql', function (ServerRequestInterface $request, ResponseInterface $response) use ($schema) {
    $input = json_decode((string) $request->getBody(), true);
    $query = $input['query'] ?? '';
    $result = GraphQL::executeQuery($schema, $query);
    $output = $result->toArray();
    
    $response->getBody()->write(json_encode($output));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->run();
