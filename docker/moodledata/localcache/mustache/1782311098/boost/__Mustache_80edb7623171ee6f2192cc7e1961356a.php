<?php

class __Mustache_80edb7623171ee6f2192cc7e1961356a extends \Mustache\Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(\Mustache\Context $context, $indent = '')
    {
        $this->lambdaHelper = new \Mustache\LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="view-conversation hidden h-100"
';
        $buffer .= $indent . '    aria-hidden="true"
';
        $buffer .= $indent . '    data-region="view-conversation"
';
        $buffer .= $indent . '    data-user-id="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id', true), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-midnight="';
        $value = $this->resolveValue($context->findDot('loggedinuser.midnight', true), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-message-poll-min="';
        $value = $this->resolveValue($context->find('messagepollmin'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-message-poll-max="';
        $value = $this->resolveValue($context->find('messagepollmax'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-message-poll-after-max="';
        $value = $this->resolveValue($context->find('messagepollaftermax'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    style="overflow-y: auto; overflow-x: hidden"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
';
        $buffer .= $indent . '        <div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
';
        $buffer .= $indent . '            <div class="py-3 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
';
        $buffer .= $indent . '                <p class="m-0">';
        $value = $context->find('str');
        $buffer .= $this->sectionCa904a119b3dac50271d2b70edc496a4($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                <p class="fst-italic fw-light" data-region="text"></p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="p-3 text-center hidden" data-region="self-conversation-message-container">
';
        $buffer .= $indent . '                <p class="m-0">';
        $value = $context->find('str');
        $buffer .= $this->sectionE25923aa4be0179138e2662b61384260($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                <p class="fst-italic fw-light" data-region="text">';
        $value = $context->find('str');
        $buffer .= $this->section3ccb8d9c909989e8235c137f4161b0e4($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="p-3 text-center hidden" data-region="unable-to-send-container">
';
        $buffer .= $indent . '                <p class="m-0">';
        $value = $context->find('str');
        $buffer .= $this->section810e1fffab3303e19bfbd34bd55ffb67($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                <p class="fst-italic fw-light" data-region="text">';
        $value = $context->find('str');
        $buffer .= $this->section6a9da7db8ed0e09c034e8713f3eead2f($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="hidden text-center p-3" data-region="more-messages-loading-icon-container">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="p-4 w-100 h-100 hidden position-absolute z-index-1" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_body_confirm_dialogue')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="px-2 pb-2 pt-0" data-region="content-placeholder">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_conversation_body_placeholder')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCa904a119b3dac50271d2b70edc496a4(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' contactrequestsent, core_message ';
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
                
                $buffer .= ' contactrequestsent, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE25923aa4be0179138e2662b61384260(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' selfconversation, core_message ';
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
                
                $buffer .= ' selfconversation, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ccb8d9c909989e8235c137f4161b0e4(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' selfconversationdefaultmessage, core_message ';
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
                
                $buffer .= ' selfconversationdefaultmessage, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section810e1fffab3303e19bfbd34bd55ffb67(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' cannotsendmessages, core_message ';
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
                
                $buffer .= ' cannotsendmessages, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a9da7db8ed0e09c034e8713f3eead2f(\Mustache\Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (is_object($value) && is_callable($value)) {
            $source = ' nopermissiontosend, core_message ';
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
                
                $buffer .= ' nopermissiontosend, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
