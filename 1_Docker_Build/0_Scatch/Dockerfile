# Use scratch as the base image
FROM scratch

# Copy the statically compiled binary into the container
COPY example.bin /app/example.bin

# Run the binary
ENTRYPOINT ["/app/example.bin"]