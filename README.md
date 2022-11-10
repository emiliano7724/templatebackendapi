
# template  API backend

Apis template backend 

## Tecnologias usadas.


 - [Laravel Framework](https://laravel.com/docs/9.x)
 - [PHP8.1](https://github.com/php)

## API Reference

#### Titulo 1
 ### POST /api/pat
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



## Run Locally

Clone the project

```bash
  git clone git@10.1.3.30:emarquez/templateapibackend.git
```

Go to the project directory

```bash
  cd templateapibackend
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
