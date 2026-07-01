<?php

class __Mustache_9797f04e40a1ae01d1f26a3dcf3f009b extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hascourses');
        $buffer .= $this->section703e61c6d1d6ba9bb8ab034a8998353c($context, $indent, $value);
        $buffer .= $indent . '<ul class="list-group unstyled" data-region="courses-list"></ul>
';
        $buffer .= $indent . '<div class="hidden text-xs-center text-center pt-3" data-region="more-courses-button-container">
';
        $buffer .= $indent . '    <button type="button" class="btn btn-primary" data-action="more-courses">
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section73bb7631fd9d079911dc5c495910e160($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span class="hidden" data-region="loading-icon-container">
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';
        if ($partial = $this->mustache->loadPartial('block_timeline/no-events')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('block_timeline/no-courses')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section703e61c6d1d6ba9bb8ab034a8998353c(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div data-region="course-items-loading-placeholder">
        <ul class="list-group unstyled">
            {{> block_timeline/course-item-loading-placeholder }}
            {{> block_timeline/course-item-loading-placeholder }}
        </ul>
        <div class="bg-pulse-grey mt-1" style="width: 100px; height: 30px; margin-left: auto; margin-right: auto"></div>
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
                
                $buffer .= $indent . '    <div data-region="course-items-loading-placeholder">
';
                $buffer .= $indent . '        <ul class="list-group unstyled">
';
                if ($partial = $this->mustache->loadPartial('block_timeline/course-item-loading-placeholder')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('block_timeline/course-item-loading-placeholder')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        <div class="bg-pulse-grey mt-1" style="width: 100px; height: 30px; margin-left: auto; margin-right: auto"></div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73bb7631fd9d079911dc5c495910e160(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' morecourses, block_timeline ';
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
                
                $buffer .= ' morecourses, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
