
# Quasar Intelligence API

Api MELI Challenge. La api brinda servicios para conocer la posición de un objecto basándose en los principios de la trangulación, ademas de interceptar y capturar si fuera posible un mensaje secreto

## Tecnologias usadas.

 - [Trilaterion php](https://github.com/tuupola/trilateration)
 - [Laravel Framework](https://laravel.com/docs/8.x)
 - [PHP7.4](https://github.com/php)

## API Reference

#### Capturar mensaje secreto y posición de nave enemiga.
 ### POST /api/topsecret
  Request Estructure Example:
```json
 
  {
    "satellites": [
        {
            "name": "kenobi",
            "distance": 100.0,
            "message": [
                "este",
                "",
                "",
                "mensaje",
                ""
            ]
        },
        {
            "name": "skywalker",
            "distance": 115.5,
            "message": [
                "",
                "es",
                "",
                "",
                "secreto"
            ]
        },
        {
            "name": "sato",
            "distance": 162.7,
            "message": [
                "este",
                "",
                "un",
                "",
                ""
            ]
        }
    ]
}
```


#### Captura la poscion del nombre del satelite enviado por parametro y el mensaje en caso de que este completo.

```http
  GET/POST /api/topsecret_split/{satellite_name}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `satellite_name`      | `string` | **Required** |


## Demo

Heroku app: https://quasar-challenge-emarquez.herokuapp.com/

## Run Locally

Clone the project

```bash
  git clone https://github.com/emiliano7724/quasar-challenge.git
```

Go to the project directory

```bash
  cd quasar-challenge
```
```bash
 change name .env.dev to .env
```
Install dependencies
```bash
  composer install
```


Start the server

```bash
  php artisan serve
```


## Run Tests
```bash
  php artisan test
```


## Authors

- [@Emiliano Marquez](https://github.com/emiliano7724)


## License


[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
