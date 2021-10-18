#!/bin/sh

if [ ! -e /etc/ssl/private/${DM_NAME} ] ||
     [ ! -e /etc/ssl/certs/${DM_NAME} ]; then
	echo "create TLS certs & key files"
	openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=MO/ST=Khouribga/L=Khouribga/O=42/OU=1337Khouribga/CN=${DM_NAME}" -keyout /etc/ssl/private/${DM_NAME}.key -out /etc/ssl/certs/${DM_NAME}.crt
fi

if [ -e /tmp/default.conf ]; then
	echo "setup nginx conf file"
	envsubst '$DM_NAME' < /tmp/default.conf > /etc/nginx/http.d/default.conf
	rm /tmp/default.conf
fi

mkdir -p /var/www/wordpress
mkdir -p /run/nginx
# mv /tmp/index.html /var/www/wordpress/

#service nginx status
#service nginx start
#tail -f  /var/log/nginx/access.log
#exec "$@"
exec "$@"