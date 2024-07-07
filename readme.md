# Ejemplos de como usar la API de Viixoo para timbrado fiscal en México

## los ejemplos se encuentan dentro de la carpeta _code

## PHP
Los ejemplos de código en PHP se pueden correr de forma sencilla usando docker y docker compose

```
$ docker network create viixoo-cfdi-php-examples
$ docker compose -f .\docker-compose.php.local.yml up -d

```

Para parar el servicio sería

```
$ docker compose -f .\docker-compose.php.local.yml down
```

o 

```
$ docker compose -f .\docker-compose.php.local.yml stop
```

Cuando esten corriendo el contenedor si hacemos:

```
$ docker ps
```

Se debe ver algo como:

```
$ CONTAINER ID   IMAGE         COMMAND                  CREATED         STATUS         PORTS                                      NAMES
dcafb4a993a3   application   "docker-php-entrypoi…"   7 seconds ago   Up 6 seconds   0.0.0.0:80->80/tcp, 0.0.0.0:443->443/tcp   cfdi-php-examples
```

La aplicación estará disponible en https://localhost o http://localhos

La version de PHP utilizada es PHP Version 7.2.34
