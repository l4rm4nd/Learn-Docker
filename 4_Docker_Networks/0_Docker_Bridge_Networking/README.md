# Description

If a Docker Compose YAML defines multiple services, we may want to define the networking specifically.

If no network definition is given, Docker will create a bridge network automatically and join all services.

This is likely not necessary. So let's define networking.

- The Nginx container is allowed to access the Internet via an external network.
- The Nginx container is joined to an internal network in order to communicate with PHP container.
- The PHP container is not allowed to access the Internet. Joins an internal network only.

Required knowledge:
- Docker Images
- Docker Compose
- Docker bind mounts
- Docker networking (bridge)

# Running our Docker image

````sh
# download images
docker compose pull

# create the networks
docker network create my-external-network
docker network create my-internal-network

# run the image as container
docker compose up
````
