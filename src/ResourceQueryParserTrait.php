<?php

namespace LumenApiQueryParser;

use Illuminate\Http\Request;
use LumenApiQueryParser\Params\RequestParamsInterface;
trait ResourceQueryParserTrait
{
    protected function parseQueryParams(Request $request)
    {
        $parser = app(RequestQueryParserInterface::class);
        return $parser->parse($request);
    }
}