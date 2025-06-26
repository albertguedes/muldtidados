#!/usr/bin/env bash

PHP=/usr/bin/php

HOST='localhost'
PORT='8080'

API_HOST='localhost'
API_PORT='8081'

# API Server
cd $PWD/api
$PHP -S "${API_HOST}:${API_PORT}" data.php &

# App 
cd ../public 
$PHP -S "${HOST}:${PORT}" &
