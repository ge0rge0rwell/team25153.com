<?php

class __Mustache_de3fdab50265c0cdfed9cf92f22444c5 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="section_availability">
';
        $value = $context->find('hasavailability');
        $buffer .= $this->section85d5c76946ccd7cbbf9acbcd25e5dfce($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionDd3ad1e0227838ab66da2091a17f59a2(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
            {{> core_courseformat/local/content/availability }}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/availability')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEac66641554c80612e492bf7cfab5bbb(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
        <div class="availabilityinfo {{classes}}" data-region="availabilityinfo">
        {{^isrestricted}}
            <span class="badge rounded-pill bg-warning text-dark">{{{text}}}</span>
        {{/isrestricted}}
        {{#isrestricted}}
            {{> core_courseformat/local/content/availability }}
        {{/isrestricted}}
        </div>
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
                
                $buffer .= $indent . '        <div class="availabilityinfo ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-region="availabilityinfo">
';
                $value = $context->find('isrestricted');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <span class="badge rounded-pill bg-warning text-dark">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span>
';
                }
                $value = $context->find('isrestricted');
                $buffer .= $this->sectionDd3ad1e0227838ab66da2091a17f59a2($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85d5c76946ccd7cbbf9acbcd25e5dfce(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    {{#info}}
        <div class="availabilityinfo {{classes}}" data-region="availabilityinfo">
        {{^isrestricted}}
            <span class="badge rounded-pill bg-warning text-dark">{{{text}}}</span>
        {{/isrestricted}}
        {{#isrestricted}}
            {{> core_courseformat/local/content/availability }}
        {{/isrestricted}}
        </div>
    {{/info}}
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
                
                $value = $context->find('info');
                $buffer .= $this->sectionEac66641554c80612e492bf7cfab5bbb($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
