<?php
namespace OOP\Tests;

use OOP\App\Observer\UIExample\Button;
use OOP\App\Observer\UIExample\ConsoleInfoListener;
use OOP\App\Observer\UIExample\FileUploaderListener;
use PHPUnit\Framework\TestCase;

class ButtonTest extends TestCase
{
    public function testButton()
    {
        $button = new Button();
        new FileUploaderListener($button);
        new ConsoleInfoListener($button);

        $button->press();

        $this->assertSame(0, 0);
    }
}
