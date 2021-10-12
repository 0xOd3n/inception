# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: abbelhac <abbelhac@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/10/02 21:17:47 by abbelhac          #+#    #+#              #
#    Updated: 2021/10/12 21:50:10 by abbelhac         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:latest

RUN apk add --no-cache wget tar php7-fpm php7-json php7-gd php7-mysqli php7-zlib php7-curl
RUN wget https://wordpress.org/latest.tar.gz && \
	mkdir -p /var/www && \
	tar -xvf latest.tar.gz -C /var/www/ && \
	rm -rf latest.tar.gz
EXPOSE 9000
# ENTRYPOINT [ "sh", "docker-wordpress-entrypoint.sh" ]
# CMD ["php-fpm7", "-F"]
 
