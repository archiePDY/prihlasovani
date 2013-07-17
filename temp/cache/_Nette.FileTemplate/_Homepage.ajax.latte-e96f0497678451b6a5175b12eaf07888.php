<?php //netteCache[01]000391a:2:{s:4:"time";s:21:"0.95626800 1370527109";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"/Users/janikm/dev/webroot/testPages/app/templates/Homepage/ajax.latte";i:2;i:1367571022;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/templates/Homepage/ajax.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ov0s6pyr6t')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5abb43e0dc_content')) { function _lb5abb43e0dc_content($_l, $_args) { extract($_args)
?><h1>Ajax</h1>
<a class="ajax" href="<?php echo htmlSpecialChars($_control->link("changeFoo!")) ?>
">změň obsah proměnné ajaxem</a>
<div id="<?php echo $_control->getSnippetId('pokus') ?>"><?php call_user_func(reset($_l->blocks['_pokus']), $_l, $template->getParameters()) ?>
</div><?php
}}

//
// block _pokus
//
if (!function_exists($_l->blocks['_pokus'][] = '_lb46102c2a1b__pokus')) { function _lb46102c2a1b__pokus($_l, $_args) { extract($_args); $_control->validateControl('pokus')
;echo Nette\Templating\Helpers::escapeHtml($foo, ENT_NOQUOTES) ?>

<?php
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