<?php

class __Mustache_e3a36bbf75337d501faa365e83640003 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card border-0 tool_mobile-settings-alert">
';
        $buffer .= $indent . '<div class="card-body bg-primary bg-opacity-10 border rounded';
        $value = $context->find('reloadcache');
        $buffer .= $this->section8f24bd35fb12d84cea3fa8986a0bd602($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('reloadcache');
        if (empty($value)) {
            
            $buffer .= 'mb-4';
        }
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="d-flex justify-content-between align-items-center text-primary">
';
        $buffer .= $indent . '        <div>
';
        $value = $context->find('title');
        $buffer .= $this->sectionFaac216886ba7a09208dd6ccaca628af($context, $indent, $value);
        $buffer .= $indent . '        <div class="ms-4">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('buttonurl');
        $buffer .= $this->section409d9dfe0be727c1edbef9911212f03b($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('reloadcache');
        $buffer .= $this->section3aa305cbfd4e6aea7314714c87ad6bd5($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section8f24bd35fb12d84cea3fa8986a0bd602(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '-top';
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
                
                $buffer .= '-top';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDaa324c2f54ba534b8a6c658eef8d843(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
                    <span class="icon">{{icon}}</span>
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
                
                $buffer .= $indent . '                    <span class="icon">';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFaac216886ba7a09208dd6ccaca628af(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
            <div class="mb-2 mt-1 d-flex alert-heading">
                {{#icon}}
                    <span class="icon">{{icon}}</span>
                {{/icon}}
                <h3 class="h6 mb-0 fw-bold">
                    <span class="align-middle">{{.}}</span>
                </h3>
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
                
                $buffer .= $indent . '            <div class="mb-2 mt-1 d-flex alert-heading">
';
                $value = $context->find('icon');
                $buffer .= $this->sectionDaa324c2f54ba534b8a6c658eef8d843($context, $indent, $value);
                $buffer .= $indent . '                <h3 class="h6 mb-0 fw-bold">
';
                $buffer .= $indent . '                    <span class="align-middle">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                </h3>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section409d9dfe0be727c1edbef9911212f03b(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
        <div>
            <a href="{{buttonurl}}"
            class="btn fw-light btn-primary text-white {{extrabuttonclasses}}">{{buttonstr}}</a>
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
                
                $buffer .= $indent . '        <div>
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('buttonurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '            class="btn fw-light btn-primary text-white ';
                $value = $this->resolveValue($context->find('extrabuttonclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('buttonstr'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13a97285d0a757f0cf58c015a53de868(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = 'i/reload, core';
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
                
                $buffer .= 'i/reload, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfbee7673a4c5cc10d32ed0d7df9d43c(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' refreshplanstatus, tool_mobile ';
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
                
                $buffer .= ' refreshplanstatus, tool_mobile ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3aa305cbfd4e6aea7314714c87ad6bd5(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
<div class="card-footer border border-top-0 text-muted small">
    {{reloadcache.text}}
    <a href="{{reloadcache.url}}">{{#pix}}i/reload, core{{/pix}}{{#str}} refreshplanstatus, tool_mobile {{/str}}</a>
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
                
                $buffer .= $indent . '<div class="card-footer border border-top-0 text-muted small">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->findDot('reloadcache.text', true), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->findDot('reloadcache.url', true), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('pix');
                $buffer .= $this->section13a97285d0a757f0cf58c015a53de868($context, $indent, $value);
                $value = $context->find('str');
                $buffer .= $this->sectionAfbee7673a4c5cc10d32ed0d7df9d43c($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
