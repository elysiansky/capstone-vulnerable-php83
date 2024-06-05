# Capstone Docker Image CI/CD Workflow

This repository contains the GitHub Actions workflow configuration for building and publishing Docker images for the Capstone project.

## Workflow Overview

The workflow is triggered on every push to the `main` or `development` branch. It consists of two jobs:

1. **Build Job**: This job builds Docker images for Nginx and PHP83 based on the changes in the repository. It runs on the latest version of Ubuntu and utilizes Docker Buildx for multi-platform builds.

2. **Publish Job**: This job is triggered upon the successful completion of the build job. It publishes the Docker images to DockerHub.

## Workflow Files

- **build-docker-images.yaml**: Defines the build job for building Docker images.
- **publish-docker-images.yaml**: Defines the publish job for publishing Docker images to DockerHub.

## Workflow Execution

1. **Build Job**: The build job performs the following steps:
   - Checks out the repository.
   - Sets up QEMU and Docker Buildx.
   - Retrieves the Git commit SHA.
   - Logs in to DockerHub.
   - Builds Docker images for Nginx and PHP83.
   - Outputs the platforms and Git commit SHA.

2. **Publish Job**: The publish job performs the following steps:
   - Waits for the completion of the build job.
   - Logs in to DockerHub.
   - Publishes the Docker images to DockerHub.

## Usage

To use this workflow in your project:

1. Copy the workflow files (`build-docker-images.yaml` and `publish-docker-images.yaml`) into your project's `.github/workflows` directory.
2. Ensure that the necessary secrets (`DOCKER_USERNAME` and `DOCKER_PASSWORD`) are added to your repository's secrets.

That's it! Now, every push to the `main` or `development` branch will trigger the CI/CD workflow, building and publishing Docker images for your project.

For more information on how to configure and customize GitHub Actions workflows, refer to the [GitHub Actions documentation](https://docs.github.com/en/actions).
