<?php //netteCache[01]000395a:2:{s:4:"time";s:21:"0.59456000 1367574410";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:73:"/users/janikm/dev/webroot/testPages/app/templates/Homepage/password.latte";i:2;i:1367573749;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /users/janikm/dev/webroot/testPages/app/templates/Homepage/password.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'zr9f7hmhsr')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2486fcd1b6_content')) { function _lb2486fcd1b6_content($_l, $_args) { extract($_args)
?><script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.pwdMeter.js"></script>

<h1>Síla hesla</h1>
<table width="300" border="0" cellspacing="0" cellpadding="2">
    <tbody>
        <tr>
            <td class="short"><input type="password" id="password" /><span></span><div id="pwdMeter" class="neutral"></div></td>
        </tr>
    </tbody>
</table>

<script language="javascript">
    $(document).ready(function(){
        $('#password').pwdMeter({
            minLength: 6,
            displayGeneratePassword: false,
            generatePassText: 'Password Generator',
            generatePassClass: 'GeneratePasswordLink',
            randomPassLength: 13
        });
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