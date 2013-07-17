<?php //netteCache[01]000398a:2:{s:4:"time";s:21:"0.98414700 1365091161";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:76:"/Users/janikm/dev/webroot/testPages/app/components/Certifikaty/sablona.latte";i:2;i:1365090915;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/components/Certifikaty/sablona.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'uhe0eco2im')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>

        <style>
            body {
                background-image: url('images/jaro.jpg') no-repeat;
            }
            .content {
                text-align:center;
                margin-top:0px;
                font-size:32px;
                text-align:left;
            }

        </style>
    </head>
    <body>
        <div class="content"> 
       
            <div><?php echo Nette\Templating\Helpers::escapeHtml($data['typ'], ENT_NOQUOTES) ?></div>
            <div><?php echo Nette\Templating\Helpers::escapeHtml($data['titul'], ENT_NOQUOTES) ?></div>
            <div><?php echo Nette\Templating\Helpers::escapeHtml($data['from'], ENT_NOQUOTES) ?></div>
            <div><?php echo Nette\Templating\Helpers::escapeHtml($data['to'], ENT_NOQUOTES) ?></div>

        </div>
    </body>
</html>

