<?php

class __Mustache_7453b2831c571d9f0b76669d1eb115e7 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/notification_base')) {
            $context->pushBlockContext([
                'alertclass' => [$this, 'block70374e40d8af9fc27e052400cb31cbe8'],
            ]);
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block70374e40d8af9fc27e052400cb31cbe8($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'alert-danger';
    
        return $buffer;
    }
}
