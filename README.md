# Функции помощники для нормализации цен с НДС 20% для Laravel 6

## Установка
    composer require lisin/vat:^1.0.0

## Использование
### Для цен с округлением до целых

    $price = Str::correctPriceCeilForNds(100);
    // 102 (в том числе НДС 17)
### Для цен с округлением до десятых

    $price = Str::correctPriceForNds(100.00);
    // 100.02 (в том числе НДС 16,67)



