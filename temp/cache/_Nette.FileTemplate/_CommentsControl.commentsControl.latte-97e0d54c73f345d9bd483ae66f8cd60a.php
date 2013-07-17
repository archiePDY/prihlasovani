<?php //netteCache[01]000410a:2:{s:4:"time";s:21:"0.21622500 1370593900";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:88:"/Users/janikm/dev/webroot/testPages/app/components/CommentsControl/commentsControl.latte";i:2;i:1366967884;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/components/CommentsControl/commentsControl.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'tud8phtng5')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb65a0b4d37e_content')) { function _lb65a0b4d37e_content($_l, $_args) { extract($_args)
 ?>
<div id="<?php echo $_control->getSnippetId('comments') ?>"><?php call_user_func(reset($_l->blocks['_comments']), $_l, $template->getParameters()) ?>
</div><div id="<?php echo $_control->getSnippetId('foo') ?>"><?php call_user_func(reset($_l->blocks['_foo']), $_l, $template->getParameters()) ?>
</div>
<div id="<?php echo $_control->getSnippetId('form') ?>"><?php call_user_func(reset($_l->blocks['_form']), $_l, $template->getParameters()) ?>
</div>
<?php
}}

//
// block _comments
//
if (!function_exists($_l->blocks['_comments'][] = '_lbd288dc8faf__comments')) { function _lbd288dc8faf__comments($_l, $_args) { extract($_args); $_control->validateControl('comments')
;$iterations = 0; foreach ($comments as $comments): ?>
<div>
<?php echo Nette\Templating\Helpers::escapeHtml($comments['jmeno'], ENT_NOQUOTES) ?>

<?php echo Nette\Templating\Helpers::escapeHtml($comments['text'], ENT_NOQUOTES) ?>

    <a class="ajax" href="<?php echo htmlSpecialChars($_control->link("delete!", array($comments->id))) ?>
">Smazat</a>
</div>

<?php $iterations++; endforeach ;
}}

//
// block _foo
//
if (!function_exists($_l->blocks['_foo'][] = '_lb5d0db5f9a5__foo')) { function _lb5d0db5f9a5__foo($_l, $_args) { extract($_args); $_control->validateControl('foo')
;echo Nette\Templating\Helpers::escapeHtml($isRated, ENT_NOQUOTES) ?>

<?php if ($isRated): ?>
I like this <a class="ajax" href="<?php echo htmlSpecialChars($_control->link("unlike!")) ?>
">I don' like anymore</a>
<?php else: ?>
<a class="ajax" href="<?php echo htmlSpecialChars($_control->link("like!")) ?>">I like it</a>
<?php endif ;
}}

//
// block _form
//
if (!function_exists($_l->blocks['_form'][] = '_lb3e5d45eecd__form')) { function _lb3e5d45eecd__form($_l, $_args) { extract($_args); $_control->validateControl('form')
;Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("addCommentsForm") ? "addCommentsForm" : $_control["addCommentsForm"]), array('class'=>'ajax')) ?>
<table>
    <tr>
        <th><?php $_input = is_object("name") ? "name" : $_form["name"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("name") ? "name" : $_form["name"]); echo $_input->getControl()->addAttributes(array()) ?></td>         
    </tr>
    <tr>
        <th><?php $_input = is_object("text") ? "text" : $_form["text"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("text") ? "text" : $_form["text"]); echo $_input->getControl()->addAttributes(array()) ?></td>         
    </tr>
    <tr>
        <th></th>
        <td><?php $_input = (is_object("send") ? "send" : $_form["send"]); echo $_input->getControl()->addAttributes(array()) ?></td>         
    </tr>
</table>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>


<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 