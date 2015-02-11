<?php

namespace PommProjectTest\PommModule\Controller;

use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;
use PommProjectTest\PommModule\Bootstrap;

class InspectDatabaseControllerTest extends AbstractConsoleControllerTestCase
{
    protected $traceError = true;

    public function setUp()
    {
        $a = Bootstrap::init();
        
        
        $this->setApplicationConfig(
            include 'config/cli.config.php'
        );
        parent::setUp();
    }

    /**
     * Check console
     * 
     * @return void
     */
    public function testInspectDatabase()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
             ->willReturn('foo');
        
        $this->dispatch('inspect-database');
        $this->assertResponseStatusCode(0);
        $this->assertModuleName('pommproject');
        $this->assertControllerName('pommproject\pommmodule\controller\inspectdatabasecontroller');
        $this->assertControllerClass('InspectDatabaseController');
        $this->assertMatchedRouteName('inspect-database');
    }
}
