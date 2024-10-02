```bash

cd packages

mkdir laravel-auth && cd $_

composer init --name="ravuthz/laravel-auth" --type=library --license=MIT \
--autoload="src/" --require="php: ^7.4|^8.0" --require-dev="phpunit/phpunit: ^11.2" \
--author="Ravuthz <ravuthz@gmail.com>" --no-interaction

composer require "illuminate/support:^7.0|^8.0|^9.0|^10.0|^11.0"
composer require "illuminate/console:^7.0|^8.0|^9.0|^10.0|^11.0"

```

Usage:
```bash
composer require ravuthz/laravel-auth
```

```php
```