#!/bin/bash

basedir=`dirname $0`/..
basedir=`readlink -m $basedir`

pushd $basedir/wordpress
php -S localhost:8000
popd