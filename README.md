# Runner (PHP) [![](https://img.shields.io/packagist/v/znck/runner-php.svg)](https://packagist.org/packages/znck/runner-php) [![](https://img.shields.io/packagist/dt/znck/runner-php.svg)](https://packagist.org/packages/znck/runner-php)  [![](https://img.shields.io/packagist/l/znck/runner-php.svg)](http://znck.mit-license.org)
PHP wrapper for [znck/runner](https://github.com/znck/runner)

### Installation:
```
composer require znck/runner-php
```

### Usage:
```php
$runner = \Znck\Runner\TestCaseRunner::binary();
// OR
$runner = new \Znck\Runner\TestCaseRunner;
$runner->setTime(6);
$runner->setMemory(128 * 1024 * 1024); // 128MB
$runner = $runner->command();

exec("{$runner} --analysis=a.yml a.out");
```
