## Setup

* Izsaukt `git clone https://github.com/salvisb/laravel-passport-auth.git`
* Izsaukt `composer install`
* Pārsaukt `.env.example` par `.env`
* Izsaukt `php artisan key:generate`
* Izsaukt `php artisan migrate --seed`
* Izsaukt `php artisan passport:install`
* Palaist `php artisan serve`

Datubāzi uzstādīt nav nepieciešams, tiek izmantota sqlite datubāze.
