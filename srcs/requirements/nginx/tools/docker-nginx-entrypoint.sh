#!/bin/bash

#openrc
#touch /run/openrc/softlevel
mkdir -p /var/www/abbelhac
if [! -e /etc/ssl/private/${DOMAINE_NAME}.key] || [! -e /etc/ssl/certs/${DOMAINE_NAME}.crt]; then
	echo "create TLS certs & key file"
	openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=MO/ST=Khouribga/L=Khouribga/O=42/OU=1337Khouribga/CN=abbelhac.42.fr" -keyout /etc/ssl/private/${DOMAINE_NAME}.key -out /etc/ssl/certs/${DOMAINE_NAME}.crt
fi
cp /tmp/index.html /var/www/abbelhac
if [ -e /tmp/default.conf ]; then
	mv /tmp/default.conf /etc/nginx/http.d/default.conf
fi
#service nginx status
#service nginx start
#tail -f  /var/log/nginx/access.log
nginx -g "daemon off;"
#exec "$@"
