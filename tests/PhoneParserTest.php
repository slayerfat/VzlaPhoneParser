<?php

use PHPUnit\Framework\TestCase;
use Slayerfat\PhoneParser\PhoneParser;

class PhoneParserTest extends TestCase
{

    /**
     * @var Slayerfat\PhoneParser\PhoneParser
     */
    private $parser;

    protected function setUp()
    {
        $this->parser = new PhoneParser();
    }

    public function testParseStringShouldReturnCorrectNumber()
    {
        $results = $this->parser->parseString('algo1232224455xzx');

        $this->assertEquals(1232224455, $results);
    }

    public function testParseNumberShouldReturnCorrectString()
    {
        $this->assertEquals('(123)-456-7890', $this->parser->parseNumber('01234567890'));
        $this->assertEquals('(123)-456-7890', $this->parser->parseNumber(1234567890));
    }
}
