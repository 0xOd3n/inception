# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: abbelhac <abbelhac@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/10/12 20:04:41 by abbelhac          #+#    #+#              #
#    Updated: 2021/10/18 17:17:36 by abbelhac         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.13
RUN apk update && apk add mariadb mariadb-client
#RUN mkdir -p /run/mysqld && chown -R mysql:mysql run/mysqld var/lib/mysql
#RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql --auth-root-authentication-method=normal

EXPOSE 3306
#ENTRYPOINT ["sh", "/docker-mariadb-entrypoint.sh"]