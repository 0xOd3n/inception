include ./srcs/.env

COMPOSE_PATH = ./srcs/docker-compose.yml
VOLUMES = $(shell docker volume ls)
IMAGES = $(shell docker image ls -qa)
DM_EXIST = $(shell cat /etc/hosts | grep "$(DM_NAME)")

up: $(DATA_PATH) dm
	docker-compose -f $(COMPOSE_PATH) up --build -d

dm: 
	@if [ !$(DM_EXIST) ]; then\
		echo "127.0.0.1 $(DM_NAME)" | sudo tee -a /etc/hosts ;\
	fi

down:
	docker-compose -f $(COMPOSE_PATH) down

clean: clean
	docker container prune
	docker rmi -f $(IMAGES)
	docker volume rm -f $(VOLUMES)

$(DATA_PATH):
	sudo mkdir -p $(DATA_PATH)/wp-data $(DATA_PATH)/db-data
re: down up


