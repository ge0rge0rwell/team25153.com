<?php

class __Mustache_b136e87a397b8682b0a84c21bf9c2b92 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-flex p-2 align-items-center">
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->section90c3e2f09f9135ab908454d2e6d60d5b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <span class="ms-1" data-region="message-selected-court">1</span>
';
        $buffer .= $indent . '    <button type="button" class="ms-auto btn-close" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section9a2ea9d448b950c6ba5068f1d0ea6171($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-action="cancel-edit-mode">
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section90c3e2f09f9135ab908454d2e6d60d5b(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' messagesselected:, core_message ';
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
                
                $buffer .= ' messagesselected:, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a2ea9d448b950c6ba5068f1d0ea6171(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' cancelselection, core_message ';
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
                
                $buffer .= ' cancelselection, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
