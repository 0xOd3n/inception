# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: abbelhac <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/07/10 21:12:05 by abbelhac          #+#    #+#              #
#    Updated: 2021/10/10 22:03:55 by abbelhac         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:latest
RUN apk update & \
		apk add nginx openssl
COPY ./conf /tmp
COPY ./srcs/index.html /tmp
COPY ./tools/docker-nginx-entrypoint.sh .
RUN chmod 755 docker-nginx-entrypoint.sh
EXPOSE 443
ENTRYPOINT ["sh","/docker-nginx-entrypoint.sh"]
#CMD ["nginx", "-g", "daemon off;"]
