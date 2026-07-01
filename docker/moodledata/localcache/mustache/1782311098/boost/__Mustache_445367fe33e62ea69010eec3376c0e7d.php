<?php

class __Mustache_445367fe33e62ea69010eec3376c0e7d extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('get_items.0', true);
        $buffer .= $this->section0483a784f7c54363ffc270b2a259ffd4($context, $indent, $value);

        return $buffer;
    }

    private function sectionD29229e07a83cca1d96bbf5ab5cedbe4(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = 'breadcrumb, access';
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
                
                $buffer .= 'breadcrumb, access';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b0060da9667da720e6932d1b9543c15(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' dimmed_text';
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
                
                $buffer .= ' dimmed_text';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6dabfc6e3de0f7ff4baa136bb16e58d0(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = 'aria-current="page"';
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
                
                $buffer .= 'aria-current="page"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD354c672815be9693153e2ed645cc2eb(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = 'title="{{get_title}}"';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('get_title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6805fd502f1e55bd3a63b02c625bf221(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '{{name}}="{{value}}" ';
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

    private function section739e3fbedaffd48a91969a5872930c44(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}"
                        {{#is_last}}aria-current="page"{{/is_last}}
                        {{#get_title}}title="{{get_title}}"{{/get_title}}
                        {{#attributes}}{{name}}="{{value}}" {{/attributes}}
                    >
                        {{{get_content}}}
                    </a>
                </li>
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
                
                $buffer .= $indent . '                <li class="breadcrumb-item';
                $value = $context->find('is_hidden');
                $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        ';
                $value = $context->find('is_last');
                $buffer .= $this->section6dabfc6e3de0f7ff4baa136bb16e58d0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $context->find('get_title');
                $buffer .= $this->sectionD354c672815be9693153e2ed645cc2eb($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $context->find('attributes');
                $buffer .= $this->section6805fd502f1e55bd3a63b02c625bf221($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    >
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('get_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62795e725366e5393ca1a886076b0b87(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
            {{#has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}"
                        {{#is_last}}aria-current="page"{{/is_last}}
                        {{#get_title}}title="{{get_title}}"{{/get_title}}
                        {{#attributes}}{{name}}="{{value}}" {{/attributes}}
                    >
                        {{{get_content}}}
                    </a>
                </li>
            {{/has_action}}
            {{^has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <span {{#attributes}}{{name}}="{{value}}" {{/attributes}}>
                        {{{text}}}
                    </span>
                </li>
            {{/has_action}}
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
                
                $buffer .= '
';
                $value = $context->find('has_action');
                $buffer .= $this->section739e3fbedaffd48a91969a5872930c44($context, $indent, $value);
                $value = $context->find('has_action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="breadcrumb-item';
                    $value = $context->find('is_hidden');
                    $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                    <span ';
                    $value = $context->find('attributes');
                    $buffer .= $this->section6805fd502f1e55bd3a63b02c625bf221($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '                        ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    </span>
';
                    $buffer .= $indent . '                </li>
';
                }
                $buffer .= $indent . '        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0483a784f7c54363ffc270b2a259ffd4(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
<nav aria-label="{{#str}}breadcrumb, access{{/str}}">
    <ol class="breadcrumb">{{!
        }}{{#get_items}}
            {{#has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}"
                        {{#is_last}}aria-current="page"{{/is_last}}
                        {{#get_title}}title="{{get_title}}"{{/get_title}}
                        {{#attributes}}{{name}}="{{value}}" {{/attributes}}
                    >
                        {{{get_content}}}
                    </a>
                </li>
            {{/has_action}}
            {{^has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <span {{#attributes}}{{name}}="{{value}}" {{/attributes}}>
                        {{{text}}}
                    </span>
                </li>
            {{/has_action}}
        {{/get_items}}{{!
    }}</ol>
</nav>
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
                
                $buffer .= $indent . '<nav aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionD29229e07a83cca1d96bbf5ab5cedbe4($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '    <ol class="breadcrumb">';
                $value = $context->find('get_items');
                $buffer .= $this->section62795e725366e5393ca1a886076b0b87($context, $indent, $value);
                $buffer .= '</ol>
';
                $buffer .= $indent . '</nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
