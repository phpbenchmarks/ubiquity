#!/usr/bin/env bash

set -e

rm -rf app/cache/*
chmod -R 777 app/cache

composer install --no-dev --classmap-authoritative --ansi

php app/bin/addRoutes

if [ -L "app/translations" ]; then
    rm "app/translations"
fi
ln -s ../vendor/phpbenchmarks/ubiquity-common/translations app/translations
