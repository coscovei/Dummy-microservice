# Dummy Microservice

A simple Laravel microservice for creating and retrieving insurance quotes.

## Features

- Create a new quote
- Retrieve a quote by ID
- JSON API responses
- Basic request validation

## Endpoints

### Create a quote
`POST /api/quote`

Request body:

```json
{
  "client_name": "John Doe",
  "car_plate": "B123XYZ",
  "insurer_name": "Allianz",
  "price": 499.99
}
```

Success response: `201 Created`

### Get a quote
`GET /api/quote/{id}`

Success response: `200 OK`  
Not found response: `404 Not Found`

## Setup

```bash
git clone https://github.com/coscovei/Dummy-microservice.git
cd Dummy-microservice
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

The service runs at:

```text
http://127.0.0.1:8000
```

## Example

Create a quote:

```bash
curl -X POST http://127.0.0.1:8000/api/quote \
  -H "Content-Type: application/json" \
  -d '{
    "client_name": "John Doe",
    "car_plate": "B123XYZ",
    "insurer_name": "Allianz",
    "price": 499.99
  }'
```

Fetch a quote:

```bash
curl http://127.0.0.1:8000/api/quote/1
```

## Requirements

- PHP 8.2+
- Composer
- A configured database connection

## Notes

- Built with Laravel 12
- Uses Eloquent for data persistence
- Returns JSON responses only
- Returns `404` if a quote is not found
