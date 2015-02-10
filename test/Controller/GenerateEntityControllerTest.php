<?php

namespace ApplicationTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

class GenerateEntityControllerTest extends AbstractConsoleControllerTestCase
{
    protected $traceError = true;

    public function setUp()
    {
        $this->setApplicationConfig(
            include 'config/console.config.php'
        );
        parent::setUp();
    }

    /**
     * Check console
     * 
     * @return void
     */
    public function testIndexActionRedirectToDoc()
    {
        $this->dispatch('--your-arg');
        $this->assertResponseStatusCode(0);

        $this->assertModule('application');
        $this->assertControllerName('application_console');
        $this->assertControllerClass('ConsoleController');
        $this->assertMatchedRouteName('myaction');
    }
}
