#!/usr/bin/env bash

set -e

rm -rf app/cache/*
chmod -R 777 app/cache
./vendor/bin/Ubiquity init-cache

composer install --no-dev --classmap-authoritative --ansi
