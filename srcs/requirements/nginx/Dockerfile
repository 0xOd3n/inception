# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: abbelhac <abbelhac@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/07/10 21:12:05 by abbelhac          #+#    #+#              #
#    Updated: 2021/10/18 17:48:02 by abbelhac         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.13

RUN apk update && \
	apk add --no-cache nginx openssl curl gettext

RUN mkdir -p /run/nginx/ && \
	mkdir -p /var/www/wordpress/

COPY ./conf/default.conf /tmp/
COPY ./tools/docker-nginx-entrypoint.sh .

EXPOSE 443

ENTRYPOINT ["sh","/docker-nginx-entrypoint.sh"]
CMD ["nginx", "-g", "daemon off;"]