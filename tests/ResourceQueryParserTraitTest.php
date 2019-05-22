<?php

namespace Test;

use Laravel\Lumen\Application;
use LumenApiQueryParser\Params\RequestParams;
use LumenApiQueryParser\Provider\RequestQueryParserProvider;
use LumenApiQueryParser\ResourceQueryParserTrait;
use Illuminate\Http\Request;
class ResourceQueryParserTraitTest extends AbstractQueryParserTest
{
    use ResourceQueryParserTrait;
    protected $application;
    public function setup()
    {
        parent::setUp();
        $this->application = $this->createApplication();
    }
    protected function createApplication()
    {
        $app = new Application();
        $app->register(RequestQueryParserProvider::class);
        return $app;
    }
    /**
     * @test
     */
    public function parseWithoutParameters()
    {
        $request = new Request([]);
        $parsedParameters = $this->parseQueryParams($request);
        $expectedParameters = new RequestParams();
        $this->assertEquals($expectedParameters, $parsedParameters);
    }
    /**
     * @test
     * @dataProvider goodRequests
     */
    public function parseWithParameters(Request $request, array $expected)
    {
        $parsedParams = $this->parseQueryParams($request);
        $expectedParams = $this->createRequestParams($expected['filters'], $expected['sorts'], $expected['limit'], $expected['page'], $expected['connections']);
        $this->assertEquals($expectedParams, $parsedParams);
    }
    /**
     * @test
     * @dataProvider badRequests
     */
    public function parseWithWrongParameters(Request $request, $expectedException)
    {
        $this->expectException($expectedException);
        $this->parseQueryParams($request);
    }
}