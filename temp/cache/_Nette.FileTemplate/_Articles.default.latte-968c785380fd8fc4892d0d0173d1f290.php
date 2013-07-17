<?php //netteCache[01]000394a:2:{s:4:"time";s:21:"0.87294600 1370593899";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:72:"/Users/janikm/dev/webroot/testPages/app/templates/Articles/default.latte";i:2;i:1367570177;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/templates/Articles/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'k8gi0fe878')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb369c03aadf_content')) { function _lb369c03aadf_content($_l, $_args) { extract($_args)
?><div class="seznam-clanku">
<?php $iterations = 0; foreach ($clanky as $clanky): ?><div>
   <div class="clanek-odkaz"><a href="<?php echo htmlSpecialChars($_control->link("Articles:article?id={$clanky->id}")) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($clanky->title, ENT_NOQUOTES) ?></a></div>
</div>
<?php $iterations++; endforeach ?>
</div>
<div class="cb"></div>
<a class="ajax"  href="<?php echo htmlSpecialChars($_control->link("reset!")) ?>
">reset signals</a>
<h1>Članky</h1>
<div id="<?php echo $_control->getSnippetId('') ?>"><?php call_user_func(reset($_l->blocks['_']), $_l, $template->getParameters()) ?>
</div>



<?php
}}

//
// block _
//
if (!function_exists($_l->blocks['_'][] = '_lb458b0a3b67__')) { function _lb458b0a3b67__($_l, $_args) { extract($_args); $_control->validateControl(false)
;$iterations = 0; foreach ($clanky as $clanky): ?><div class="clanek">
    <h2><?php echo Nette\Templating\Helpers::escapeHtml($clanky->title, ENT_NOQUOTES) ?></h2>
    <p><?php echo Nette\Templating\Helpers::escapeHtml($template->truncate($clanky->text, 300), ENT_NOQUOTES) ?></p>
<?php $_ctrl = $_control->getComponent("shopForm-$clanky->id"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
</div>
<?php $iterations++; endforeach ;
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