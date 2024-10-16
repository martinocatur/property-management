## Requirements
- Docker version `27.1.2` or higher
- Docker compose `v2.29.1` or higher
- Git
- Node version `16.15.0` or higher

## Install php dependencies
Under `root project` directory, run the command below
```
docker run -it --rm -v $PWD:/app composer install --ignore-platform-reqs --prefer-dist
```

## Install JS packages & compile the assets
Under `root project` directory, run the command below
```
npm install && npm run dev
```

## Configure `env` file
- Create `.env`
```
cp .env.example .env
```

- Update db configuration on the `.env` file
```
DB_CONNECTION=sqlite
```

- Update docker configuration on the `.env` file
```
DOCKER_LARAVEL_PORT=7790 #or any port you want to use
DOCKER_HOST_UID=yourhostuid # run `id` command in your terminal to check what is your uid
```

## Run docker containers
```
docker compose up --force-recreate
```

## Run migration
```
> docker exec -it property-management-php81-apache-1 bash
> cd app
> php artisan key:generate
> php artisan migrate
```

## Finish
Your laravel should be up and running!