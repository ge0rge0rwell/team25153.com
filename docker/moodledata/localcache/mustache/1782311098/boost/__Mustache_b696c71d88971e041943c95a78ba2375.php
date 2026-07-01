<?php

class __Mustache_b696c71d88971e041943c95a78ba2375 extends \Mustache\Template
{
    protected $strictCallables = true;
    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="card mb-1">
';
        $buffer .= $indent . '    <div class="card-body p-2 m-1">
';
        $buffer .= $indent . '        <div class="d-flex flex-row mw-100 align-items-center">
';
        $buffer .= $indent . '            <div class="bg-pulse-grey rounded-circle" style="height: 40px; width: 40px;"></div>
';
        $buffer .= $indent . '            <div class="ps-2" style="flex: 1;">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100" style="height: 1rem;"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-75 mt-1" style="height: 0.8rem;"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
