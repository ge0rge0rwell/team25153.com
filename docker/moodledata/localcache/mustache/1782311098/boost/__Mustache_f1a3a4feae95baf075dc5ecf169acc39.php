<?php

class __Mustache_f1a3a4feae95baf075dc5ecf169acc39 extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hascourses');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="text-xs-center text-center mt-3" data-region="no-courses-empty-message">
';
            $buffer .= $indent . '        <img
';
            $buffer .= $indent . '            src="';
            $value = $this->resolveValue($context->findDot('urls.noevents', true), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            alt=""
';
            $buffer .= $indent . '            style="height: 70px; width: 70px"
';
            $buffer .= $indent . '        >
';
            $buffer .= $indent . '        <p class="text-muted mt-1">';
            $value = $context->find('str');
            $buffer .= $this->section8ac1faa3b604bd216bd6406aef5a4809($context, $indent, $value);
            $buffer .= '</p>
';
            $buffer .= $indent . '    </div>
';
        }

        return $buffer;
    }

    private function section8ac1faa3b604bd216bd6406aef5a4809(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' nocoursesinprogress, block_timeline ';
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
                
                $buffer .= ' nocoursesinprogress, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
