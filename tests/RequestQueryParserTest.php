<?php

namespace Test;

use Illuminate\Http\Request;
use LumenApiQueryParser\RequestQueryParser;
class RequestQueryParserTest extends AbstractQueryParserTest
{
    /**
     * @var RequestQueryParser
     */
    protected $parser;
    public function setUp()
    {
        parent::setUp();
        $this->parser = new RequestQueryParser();
    }
    /**
     * @test
     */
    public function parseWithoutParameter()
    {
        $request = new Request([]);
        $parsedParams = $this->parser->parse($request);
        $expectedParams = $this->createRequestParams();
        $this->assertEquals($expectedParams, $parsedParams);
    }
    /**
     * @test
     * @dataProvider goodRequests
     */
    public function parseWithParameters(Request $request, array $expected)
    {
        $parsedParams = $this->parser->parse($request);
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
        $this->parser->parse($request);
    }
}