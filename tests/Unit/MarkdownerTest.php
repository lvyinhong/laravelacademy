<?php
/**
 * Created by PhpStorm.
 * User: lyh
 * Date: 2018/11/8
 * Time: 11:21 PM
 */

namespace Tests\Unit;


use Tests\TestCase;

class MarkdownerTest extends TestCase
{
    protected $markdown;

    public function setUp()
    {
        $this->markdown = new \App\Services\Markdowner();
    }

    /**
     * @dataProvider conversionsProvider
     */
    public function testConversions($value, $expected)
    {
        $this->assertEquals($expected, $this->markdown->toHTML($value));
    }

    public function conversionsProvider()
    {
        return [
            ["test", "<p>test</p>\n"],
            ["# title", "<h1>title</h1>\n"],
            ["Here's Johnny!", "<p>Here&#8217;s Johnny!</p>\n"]
        ];
    }
}