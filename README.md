# Laravel - Webhook by Notifications Demo
This is an example project showing how you can use Laravel's notifications to implement
your own webhook feature.

You can read the accompanying article 
[here](https://medium.com/@SlyFireFox/laravel-innovations-making-your-own-webhook-mechanism-through-notifications-96e75e99a2b1)

## Setup Demo

1. Download or git clone the source code
2. copy .env.example to .env
3. run `composer install`
4. make an sqlite database with `touch database/database.sqlite`
5. run `php artisan migrate` to create the database tables
6. run the serve command with `php artisan serve`
7. load up `http://localhost:8000`
8. create an account and then set a webhook URL

## Testing the webhook

You can use any url you like that accepts a post request. If you
want a quick way of running a little test system I would suggest
using [HttpBin](https://httpbin.org/) which lets test basic HTTP
requests. Therefore you can use https://httpbin.org/post as a webhook
url.