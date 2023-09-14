.PHONY: help build compose generatekey tests start all stop show logs
.EXPORT_ALL_VARIABLES:

.DEFAULT_GOAL := help

help: ## This help.
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

build: ## Build app image
	@UID=`id -u` GID=`id -g` docker-compose build app

compose: ## Install dependencies with composer
	@UID=`id -u` GID=`id -g` docker-compose run app composer install

generatekey: ## Generate artisan key
	@UID=`id -u` GID=`id -g` docker-compose run app php artisan key:generate

tests: ## Launch PHPUnit tests
	@docker-compose exec app phpunit

start: ## Launch complete environment
	@UID=`id -u` GID=`id -g` docker-compose up -d

all: build compose start

stop: ## Stop complete environment
	@docker-compose down

show: ## Show containers
	@docker-compose ps

logs: ## Show nginx logs
	@docker-compose logs nginx
