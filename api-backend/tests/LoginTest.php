<?php
use PHPUnit\Framework\TestCase;
use Slim\Psr7\Factory\ServerRequestFactory;

class LoginTest extends TestCase
{
    protected $app;

    protected function setUp(): void
    {
        $this->app = $GLOBALS['app'];
    }

    public function testLoginWithValidCredentials()
    {
        $request = (new ServerRequestFactory())->createServerRequest('POST', '/login')
            ->withParsedBody([
                'email' => 'user@example.com',
                'password' => 'test1234'
            ]);

        $response = $this->app->handle($request);

        $this->assertEquals(200, $response->getStatusCode());
        $body = (string) $response->getBody();
        $this->assertStringContainsString('token', $body);
    }
}
