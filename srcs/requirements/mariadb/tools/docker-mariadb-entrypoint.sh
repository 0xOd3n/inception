#!/bin/sh

if [ ! -e /tmp/init ]; then
	touch /tmp/init

	echo "** creating init file: /tmp/init"
	echo "GRANT ALL ON *.* TO 'root'@'%' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}' WITH GRANT OPTION;" >> /tmp/init
	echo "DROP DATABASE IF EXISTS test;" >> /tmp/init

	if [ -n "${MYSQL_DATABASE}" ]; then
		echo "** creating database: ${MYSQL_DATABASE}"
		echo "CREATE DATABASE IF NOT EXISTS \`${MYSQL_DATABASE}\`;" >> /tmp/init
		if [ -n "${MYSQL_USER}" ] && [ -n "${MYSQL_PASSWORD}" ]; then
			echo "GRANT ALL ON \`${MYSQL_DATABASE}\`.* TO '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';" >> /tmp/init
		fi
	fi
	echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';" >> /tmp/init
	echo "ALTER USER 'root'@'127.0.0.1' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';" >> /tmp/init

	echo "FLUSH PRIVILEGES;" >> /tmp/init
fi

exec "$@"