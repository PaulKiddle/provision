<?php

namespace Aegir\Provision\Common;

use Aegir\Provision\Context;

trait ContextAwareTrait
{
    /**
     * @var Context
     */
    protected $context = NULL;
    
    /**
     * @param Context $context
     *
     * @return $this
     */
    public function setContext(Context $context = NULL)
    {
        $this->context = $context;
        
        return $this;
    }
    
    /**
     * @return Context
     */
    public function getContext()
    {
        return $this->context;
    }
}
