<?php

namespace Lisin\VAT;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class VATServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Str::mixin(new StrMixin());
    }
}
