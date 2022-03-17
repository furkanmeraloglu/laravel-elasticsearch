<div>
<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="250">
    </a>
</p>
<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://images.contentstack.io/v3/assets/bltefdd0b53724fa2ce/blt280217a63b82a734/6202d3378b1f312528798412/elastic-logo.svg" width="175">
    </a>
</p>
</div>

### About the Project
It's a simple Laravel project that aims to utilize Elasticsearch as a search/index. The Laravel - Elasticsearch integration is conducted via Laravel's out-of-package HTTP Client. No Elasticsearch library is used for educative purposes.
Postgresql is used as the default database. Redis is used for queueable jobs. Mailhog is used for e-mail operations and testing.

This project also benefits Pest instead of Phpunit. 



### Libraries and Dependencies
- Laravel/UI with Bootstrap and Auth Scaffolding
  - `composer require laravel/ui`
    - `php artisan ui bootsrap --auth`
- Laravel Debug Bar
  - `composer require barryvdh/laravel-debugbar --dev`
- Laravel IDE Helper
  - `composer require --dev barryvdh/laravel-ide-helper`
    - `php artisan ide-helper:generate`
    - `php artisan ide-helper:models`
    - `php artisan ide-helper:meta`
- Laravel Query Detector 
  - `composer require beyondcode/laravel-query-detector --dev`
- Laravel Pest
