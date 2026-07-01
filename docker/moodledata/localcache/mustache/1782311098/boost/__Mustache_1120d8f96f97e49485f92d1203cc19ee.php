<?php

class __Mustache_1120d8f96f97e49485f92d1203cc19ee extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/notification_base')) {
            $context->pushBlockContext([
                'alertclass' => [$this, 'block28846b5b98ccf00daa31c59d5af21e4e'],
            ]);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block28846b5b98ccf00daa31c59d5af21e4e($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'alert-warning';
    
        return $buffer;
    }
}
