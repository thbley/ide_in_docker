IDE in Docker
------------------------------------

[![Actions Build Status](https://github.com/thomasbley/ide_in_docker/workflows/build/badge.svg?branch=master)](https://github.com/thomasbley/ide_in_docker/actions)

#### Setup

    # build containers
    docker-compose build --build-arg UID=$(id -u)

    # setup composer
    mkdir -m 0777 service/src/vendor
    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm composer

    # start containers
    docker-compose up
    docker-compose up -d

    # start php container shell
    docker-compose exec php sh
    docker-compose exec -u $(id -u) php sh

    # remove containers/images/volumes
    docker-compose down
    docker images purge
    docker volume prune
    docker container prune
    docker system prune -a

#### Static code analyzers

    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm psalm
    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm phpcsfixer
    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm phploc

#### Tests

    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm phpunit

#### URLs

    http://127.0.0.1:8000/?folder=/var/www (VS-Code IDE, hit Crtl+Shift+t to run tests, takes a few seconds to load for first start)

    http://127.0.0.1:8080/service (API endpoint)
