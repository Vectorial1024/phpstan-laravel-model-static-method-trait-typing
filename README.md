# phpstan-laravel-model-static-method-trait-typing
Demo repo for PHPStan Laravel model static method trait typing

This aims to reproduce https://github.com/larastan/larastan/issues/2503 :
- Laravel 13
- `laravel-model-uuid`
- PHPStan
- PHPUnit

In addition to the dependencies, the following steps are also required:
- Create a special file `_ide_macros.php` for PHPStorm
  - The file contains a type-hint of `GeneratesUuid` for PHPStorm (as originally suggested by an LLM)
- Laravel Idea helper code must not exist
  - Delete them, located at (`vendor/_laravel_idea`)
