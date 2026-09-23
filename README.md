# NovaServices - Plataforma Web con Docker Compose

Este proyecto despliega una aplicación web en PHP conectada a una base de datos MySQL 8.4 utilizando Docker Compose.

## Requisitos previos
- Docker Engine
- Docker Compose v2+

## Estructura del Proyecto
- `app/`: Código fuente de la aplicación PHP (`index.php`).
- `db/init/`: Scripts SQL de inicialización de la base de datos (`01-schema.sql`).
- `Dockerfile`: Definición de la imagen del servidor web PHP 8.3 + Apache.
- `compose.yaml`: Configuración de servicios, redes y volúmenes de Docker.
- `.env`: Variables de entorno (credenciales y configuración del entorno).

## Instrucciones de Despliegue

### 1. Iniciar los servicios
Para construir las imágenes y levantar los contenedores en segundo plano:
```bash
docker compose up -d
