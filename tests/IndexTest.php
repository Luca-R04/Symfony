<?php
// framework/test.php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testHello(): void
    {
        $_GET['name'] = 'Luca';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Luca', $content);
    }
}