<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.02698800 1361636960";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"/Users/janikm/dev/webroot/testPages/app/components/MenuArticles/MenuArticles.latte";i:2;i:1361636955;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/components/MenuArticles/MenuArticles.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '00gs9i8qb4')
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

<ul id="menu-clanky">
    <li><a href="<?php echo htmlSpecialChars($_presenter->link("Components:zdomova")) ?>
"<?php try { $_presenter->link("Components:zdomova"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif ?>>Z domova</a></li>
    <li><a href="<?php echo htmlSpecialChars($_presenter->link("Components:zesveta")) ?>
"<?php try { $_presenter->link("Components:zesveta"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")): ?>
 class="active"<?php endif ?>>Ze světa</a></li>
</ul>
<div class="cb"></div>