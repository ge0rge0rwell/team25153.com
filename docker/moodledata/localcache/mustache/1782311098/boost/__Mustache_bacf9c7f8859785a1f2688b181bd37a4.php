<?php

class __Mustache_bacf9c7f8859785a1f2688b181bd37a4 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-grid" data-region="add-block-button">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('link'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="addblock-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="btn btn-add-content mb-3" data-key="addblock"
';
        $buffer .= $indent . '            data-url="';
        $value = $this->resolveValue($context->find('escapedlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-blockregion="';
        $value = $this->resolveValue($context->find('blockregion'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <i class="fa fa-plus py-2 me-2" aria-hidden="true"></i>';
        $value = $context->find('str');
        $buffer .= $this->section01c4df664c89cfcff5e9a8f2e1bca393($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section125ef8b0ba7e1bdadce90e1f06f1d255($context, $indent, $value);

        return $buffer;
    }

    private function section01c4df664c89cfcff5e9a8f2e1bca393(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = 'addblock';
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
                
                $buffer .= 'addblock';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section125ef8b0ba7e1bdadce90e1f06f1d255(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    // Initialise the JS for the modal window which displays the blocks available to add.
    require([\'core_block/add_modal\'], function(addBlockModal) {
        addBlockModal.init(null, \'{{pagehash}}\');
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
                
                $buffer .= $indent . '    // Initialise the JS for the modal window which displays the blocks available to add.
';
                $buffer .= $indent . '    require([\'core_block/add_modal\'], function(addBlockModal) {
';
                $buffer .= $indent . '        addBlockModal.init(null, \'';
                $value = $this->resolveValue($context->find('pagehash'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
