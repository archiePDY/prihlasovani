<?php //netteCache[01]000385a:2:{s:4:"time";s:21:"0.72430700 1367569437";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:63:"/users/janikm/dev/webroot/testPages/app/templates/@layout.latte";i:2;i:1367569435;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /users/janikm/dev/webroot/testPages/app/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'sun0az02v5')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb0c8a4cf76f_title')) { function _lb0c8a4cf76f_title($_l, $_args) { extract($_args)
?>Nette Application Skeleton<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbd171e2ab96_head')) { function _lbd171e2ab96_head($_l, $_args) { extract($_args)
;
}}

//
// block scripts
//
if (!function_exists($_l->blocks['scripts'][] = '_lbc7a69f6f6b_scripts')) { function _lbc7a69f6f6b_scripts($_l, $_args) { extract($_args)
?>        <script>
        jQuery.ajaxSetup({
                cache: false,
                dataType: 'json',
                success: function (payload) {
                    if (payload.snippets) {
                        for (var i in payload.snippets) {
                            $('#' + i).html(payload.snippets[i]);
                        }
                    }
                }
            });

            $('a.ajax').live('click', function (event) {
                event.preventDefault();
                $.get(this.href);
            });

            $('form.ajax').live('submit', function (event) {
                event.preventDefault();
                $.post(this.action, $(this).serialize());
            });
         </script>
         
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
<?php if (isset($robots)): ?>        <meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>

        <title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->upper($template->striptags(ob_get_clean()))  ?></title>

        <link rel="stylesheet" media="screen,projection,tv" href="<?php echo htmlSpecialChars($basePath) ?>/css/screen.css" />
        <link rel="stylesheet" media="print" href="<?php echo htmlSpecialChars($basePath) ?>/css/print.css" />
        <link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />
        <script language="javascript" type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.nette.js"></script>


        <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="excanvas.js"></script><![endif]-->

        <script language="javascript" type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.jqplot.min.js"></script>
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/plugins/jqplot.dateAxisRenderer.min.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/main.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery-ui-1.8.10.custom.min"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.jqplot.css" />
        
        
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

    </head>

    <body>
        <script> document.body.className+=' js' </script>
      
        
        <ul id="menu">
            <li><a<?php try { $_presenter->link("Homepage:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Homepage:")) ?>
">Homepage</a></li>
            <li><a <?php try { $_presenter->link("Articles:*"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Articles:default")) ?>
">Blog</a></li>
            <li><a <?php try { $_presenter->link("Homepage:jqplot"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Homepage:jqplot")) ?>
">Jqplot</a></li>
            <li><a <?php try { $_presenter->link("Homepage:ajax"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Homepage:ajax")) ?>
">Ajax</a></li>
            <li><a <?php try { $_presenter->link("Homepage:tabs"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Homepage:tabs")) ?>
">Taby</a></li>
            <li><a <?php try { $_presenter->link("Homepage:pdf"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Homepage:pdf")) ?>
">Pdf</a></li>
            <li><a <?php try { $_presenter->link("Homepage:password"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Homepage:password")) ?>
">Síla hesla</a></li>
            <li><a <?php try { $_presenter->link("Homepage:colorbox"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Homepage:colorbox")) ?>
">Colorbox</a></li>
            <li><a <?php try { $_presenter->link("Homepage:mapa"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif  ?> href="<?php echo htmlSpecialChars($_control->link("Homepage:mapa")) ?>
">Mapa</a></li>
        </ul>
        <div class="cb"></div>
        <div id="content">
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
        </div>    

<?php call_user_func(reset($_l->blocks['scripts']), $_l, get_defined_vars())  ?>
    </body>
</html>
