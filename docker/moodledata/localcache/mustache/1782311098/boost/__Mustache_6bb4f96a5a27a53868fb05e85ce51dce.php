<?php

class __Mustache_6bb4f96a5a27a53868fb05e85ce51dce extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="hidden"
';
        $buffer .= $indent . '    aria-hidden="true"
';
        $buffer .= $indent . '    data-region="view-group-info"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="pt-3 h-100 d-flex flex-column"
';
        $buffer .= $indent . '        data-region="group-info-content-container"
';
        $buffer .= $indent . '        style="overflow-y: auto"
';
        $buffer .= $indent . '    ></div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
