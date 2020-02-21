#!/bin/bash

# Update stubs
cp -R /var/www/docker/src/.docker.env.example ./src/stubs/.docker.env.example
cp -R /var/www/docker/src/docker-compose.yaml ./src/stubs/docker-compose.yaml
cp -R /var/www/docker/src/docker.sh ./src/stubs/docker.sh

cp -R /mnt/data/www/devops/Pipelines/.gitlab-ci.yml ./src/stubs/.gitlab-ci.yml
