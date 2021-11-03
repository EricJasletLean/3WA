<?php

use PHPUnit\Framework\TestCase;

use App\Html\Text;
use App\Html\Italic;
use App\Html\Paragraph;

class ParagraphTest extends TestCase
{
    Protected Paragraph $paragraph;
    public function setUp(): void
    {
        $this->paragraph = new Paragraph((new Italic(new Text('Bonjour'))));
    }

    /**
     * @test text is Text
     */
    public function testParagraphIsParagraph()
    {
        $this->assertInstanceOf('App\Html\Paragraph', $this->paragraph);
    }

    public function testStringText()
    {
        $this->assertEquals((string)$this->paragraph , '<p><em>Bonjour</em></p>');
    }


}