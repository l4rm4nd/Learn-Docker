# Description

We are using an existing `ngninx:latest` base image to build a new Docker image.

The new Docker image will contain our own HTML code, which is served by an Nginx web server.

Required knowledge:
- Docker Dockerfile
- Docker build process
- Docker bind mounts

# Building Docker

````sh
docker build -t my-nginx .
````

# Running our Docker image

````sh
# list images
docker image ls

# run the image as container
docker run -p 8888:80 --rm my-nginx 
````
