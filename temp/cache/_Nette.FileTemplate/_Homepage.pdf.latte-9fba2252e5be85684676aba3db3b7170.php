<?php //netteCache[01]000390a:2:{s:4:"time";s:21:"0.76254800 1368188787";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:68:"/users/janikm/dev/webroot/testPages/app/templates/Homepage/pdf.latte";i:2;i:1368188784;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /users/janikm/dev/webroot/testPages/app/templates/Homepage/pdf.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'edzwd1aco9')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb646fbdd7f8_content')) { function _lb646fbdd7f8_content($_l, $_args) { extract($_args)
?><style>
    .left {
        float:left;
        width:400px;
    } 
    .right {
        padding-left: 40px;
        float: left;
    }
    .certifikat-nahled {
        height: 450px;
        width:750px;
        background-color: #e9e9e9;

    }
    .typ {
        font-size: 36px;
        margin-left: 30px;
        color: black;
    }
    .titul {
        font-size: 25px;
        margin-left: 30px;
        color: black;
    }
    .pro {
        font-size: 25px;
        margin-left:30px;
        color: black;
    }
    .adresa {
 
        margin-left: 30px;
    }
    .delka {
        margin-left: 30px;
        font-size: 25px;
    }
</style>

 <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/dd.css" />
 <script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.dd.js"></script>
<!-- </msdropdown> -->

<h1>Generování pdf</h1>


<div class="left">

<?php $_ctrl = $_control->getComponent("certifikaty"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>

</div>

<div class="right">
    <div class="certifikat-nahled">
        <div class="typ"></div>
        <div class="titul"></div>
        <div class="delka"></div>
        <div class="pro"></div>
        <div class="adresa"></div>
    </div>
    
</div>
<div class="cb"></div>
<script>

$(document).ready(function() {
  $("#payments").change(function () {
       var imageName = $("#payments").val();
       $(".certifikat-nahled").css('background','url(../images/'+imageName+'.jpg)');;
   })
   $("#frmform-typ").change(function () {
       var typ = $("#frmform-typ").val();
       $('div.typ').text(typ);
   })
   $("#frmform-titul").change(function () {
       var titul = $("#frmform-titul").val();
       $('div.titul').text(titul);
   })
   $("#frmform-length").change(function () {
       var titul = $("#frmform-length").val();
       $('div.delka').text(titul);
   })
   $("#frmform-from").keyup(function () {
       var od = $("#frmform-from").val();
       $('div.od').text(od);
   })
   $("#frmform-to").keyup(function () {
       var to = $("#frmform-to").val();
       $('div.pro').text(to);
   })
   $("#frmform-adress").keyup(function () {
       var adresa = $("#frmform-adress").val();
       adresa = adresa.replace(/\n/g,'<br>')
       console.log(adresa);
       $('div.adresa').html(adresa);
   })
});

</script>

<script>

$(document).ready(function(e) {
    $("#payments").msDropdown();
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

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 