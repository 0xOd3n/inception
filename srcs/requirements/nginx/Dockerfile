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
		apk add --no-cache nginx openssl gettext
COPY ./conf /tmp
COPY ./srcs/index.html /var/www/wordpress/
COPY ./tools/docker-nginx-entrypoint.sh .
RUN chmod +x docker-nginx-entrypoint.sh
EXPOSE 443
ENTRYPOINT ["./docker-nginx-entrypoint.sh"]
CMD ["nginx", "-g", "daemon off;"]