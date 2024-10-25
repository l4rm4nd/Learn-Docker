# Use the official nginx image as the base
FROM nginx:latest

# Copy static files to the default web directory
COPY ./html /usr/share/nginx/html

# Expose port 80 to the host
EXPOSE 80

# Start nginx (this is the default command, so you could omit it)
CMD ["nginx", "-g", "daemon off;"]

