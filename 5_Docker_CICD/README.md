# Description

We will make use of GitHub and GH Actions to automatically build a Docker image from Dockerfile

We then upload the image onto Dockerhub.

Later, we make use of the external Docker image via Docker Run or Docker Compose.

# Running our Docker Container

````
docker run --rm -p 8888:80 l4rm4nd/learn-docker:latest
````
