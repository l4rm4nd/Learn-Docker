# Description

We are using the most minimal `scratch` base image to build a new Docker image.

The new Docker image will contain a Go binary that prints `Hello World` if run.

Required knowledge:
- Docker Dockerfile
- Docker build process

# Compiling Go Binary

````sh
CGO_ENABLED=0 GOOS=linux GOARCH=amd64 go build -o example.bin example.go
````

# Building Docker

````sh
docker build -t my-scratch-app .
````

# Running our Docker image

````sh
# list images
docker image ls

# run the image as container
docker run --rm my-scratch-app
````
