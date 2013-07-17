<?php //netteCache[01]000394a:2:{s:4:"time";s:21:"0.87165700 1372324420";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:72:"/Users/janikm/dev/webroot/testPages/app/templates/Articles/article.latte";i:2;i:1366967046;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/templates/Articles/article.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'i0i89o590k')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbf7063b2f78_content')) { function _lbf7063b2f78_content($_l, $_args) { extract($_args)
?>    <h1><?php echo Nette\Templating\Helpers::escapeHtml($clanky->title, ENT_NOQUOTES) ?></h1>
    <p><?php echo Nette\Templating\Helpers::escapeHtml($clanky->text, ENT_NOQUOTES) ?></p>


<?php $_ctrl = $_control->getComponent("comments"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
    <div class="clanek-odkaz"><a  href="<?php echo htmlSpecialChars($_control->link("Articles:default")) ?>
">Zpět</a></div>
    
<div id="<?php echo $_control->getSnippetId('flash') ?>"><?php call_user_func(reset($_l->blocks['_flash']), $_l, $template->getParameters()) ?>
</div><?php
}}

//
// block _flash
//
if (!function_exists($_l->blocks['_flash'][] = '_lb385b0ab9aa__flash')) { function _lb385b0ab9aa__flash($_l, $_args) { extract($_args); $_control->validateControl('flash')
;$iterations = 0; foreach ($flashes as $flash): ?>        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
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