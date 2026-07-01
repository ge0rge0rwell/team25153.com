<?php

class __Mustache_2047e3868913da539711956928682f2c extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav id="courseindex" class="courseindex">
';
        $buffer .= $indent . '    <div id="courseindex-content">
';
        if ($partial = $this->mustache->loadPartial('core_courseformat/local/courseindex/placeholders')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</nav>
';
        $blockFunction = $context->findInBlock('core_courseformat/local/courseindex/drawer-js');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('js');
            $buffer .= $this->section2cf115b95431be1570dee572f3aea00e($context, $indent, $value);
        }

        return $buffer;
    }

    private function section2cf115b95431be1570dee572f3aea00e(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
require([\'core_courseformat/local/courseindex/drawer\'], function(component) {
    component.init(\'#courseindex\');
});
';
            $value = call_user_func($value, $source, $this->lambdaHelper);
    
            if ($value instanceof \Mustache\RenderedString) {
                return $value->getValue();
            }
    
            if (is_string($value)) {
                if (strpos($value, '{{') === false) {
                    return $value;
                }
    
                return $this->mustache
                    ->loadLambda($value)
                    ->renderInternal($context);
            }
        }
    
        if (!empty($value)) {
            $values = $this->isIterable($value) ? $value : [$value];
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_courseformat/local/courseindex/drawer\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'#courseindex\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
