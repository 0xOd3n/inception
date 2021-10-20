# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: abbelhac <abbelhac@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/10/12 20:04:41 by abbelhac          #+#    #+#              #
#    Updated: 2021/10/20 21:50:25 by abbelhac         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.13
RUN apk update && apk add mariadb mariadb-client

RUN mkdir -p /run/mysqld && \
	chown -R mysql:mysql /run/mysqld /var/lib/mysql

RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql --auth-root-authentication-method=normal
RUN adduser abbelhac -D

COPY ./tools .

ENTRYPOINT ["sh", "/docker-mariadb-entrypoint.sh"]
EXPOSE 3306

CMD ["/usr/bin/mysqld", "--user=mysql", "--skip-name-resolve" , "--init-file=/tmp/init" , "--debug-gdb"]