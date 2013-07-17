<?php //netteCache[01]000396a:2:{s:4:"time";s:21:"0.31520000 1361782664";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"/Users/janikm/dev/webroot/testPages/app/templates/Components/zesveta.latte";i:2;i:1361704007;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/templates/Components/zesveta.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '1wx15dwh57')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc9d79eae48_content')) { function _lbc9d79eae48_content($_l, $_args) { extract($_args)
;$_ctrl = $_control->getComponent("menuArticles"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>

<div class="cb"></div>
<div class="content">
<?php $iterations = 0; foreach ($clanky as $clanky): ?>    <div>
        <h1><?php echo Nette\Templating\Helpers::escapeHtml($clanky->title, ENT_NOQUOTES) ?></h1>
        <p><?php echo Nette\Templating\Helpers::escapeHtml($clanky->text, ENT_NOQUOTES) ?></p>
    </div>    
<?php $iterations++; endforeach ?>


<?php $_ctrl = $_control->getComponent("comments"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</div><?php
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 