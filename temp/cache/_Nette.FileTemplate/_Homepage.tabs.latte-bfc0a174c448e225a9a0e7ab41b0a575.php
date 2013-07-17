<?php //netteCache[01]000391a:2:{s:4:"time";s:21:"0.16822900 1370593878";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"/Users/janikm/dev/webroot/testPages/app/templates/Homepage/tabs.latte";i:2;i:1367570744;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/templates/Homepage/tabs.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ee0la19gar')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbf37799e309_content')) { function _lbf37799e309_content($_l, $_args) { extract($_args)
?><h1>Taby</h1>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#tabs" ).tabs();
    $( "#tabs" ).tabs({ active: 2 });
  });
</script>

<div id="tabs">
    <ul>
        <li><a href="#tabs-1">prvni</a></li>
        <li><a href="#tabs-2">druhy</a></li>
        <li><a href="#tabs-3">treti</a></li>
    </ul>
    <div class="cb"></div>
    <div id="tabs-1" class="tab-cont">
        <p>prvni</p>
    </div>
    <div id="tabs-2"  class="tab-cont">
        <p>druhy</p>
    </div>
    <div id="tabs-3"  class="tab-cont">    
        <p>treti</p>
    </div>
</div>
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