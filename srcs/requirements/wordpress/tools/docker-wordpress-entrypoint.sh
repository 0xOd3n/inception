#!/bin/sh

if [ -e /tmp/wp-config.php ]; then
	echo "setup wp-config file"
	envsubst '$MYSQL_DATABASE $MYSQL_USER $MYSQL_PASSWORD $DB_HOST' < /tmp/wp-config.php > /var/www/wordpress/wp-config.php
	rm -f /tmp/wp-config.php
fi
exec "$@"