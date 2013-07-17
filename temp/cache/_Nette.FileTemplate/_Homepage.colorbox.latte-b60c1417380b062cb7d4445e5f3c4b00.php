<?php //netteCache[01]000395a:2:{s:4:"time";s:21:"0.39017200 1370527681";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:73:"/Users/janikm/dev/webroot/testPages/app/templates/Homepage/colorbox.latte";i:2;i:1367574686;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/templates/Homepage/colorbox.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'yywswfh2p6')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb904d6ef775_content')) { function _lb904d6ef775_content($_l, $_args) { extract($_args)
?><link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/colorbox.css" />
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.colorbox.js"></script>
<h1>Colorbox</h1>

<p><a class='inline' " href="<?php echo htmlSpecialChars($_control->link("Articles:default")) ?>
">Inline HTML</a></p>
<p><a class='iframe' href="<?php echo htmlSpecialChars($_control->link("Articles:default")) ?>">Outside Webpage (Iframe)</a></p>


<script>
$(document).ready(function(){
                            
    $(".ajax").colorbox();
    $(".inline").colorbox({ inline:true, width:"50%"});
    $(".iframe").colorbox({ iframe:true, width:"80%", height:"80%"});

});                       
</script><?php
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