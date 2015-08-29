#!/bin/bash
#site_plr ax3!X9&^aK3n@)o5vE
basedir=`dirname $0`/..
basedir=`readlink -m $basedir`

mysqldump -u"site_plr" -p"site_plr" site_plr | tee "$basedir/sql/db-dump.sql"
