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

### Numd::decline($num, $nominative, $genitiveSingular, $genitivePlural)

  Получаем слово в нужном склонении

```php
Numd::decline(14, 'рубль', 'рубля', 'рублей');
// 14 рублей
```

## License

  MIT
