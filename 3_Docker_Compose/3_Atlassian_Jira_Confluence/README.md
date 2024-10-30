# Description

Instead of running Docker containers via Docker run CLI, we will make use of Docker Compose.

Compose defines the key CLI commands as YAML structure. Easier to read and allows for container service stacks.

For this example, we will define a stack consisting of Atlassian Jira, Atlassian Confluence as well as a PSQL database container. We will convert the publicly documented Docker Run commands by Atlassian to a Docker Compose file. With hardened networking as well.

# References

- https://hub.docker.com/r/atlassian/jira-software
- https://hub.docker.com/r/atlassian/confluence
- https://github.com/Haxxnet/Compose-Examples/blob/main/0_skeleton/docker-compose.yml

# Running our Docker image

````sh
# download images
docker compose pull

# run the image as container
docker compose up
````
