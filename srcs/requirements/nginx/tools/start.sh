#!/bin/bash

openrc
touch /run/openrc/softlevel
mkdir -p /var/www/abbelhac
openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=MO/ST=Khouribga/L=Khouribga/O=42/OU=1337Khouribga/CN=abbelhac.42.fr" -keyout /etc/ssl/private/abbelhac.42.fr.key -out /etc/ssl/certs/abbelhac.42.fr.crt
cp /tmp/index.html /var/www/abbelhac
mv /tmp/default.conf /etc/nginx/http.d/default.conf
#service nginx status
#service nginx start
#tail -f  /var/log/nginx/access.log
