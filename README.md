# Moodle plus 
## Brief
## Requirement
## Install

```bash
docker-compose up -d
# Install dependencies
docker-compose exec app composer install
# Generate key
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan jwt:secret
# Generate database and sample data
docker-compose exec app php artisan migrate
docker-compose exec app php artisan db:seed
```