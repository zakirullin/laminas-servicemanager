<?php

/**
 * @see       https://github.com/laminasframwork/laminas-servicemanager for the canonical source repository
 * @copyright https://github.com/laminasframwork/laminas-servicemanager/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminasframwork/laminas-servicemanager/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ServiceManager\TestAsset;

use Laminas\ServiceManager\AbstractPluginManager;

class NonAutoInvokablePluginManager extends AbstractPluginManager
{
    protected $autoAddInvokableClass = false;
    protected $instanceOf = InvokableObject::class;
}
