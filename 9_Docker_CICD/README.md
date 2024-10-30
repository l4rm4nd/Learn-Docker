# Description

We will make use of GitHub and GH Actions to automatically build a Docker image from Dockerfile.

We then upload the image onto Dockerhub.

Later, we make use of the external Docker image via Docker Run or Docker Compose.

Prerequisites:

1. Docker Repository on GitHub (GH)
2. GH Repo Secrets for DockerHub Login
3. GH Action Workflow for building Docker image and uploading onto DockerHub

# Running our Docker Container

````
# pull latest image; pushed by github action runner
docker pull l4rm4nd/learn-docker:latest

# run the container via docker run
docker run --rm -p 8888:80 l4rm4nd/learn-docker:latest
````
