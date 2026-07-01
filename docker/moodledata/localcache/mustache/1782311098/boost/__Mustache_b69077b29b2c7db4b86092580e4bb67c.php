<?php

class __Mustache_b69077b29b2c7db4b86092580e4bb67c extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="page-context-header d-flex flex-wrap align-items-center mb-2">
';
        $value = $context->find('imagedata');
        $buffer .= $this->section1726143848725a0be3f566a9bbce1834($context, $indent, $value);
        $buffer .= $indent . '    <div class="page-header-headings">
';
        $value = $context->find('prefix');
        $buffer .= $this->sectionF1f977c84330277730c0c42fe4ef83b6($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('heading'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('hasadditionalbuttons');
        $buffer .= $this->section160f128ae36eed949c36d71f7d1c4d45($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section1726143848725a0be3f566a9bbce1834(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="page-header-image">
        {{{imagedata}}}
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
                
                $buffer .= $indent . '    <div class="page-header-image">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('imagedata'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1f977c84330277730c0c42fe4ef83b6(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
        <div class="text-muted text-uppercase small line-height-3">
            {{{prefix}}}
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
                
                $buffer .= $indent . '        <div class="text-muted text-uppercase small line-height-3">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('prefix'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfa84c60ffaeca4e2848b955ec713562(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}" ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70275950d889f897d8443ef41210b8ca(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '{{formattedimage}}';
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
                
                $value = $this->resolveValue($context->find('formattedimage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section492f3c32d5293c0dfeaf3d4b3e62ef46(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
                    {{#pix}}{{formattedimage}}{{/pix}}
                    <span class="header-button-title">{{title}}</span>
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
                
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section70275950d889f897d8443ef41210b8ca($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <span class="header-button-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bcd4a3f3d35539223c3af98b0a7d078(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
            <a href="{{url}}" {{#attributes}} {{name}}="{{value}}" {{/attributes}}>
                {{#page}}
                    {{#pix}}{{formattedimage}}{{/pix}}
                    <span class="header-button-title">{{title}}</span>
                {{/page}}
                {{^page}}
                    <img src="{{formattedimage}}" alt="{{title}}">
                {{/page}}
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('attributes');
                $buffer .= $this->sectionFfa84c60ffaeca4e2848b955ec713562($context, $indent, $value);
                $buffer .= '>
';
                $value = $context->find('page');
                $buffer .= $this->section492f3c32d5293c0dfeaf3d4b3e62ef46($context, $indent, $value);
                $value = $context->find('page');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <img src="';
                    $value = $this->resolveValue($context->find('formattedimage'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" alt="';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                }
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section160f128ae36eed949c36d71f7d1c4d45(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="btn-group header-button-group d-block mx-sm-3">
        {{#additionalbuttons}}
            <a href="{{url}}" {{#attributes}} {{name}}="{{value}}" {{/attributes}}>
                {{#page}}
                    {{#pix}}{{formattedimage}}{{/pix}}
                    <span class="header-button-title">{{title}}</span>
                {{/page}}
                {{^page}}
                    <img src="{{formattedimage}}" alt="{{title}}">
                {{/page}}
            </a>
        {{/additionalbuttons}}
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
                
                $buffer .= $indent . '    <div class="btn-group header-button-group d-block mx-sm-3">
';
                $value = $context->find('additionalbuttons');
                $buffer .= $this->section3bcd4a3f3d35539223c3af98b0a7d078($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
