#!/bin/bash

cd api/

composer install

php artisan migrate:fresh --seed

cd ../frontend/

npm i

npx cypress install

npx cypress run --spec "cypress/e2e/**/*"