<?php

use PHPUnit\Framework\TestCase;

use App\Html\Text;
use App\Html\Italic;

class ItalicTest extends TestCase
{
    Protected Italic $italic;
    public function setUp(): void
    {
        $this->italic = new Italic(new Text('Bonjour'));
    }

    /**
     * @test text is Text
     */
    public function testItalicItalic()
    {
        $this->assertInstanceOf('App\Html\Italic', $this->italic);
    }

    public function testStringText()
    {
        $this->assertEquals((string)$this->italic , '<em>Bonjour</em>');
    }


}