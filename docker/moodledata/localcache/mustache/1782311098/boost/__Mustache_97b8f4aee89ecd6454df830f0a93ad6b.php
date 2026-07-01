<?php

class __Mustache_97b8f4aee89ecd6454df830f0a93ad6b extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-flex p-3 justify-content-end">
';
        $buffer .= $indent . '    <button
';
        $buffer .= $indent . '        class="btn btn-icon my-1 icon-size-4"
';
        $buffer .= $indent . '        data-action="delete-selected-messages"
';
        $buffer .= $indent . '        data-bs-toggle="tooltip"
';
        $buffer .= $indent . '        data-bs-placement="top"
';
        $buffer .= $indent . '        title="';
        $value = $context->find('str');
        $buffer .= $this->section6910e05b9a1417486b5764734b1a6842($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <span data-region="icon-container">';
        $value = $context->find('pix');
        $buffer .= $this->section5db487840f03aab04401ab4522889c84($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="hidden" data-region="loading-icon-container">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '        <span class="visually-hidden">';
        $value = $context->find('str');
        $buffer .= $this->section6910e05b9a1417486b5764734b1a6842($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section6910e05b9a1417486b5764734b1a6842(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' deleteselectedmessages, core_message ';
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
                
                $buffer .= ' deleteselectedmessages, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5db487840f03aab04401ab4522889c84(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' i/delete, core ';
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
                
                $buffer .= ' i/delete, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
