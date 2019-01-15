#!/usr/bin/env bash

function clearCacheAndLogs() {
    sudo /bin/rm -rf app/cache/*
    [ "$?" != "0" ] && exit 1
    sudo /bin/chmod -R 777 app/cache
    [ "$?" != "0" ] && exit 1

}

function init() {
    clearCacheAndLogs

    composer install --no-dev --classmap-authoritative
    [ "$?" != "0" ] && exit 1

    php app/bin/addRoutes

    if [ -L "app/translations" ]; then
        rm "app/translations"
    fi
    ln -s ../vendor/phpbenchmarks/ubiquity-common/translations app/translations
    [ "$?" != "0" ] && exit 1

    return 0
}
