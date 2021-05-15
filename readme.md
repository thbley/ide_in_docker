IDE in Docker
------------------------------------

[![Actions Build Status](https://github.com/thomasbley/ide_in_docker/workflows/build/badge.svg?branch=master)](https://github.com/thomasbley/ide_in_docker/actions)

![IDE in Docker](https://repository-images.githubusercontent.com/367632917/53284c00-b590-11eb-95bd-698fa36e8860)

#### Setup

    # build containers
    docker-compose build --build-arg UID=$(id -u)

    # setup composer
    mkdir -m 0777 service/src/vendor
    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm composer

    # start containers
    docker-compose up

    # stop containers
    docker-compose down

#### Run static code analyzers

    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm psalm
    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm phpcsfixer
    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm phploc

#### Run tests

    docker-compose -f docker-compose.yml -f docker-compose-tasks.yml run -u $(id -u) --rm phpunit

#### URLs

    http://127.0.0.1:8000/?folder=/var/www
    (VS-Code IDE, hit Crtl+Shift+t to run tests, takes a few seconds to load for first start)

    http://127.0.0.1:8080/service (API endpoint, index.php)
