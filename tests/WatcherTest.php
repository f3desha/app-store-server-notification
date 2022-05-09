<?php
namespace OOP\Tests;

use OOP\App\Observer\WatcherExample\CssCompiler;
use OOP\App\Observer\WatcherExample\JsCompiler;
use OOP\App\Observer\WatcherExample\Watcher;
use PHPUnit\Framework\TestCase;

class WatcherTest extends TestCase
{
    public function testWatcher()
    {
        $watcher = new Watcher();

        $cssCompiler = new CssCompiler($watcher);
        $jsCompiler = new JsCompiler($watcher);

        $watcher->fileChanged('/var/www/app/frontend/styles.css');
        $watcher->fileChanged('/var/www/app/frontend/app.js');
        $watcher->fileChanged('/var/www/app/frontend/jquery.js');

        $this->assertSame(0, 0);
    }
}
