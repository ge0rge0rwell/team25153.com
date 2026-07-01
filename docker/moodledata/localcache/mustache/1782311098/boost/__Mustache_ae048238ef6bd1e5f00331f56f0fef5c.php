<?php

class __Mustache_ae048238ef6bd1e5f00331f56f0fef5c extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('uservisible');
        $buffer .= $this->section15368da153d20ed024c7cf9c850ed332($context, $indent, $value);
        $value = $context->find('uservisible');
        if (empty($value)) {
            
            $buffer .= $indent . '    <span class="instancename">
';
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('instancename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ' ';
            $value = $this->resolveValue($context->find('altname'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '    </span>
';
        }

        return $buffer;
    }

    private function section15368da153d20ed024c7cf9c850ed332(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <a href="{{url}}" class="{{linkclasses}} aalink stretched-link" onclick="{{{onclick}}}">
        <span class="instancename">{{{instancename}}} {{{altname}}}</span>
    </a>
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
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('linkclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' aalink stretched-link" onclick="';
                $value = $this->resolveValue($context->find('onclick'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '        <span class="instancename">';
                $value = $this->resolveValue($context->find('instancename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('altname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
