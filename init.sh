#!/bin/bash

cd docker/local
docker-compose up -d --build
docker exec -it -u 1000 agile-php-fpm bash
