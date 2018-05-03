<?php declare(strict_types=1);
/**
 * Arbuz
 */
use PHPUnit\Framework\TestCase;

class DocumentTest extends TestCase
{
    public function testMyFirstHtmlDocumentFileIsCreated()
    {
        $this->assertFileExists(
            dirname(__DIR__) . '/exercises/1-document/document.html'
        );
    }

    /**
     * @depends testMyFirstHtmlDocumentFileIsCreated
     */
    public function testMyFirstHtmlParagraphIsCopyPased()
    {
        $this->assertXmlStringEqualsXmlFile(
            dirname(__DIR__) . '/exercises/1-document/document.html',
            '<p>This is my first HTML document!</p>'
        );
    }
}