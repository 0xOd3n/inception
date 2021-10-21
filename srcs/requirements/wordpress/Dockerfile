# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: abbelhac <abbelhac@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/10/02 21:17:47 by abbelhac          #+#    #+#              #
#    Updated: 2021/10/18 17:49:05 by abbelhac         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.13

RUN apk add --no-cache wget tar gettext php7-fpm php7-json php7-gd php7-mysqli php7-zlib php7-curl

RUN wget https://wordpress.org/latest.tar.gz && \
	mkdir -p /var/www/wordpress && \
	tar -xvf latest.tar.gz && \
	mv wordpress/* /var/www/wordpress/ && \
	rm -rf latest.tar.gz wordpress

COPY ./conf/wp-config.php /tmp
COPY ./tools/* /.
COPY ./conf/www.conf /etc/php7/php-fpm.d/

RUN chmod +x docker-wordpress-entrypoint.sh

EXPOSE 9000

ENTRYPOINT ["sh", "/docker-wordpress-entrypoint.sh"]
CMD ["php-fpm7", "-F"]
#CMD ["php-fpm7", "-F"]
 
