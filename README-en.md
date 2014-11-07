# Numd

  Declination russian numerals

  * 1 рубль
  * 2 рубля
  * 5 рублей

## Instalation

```php
require_once 'numd.php';
```

## API

### numd($num, $nominative, $genitiveSingular, $genitivePlural)

  Get declination value

```php
numd(14, 'рубль', 'рубля', 'рублей');
// 14 рублей
```
