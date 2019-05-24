# Car Wash Code Challenge

A Laravel 24-hour code challenge I accepted at some point as part of an interviewing process. For more details and screenshots visit http://bit.ly/2wFDO2o.

## Requirements from Potential Employer

You are running a car wash. Here are the rules:

- Your car wash accepts cars and trucks.
- You charge $5 for cars.
- You charge $10 for trucks.
- Your car wash charges $2 extra if the truck has mud in the bed.
- Your car wash does not accept trucks with the bed let down.
- If the vehicle comes in a second time, they get 50% off.
- If the license plate equals 1111111, the vehicle is stolen and does not get a car wash.

Build a simple Laravel CRUD that enforces and demonstrates the above rules.

## Application Installation Steps

1. Clone develop branch of my github repo: git clone https://github.com/michaelharper/CarWash/tree/develop
2. cd into Car-Wash-Code-Challenge, `composer install`
3. Create carwash DB or change .env to reflect your local testing environment’s DB. If you don’t have a .env, create one from .env.sample which should be in the project root.
4. `php artisan migrate` should create the only table you’ll need for this which is visits - a way for me to log when customers visit the car wash.
5. OPTIONAL: You may have see an AES key error on your frontend depending on a few factors. If so, please run php artisan key:generate which should update your .env file. After that, I would recommend running php artisan config:clear and finally php artisan config:cache to ensure it flushes cache and updates config.
