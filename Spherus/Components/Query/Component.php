<?php

/**
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright SPHERUS (http://spherus.net)
 * @license http://license.spherus.net
 * @link http://spherus.net
 * @since 3.0
 */
namespace Spherus\Components\Query;

use Spherus\Core\Base\SystemComponentBase;

/**
 * Class that represents query component for SPHERUS Framework
 * 
 * @author Rostislav Rotaru (rostislav.rotaru@spherus.net)
 * @package spherus.components.query
 */
class Component extends SystemComponentBase
{
    
    /* CONSTRUCTOR */
    
    /**
    * Initializes a new instance of Component class.
    */
    public function __construct()
    {
        $this->SetComponentAttributes();
    }
    
    /* PRIVATE FUNCTIONS */
    
    /**
    * Sets component Author, Description, Name and other attributes.
    */
    private function SetComponentAttributes()
    {
        $this->setAuthor('SPHERUS');
        $this->setDescription('Sql query generator component for framework');
        $this->setName('Query');
        $this->setVersion('1.0.0');
        $this->AddDependingComponent(new \Spherus\Components\Data\Component());
    }
}