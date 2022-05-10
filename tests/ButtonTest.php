<?php
namespace OOP\Tests;

use OOP\App\Observer\UIExample\Button;
use OOP\App\Observer\UIExample\FileUploaderListener;
use PHPUnit\Framework\TestCase;

class ButtonTest extends TestCase
{
    public function testButton()
    {
        $button = new Button();
        $uploaderListener = new FileUploaderListener($button);

        $button->press();

        $this->assertSame(0, 0);
    }
}
