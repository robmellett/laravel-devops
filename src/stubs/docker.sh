#!/usr/bin/env bash

# Find container names with `docker container ls`

echo ">> Database IP:"
echo $(docker inspect docker-mysql | grep IPAddress)

# SSH into Web App
docker exec -it --user ubuntu acme-app bash
