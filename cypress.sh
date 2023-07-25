#!/bin/bash

cd api/

php artisan migrate:fresh --seed

cd ../frontend/

npm i

npx cypress install

npx cypress run --spec "cypress/e2e/**/*"