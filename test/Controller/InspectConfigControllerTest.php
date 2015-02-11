<?php

namespace PommProjectTest\PommModule\Controller;

use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;
use PommProjectTest\PommModule\Bootstrap;

class InspectConfigControllerTest extends AbstractConsoleControllerTestCase
{
    protected $traceError = true;

    public function setUp()
    {
        $a = Bootstrap::init();
        
        
        $this->setApplicationConfig(
            include '../config/cli.config.php'
        );
        parent::setUp();
    }

    /**
     * Check console
     * 
     * @return void
     */
    public function testInspectConfig()
    {
        $this->dispatch('inspect-config');
        $this->assertResponseStatusCode(0);
        $this->assertModuleName('pommproject');
        $this->assertControllerName('pommproject\pommmodule\controller\inspectconfigcontroller');
        $this->assertControllerClass('InspectConfigController');
        $this->assertMatchedRouteName('inspect-config');
    }
}
