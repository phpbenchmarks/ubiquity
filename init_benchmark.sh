#!/usr/bin/env bash

function clearCacheAndLogs() {
    sudo /bin/rm -rf app/cache/*
    [ "$?" != "0" ] && exit 1
    sudo /bin/chmod -R 777 app/cache
    [ "$?" != "0" ] && exit 1

    ./vendor/bin/Ubiquity init-cache
}

function init() {
    clearCacheAndLogs

    composer install --no-dev --classmap-authoritative
    [ "$?" != "0" ] && exit 1

    return 0
}
