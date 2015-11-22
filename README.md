# Core

A simple email implementation I use in many of my Laravel ~5.1 packages. 

> This package includes a free minimalist template I found on the web and some
basic data conventions for quickly generating simple and clean looking emails.


## Table of Contents

- [Features](#features)
- [Composer / Laravel](#including)
- [Usage](#usage)
- [Release Notes](#notes)
- [Documentation](#documentation)
- [License](#license)


### Features <a name="features"></a>

- Uses jobs to send email.
- Simple abstract EmailJob implementation.
- Controller for previewing email templates.
- Migration to track sent email history and view emails online.
- Conventions for your data that are simple and will let your IDE do the remembering for you.

### Composer / Laravel <a name="including"></a>

Usage in your projects

> composer require dan/email:dev-master

Usage in Laravel

A controller is included for testing views and viewing email online. There is 
also some views and assets to get you started. (In Laravel's `config/app.php` 
`providers` array.)

> Dan\Email\Providers\EmailServiceProvider::class,

Publishing `assets`, `config`, `migrations` and `views`.

> php artisan vendor:publish --provider="Dan\Email\Support\EmailServiceProvider" --tag="views"


### Usage <a name="usage"></a>

I'm still testing this package. See the `EmailController` to see what the data 
conventions look like.


### Release Notes<a name="notes"></a>

- Todo: test with other packages, write more docs.
- Controller preview basic and normal layouts.
- Config specifies some customizations


### Documentation<a name="documentation"></a>

- Follow PSR-2 Coding standards.
- Add PHPDoc blocks for all classes, methods, and functions
- Omit the `@return` tag if the method does not return anything
- Add a blank line before `@param`, `@return` and `@throws`

Any issues, please [report here](https://github.com/danrichards/email/issues)


## License<a name="license"></a>

MIT