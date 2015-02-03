<?php
/**
 * Base module for integration of Pomm projects with ZF2 applications
 *
 * @license MIT
 * @link    http://www.pomm-project.org/
 * @author  Martin Supiot <msupiot@jack.fr>
 */

namespace PommProject\PommModule\Controller;

use Zend\Console\Adapter\AdapterInterface as Console;
use Zend\Console\Request as ConsoleRequest;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Console controller
 * Generate Pomm base class
 */
abstract class AbstractCliPommController extends AbstractActionController
{
    /**
     * Get options from parameters
     * 
     * @param  ConsoleRequest $request The request
     * @return array                   An array of parameters
     */
    protected function getToolOptions(ConsoleRequest $request)
    {
        $options = array();
        $pommService = $this->getServiceLocator()->get('PommProject\PommModule\Service\PommServiceFactory');

        // TODO : Remove hard code database name
        $options['database-name'] = $request->getParam('database', '') == '' ? 'pstudio2' : $request->getParam('database');
        $options['database'] = $pommService->getBuilder($options['database-name']);
        $options['prefix_dir'] = $request->getParam('prefix-path', getcwd());
        if (!is_null($request->getParam('prefix-namespace', null))) {
            $options['prefix_namespace'] = $request->getParam('prefix-namespace');
        }
        $options['schema'] = $request->getParam('schema', 'public');
        $options['extends'] = $request->getParam('extends', 'BaseObjectMap');

        return $options;
    }
}
