include ./srcs/.env

COMPOSE_PATH = ./srcs/docker-compose.yml
VOLUMES = $(shell docker volume ls -q)
DM_EXIST = $(shell cat /etc/hosts | grep "abbelhac.42.fr")

up: $(DATA_PATH) dm
	docker-compose -f $(COMPOSE_PATH) up --build -d

dm: 
	@if [ !$(DM_EXIST) ]; then\
		echo "127.0.0.1 $(DM_NAME)" | sudo tee -a /etc/hosts ;\
	fi

down:
	docker-compose -f $(COMPOSE_PATH) down

clean:
	docker volume rm -f $(VOLUMES)

$(DATA_PATH):
	mkdir -p $(DATA_PATH)/wp-data $(DATA_PATH)/db-data
re: down up



