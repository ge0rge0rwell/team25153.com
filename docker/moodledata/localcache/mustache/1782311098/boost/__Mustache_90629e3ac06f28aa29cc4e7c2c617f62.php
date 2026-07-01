<?php

class __Mustache_90629e3ac06f28aa29cc4e7c2c617f62 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="courseindexdrawerheading">
';
        $buffer .= $indent . '    <a
';
        $buffer .= $indent . '        class="courseindex-link text-truncate fw-bold"
';
        $buffer .= $indent . '        href="';
        $value = $this->resolveValue($context->find('courseurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        role="button"
';
        $buffer .= $indent . '    >';
        $value = $this->resolveValue($context->find('coursefullname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
