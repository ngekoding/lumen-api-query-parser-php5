<?php

namespace LumenApiQueryParser\Provider;

use Illuminate\Support\ServiceProvider;
use LumenApiQueryParser\RequestQueryParser;
use LumenApiQueryParser\RequestQueryParserInterface;
class RequestQueryParserProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(RequestQueryParserInterface::class, function () {
            return new RequestQueryParser();
        });
    }
}