#!/bin/bash

echo "Dumping database"

mysqldump -uroot -proot devdb > /vagrant/sqldump/database.sql

echo "Dump Complete"