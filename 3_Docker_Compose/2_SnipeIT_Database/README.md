# Description

Instead of running Docker containers via Docker run CLI, we will make use of Docker Compose.

Compose defines the key CLI commands as YAML structure. Easier to read and allows for container service stacks.

For this example, we will define a stack consisting of Snipe-IT and a database. This is the first time, we make use of a containerized database as well as environment variables.

# Running our Docker image

````sh
# download images
docker compose pull

# run the image as container
docker compose up
````
