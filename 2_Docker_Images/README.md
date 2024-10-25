# Description

Instead of building our own Docker image with our own data, we will make use of an existing base image and mount our data dynamically into the running container.

Required knowledge:
- Docker bind mounts
- Docker port mappings

# Running our Docker image

````sh
# list images
docker image ls

# download nginx
docker pull nginx:latest

# run the image as container
docker run -p 8888:80 -v ./html:/usr/share/nginx/html:ro --rm nginx:latest
````
