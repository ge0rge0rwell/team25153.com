<?php

class __Mustache_69f11ecde246eb50c82a44bf9f1ebfdb extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="event-list-container"
';
        $buffer .= $indent . '     data-days-offset="';
        $blockFunction = $context->findInBlock('daysoffset');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('hasdaysoffset');
            $buffer .= $this->sectionEb227d4e59821d552e785eff34c40bc7($context, $indent, $value);
            $value = $context->find('hasdaysoffset');
            if (empty($value)) {
                
                $buffer .= '0';
            }
        }
        $buffer .= '"
';
        $buffer .= $indent . '     ';
        $value = $context->find('nodayslimit');
        if (empty($value)) {
            
            $buffer .= 'data-days-limit="';
            $blockFunction = $context->findInBlock('dayslimit');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                $value = $context->find('hasdayslimit');
                $buffer .= $this->sectionF18b214a66ab2a31f869650fafc48bbf($context, $indent, $value);
                $value = $context->find('hasdayslimit');
                if (empty($value)) {
                    
                    $buffer .= '30';
                }
            }
            $buffer .= '"';
        }
        $buffer .= '
';
        $buffer .= $indent . '     data-course-id="';
        $blockFunction = $context->findInBlock('courseid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"
';
        $buffer .= $indent . '     data-midnight="';
        $value = $this->resolveValue($context->find('midnight'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        $value = $context->find('hascourses');
        $buffer .= $this->sectionC163d78d0424c787d94d53ee99d5e757($context, $indent, $value);
        $buffer .= $indent . '    <div data-region="event-list-content"></div>
';
        if ($partial = $this->mustache->loadPartial('block_timeline/no-events')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        if ($partial = $this->mustache->loadPartial('block_timeline/no-courses')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionEb227d4e59821d552e785eff34c40bc7(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '{{daysoffset}}';
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
                
                $value = $this->resolveValue($context->find('daysoffset'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF18b214a66ab2a31f869650fafc48bbf(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '{{dayslimit}}';
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
                
                $value = $this->resolveValue($context->find('dayslimit'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC163d78d0424c787d94d53ee99d5e757(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
        <div data-region="event-list-loading-placeholder">
            <ul class="ps-0 list-group list-group-flush">
                {{> block_timeline/placeholder-event-list-item }}
                {{> block_timeline/placeholder-event-list-item }}
                {{> block_timeline/placeholder-event-list-item }}
                {{> block_timeline/placeholder-event-list-item }}
                {{> block_timeline/placeholder-event-list-item }}
            </ul>
            <div class="pt-3 pb-2 d-flex justify-content-between">
                <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
            </div>
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
                
                $buffer .= $indent . '        <div data-region="event-list-loading-placeholder">
';
                $buffer .= $indent . '            <ul class="ps-0 list-group list-group-flush">
';
                if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                if ($partial = $this->mustache->loadPartial('block_timeline/placeholder-event-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '            <div class="pt-3 pb-2 d-flex justify-content-between">
';
                $buffer .= $indent . '                <div class="w-25 bg-pulse-grey" style="height: 35px"></div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
