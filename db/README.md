# Database Setup for MariaDB with Adminer

This repository contains example initialization files for the MariaDB database.

## Files in the `example-init` folder

- `example-schema.sql`  
  Contains table definitions (CREATE TABLE, etc.).  
- `example-seed.sql`  
  Contains example data inserts to populate the tables.

## Usage

1. Rename the folder `example-init` to `init`.  
2. Rename the files:  
   - `example-schema.sql` → `schema.sql`  
   - `example-seed.sql` → `seed.sql`  
3. Ensure this `init` folder is mounted as a volume in your Docker Compose setup, for example:  
   ```yaml
   volumes:
     - ./init:/docker-entrypoint-initdb.d
