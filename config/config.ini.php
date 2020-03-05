<?php exit;?>
[database]

host = ${DB_HOST}
username = ${DB_USER}
password = ${DB_PASSWORD}
dbname = ${DB_DATABASE}
tables_prefix =piwik_
port = ${DB_PORT}
adapter = PDO\MYSQL
type = InnoDB
schema = Mysql

[General]
session_save_handler = dbtable
force_ssl = 1
