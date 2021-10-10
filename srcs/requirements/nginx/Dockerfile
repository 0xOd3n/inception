# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: abbelhac <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/07/10 21:12:05 by abbelhac          #+#    #+#              #
#    Updated: 2021/10/01 19:26:55 by abbelhac         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:latest
RUN apk update & \
		apk add nginx vim openrc openssl
COPY ./conf /tmp
COPY ./tools .
COPY ./srcs/index.html /tmp
RUN chmod 755 start.sh && sh start.sh
