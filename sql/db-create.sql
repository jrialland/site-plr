

create database site_plr charset utf8;

CREATE USER 'site_plr'@'localhost' IDENTIFIED BY 'site_plr';
GRANT ALL ON site_plr.* TO 'site_plr'@'localhost';

flush privileges;