<?php

namespace Lisin\VAT;


class StrMixin
{
    public function correctPriceCeilForNds(): callable
    {
        return static function (int $price = 0): int {
            while ($price % 3 !== 0) {
                $price++;
            }

            return $price;
        };
    }

    public function correctPriceForNds(): callable
    {
        return static function (float $price = 0): float {
            while ($price % 0.06 !== 0) {
                $price += 0.01;
            }

            return $price;
        };
    }
}
