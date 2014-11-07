# Numd

  Склонение слов после числительных

  * 1 рубль
  * 2 рубля
  * 5 рублей

## Установка

```php
require_once 'numd.php';
```

## API

### numd($num, $nominative, $genitiveSingular, $genitivePlural)

  Получаем слово в нужном склонении

```php
numd(14, 'рубль', 'рубля', 'рублей');
// 14 рублей
```
