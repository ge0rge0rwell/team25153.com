<?php

class __Mustache_abc0ee6070015a8f87d438da1e679e08 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/notification_base')) {
            $context->pushBlockContext([
                'alertclass' => [$this, 'blockD60644d571e50184b24a248777c976cf'],
            ]);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function blockD60644d571e50184b24a248777c976cf($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'alert-info';
    
        return $buffer;
    }
}
