# frontend/Dockerfile

FROM node:16-alpine

# Set working directory
WORKDIR /app

# Copy existing application directory contents
COPY product /app

# Install dependencies
RUN npm install

# Build the application
RUN npm run build

EXPOSE 8001
CMD ["npm", "run", "serve"]