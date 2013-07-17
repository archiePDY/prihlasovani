<?php //netteCache[01]000402a:2:{s:4:"time";s:21:"0.27766800 1366016967";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:80:"/users/janikm/dev/webroot/testPages/app/components/Certifikaty/certifikaty.latte";i:2;i:1365538251;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /users/janikm/dev/webroot/testPages/app/components/Certifikaty/certifikaty.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'f1s4o0ffca')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc2e9ef0e9a_content')) { function _lbc2e9ef0e9a_content($_l, $_args) { extract($_args)
?><style>
    table.form {

    }
    .pozadi img {
        margin-right:10px;
        margin-top: 10px;
        float: left;
    }
    .pozadi {
        display:block;
        min-height:120px;
    }
    .flash {
        position: relative;
        padding: 10px 20px 10px 12px;
        color: #333;
        font-weight: bold;
        margin: 10px 0px;

        border-left: 8px solid #941a1a;
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
    }
    .flash {
        background: #ecfaf0;
        border-color: #44e81e;
    }
    .flash.error {
        background: #f1e5e5;
        border-color: #e81e1e;
    }
</style>


<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("form") ? "form" : $_control["form"]), array()) ;$iterations = 0; foreach ($flashes as $flash): ?>
<div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ;$iterations = 0; foreach ($form->errors as $error): ?>
<div class="flash error"><?php echo Nette\Templating\Helpers::escapeHtml($error, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
<p>Vytvořte si dárkový poukaz pro své blízké</p>
<select id="payments" name="payments" style="width:250px;">
        <option value="" data-description="Zvolte pozadí certifikátu"></option>
        <option value="jaro" data-image="../images/jaro_small.jpg" data-description="">Jarní certifikát</option>
        <option value="slunecnice" data-image="../images/slunecnice_small.jpg" data-description="">Slunečnice</option>
        <option value="jaro" data-image="../images/jaro_small.jpg" data-description="">Jarní certifikát</option>
        <option value="slunecnice" data-image="../images/slunecnice_small.jpg" data-description="">Slunečnice</option>
</select>
<table class="form">
    <!--
    <tr>
        <th><?php $_input = is_object("method") ? "method" : $_form["method"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("method") ? "method" : $_form["method"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
    -->
    <tr>
        <th><?php $_input = is_object("typ") ? "typ" : $_form["typ"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("typ") ? "typ" : $_form["typ"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
    <tr>
        <th><?php $_input = is_object("titul") ? "titul" : $_form["titul"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("titul") ? "titul" : $_form["titul"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
    <!--
    <tr>
        <th><?php $_input = is_object("from") ? "from" : $_form["from"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("from") ? "from" : $_form["from"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
    -->
    <tr>
        <th><?php $_input = is_object("to") ? "to" : $_form["to"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("to") ? "to" : $_form["to"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
    <tr>
        <th><?php $_input = is_object("length") ? "length" : $_form["length"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("length") ? "length" : $_form["length"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
    <tr>
        <th><?php $_input = is_object("adress") ? "adress" : $_form["adress"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("adress") ? "adress" : $_form["adress"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
    <tr>
        <th><?php $_input = is_object("email") ? "email" : $_form["email"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("email") ? "email" : $_form["email"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
    <tr>
        <th><?php $_input = is_object("send_to") ? "send_to" : $_form["send_to"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?></th>
        <td><?php $_input = (is_object("send_to") ? "send_to" : $_form["send_to"]); echo $_input->getControl()->addAttributes(array()) ?></td>
    </tr>
</table>




<?php $_input = (is_object("send") ? "send" : $_form["send"]); echo $_input->getControl()->addAttributes(array()) ;Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>







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