<?php //netteCache[01]000396a:2:{s:4:"time";s:21:"0.07896000 1361484917";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:74:"/Users/janikm/dev/webroot/testPages/app/templates/Components/clanek2.latte";i:2;i:1361484904;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/templates/Components/clanek2.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'hbd9is5xgu')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb16ea2757ba_content')) { function _lb16ea2757ba_content($_l, $_args) { extract($_args)
;$_ctrl = $_control->getComponent("menuArticles"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
<div class="cb"></div>
<div class="content">
<p>    
Mauris metus. Integer rutrum, orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Sed convallis magna eu sem. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Donec quis nibh at felis congue commodo. Quisque porta. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Nullam faucibus mi quis velit. Donec quis nibh at felis congue commodo. Integer tempor.
</p>
<p>
Morbi leo mi, nonummy eget tristique non, rhoncus non leo. Vivamus porttitor turpis ac leo. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Etiam dictum tincidunt diam. Nunc dapibus tortor vel mi dapibus sollicitudin. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Fusce consectetuer risus a nunc. Fusce wisi. Nullam faucibus mi quis velit. Maecenas aliquet accumsan leo. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est. Fusce consectetuer risus a nunc. Maecenas sollicitudin.
</p>
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
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 