<?php //netteCache[01]000391a:2:{s:4:"time";s:21:"0.46526500 1367574151";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"/users/janikm/dev/webroot/testPages/app/templates/Homepage/mapa.latte";i:2;i:1367574148;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /users/janikm/dev/webroot/testPages/app/templates/Homepage/mapa.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '0dcgcc314u')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb359377deaa_content')) { function _lb359377deaa_content($_l, $_args) { extract($_args)
?><style type="text/css">
    #czechMap{
        position: relative;
        width: 500px;
        height: 293px;
        background-image: url('../images/mapa/mapa_cr.png');
    }

    #czechMap-overlap{
        position: relative;
        top: 0px;
        left: 0px;
        border: none;
    }
</style>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/czechmap.js"></script>
<h1>Mapa</h1>

<div id="czechMap">
    <map name="czMap">
        <area class="czechMap-area" href="#" alt="Plzeňský kraj" title="Plzeňský kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/plzen.png" shape="poly" coords="106,239,104,242,97,237,96,230,89,222,80,216,66,197,52,195,52,195,41,174,34,163,34,157,26,149,30,145,37,132,65,131,76,121,87,124,93,111,100,114,102,122,117,125,130,134,128,152,120,155,119,166,125,167,125,178,125,196,117,212,119,217,110,223,106,239" />
        <area class="czechMap-area" href="#" alt="Karlovarský kraj" title="Karlovarský kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/kv.png" shape="poly" coords="37,132,65,131,76,121,87,124,93,111, 88,85,59,72 36,78,26,88,23,106,19,100,19,96,13,86,7,86,7,92,15,100,12,107,24,117,34,123,33,128" />
        <area class="czechMap-area" href="#" alt="Ústecký kraj" title="Ústecký kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/usti.png" shape="poly" coords="100,114, 88,85,70,77, 75,67,86,66,90,58,100,53,105,56,111,50,111,44,119,42,134,42,137,36,142,33,147,34,172,20,163,13,164,8,168,7,171,8,182,11,187,16,186,21,190,21 ,188,29,183,36,177,34,175,42,169,50,177,66, 177,74,171,79,170,84,160,88,144,86,133,97,108,104,105,111" />
        <area class="czechMap-area" href="#" alt="Liberecký kraj" title="Liberecký kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/liberec.png" shape="poly" coords="188,29,183,36,177,34,175,42,169,50,177,66, 184,68,185,72,193,71,211,57,223,67, 231,69,234,66,244,71,249,63,254,68,261,66,257,55,255,38,246,34,242,37,241,31,236,26,233,14,216,11,215,27,203,28,201,33,195,32" />
        <area class="czechMap-area" href="#" alt="Královehradecký kraj" title="Královehradecký kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/kh.png" shape="poly" coords="223,67,231,69,234,66,244,71,249,63,254,68,261,66,257,55,255,38,272,40,277,49,284,47,286,51,287,56,295,50,300,52,304,49,310,49,316,57,313,65,301,74,311,82,326,98, 326,106,312,113,310,118,302,119,288,111,287,108,281,105,276,110,273,109,271,105,260,111,255,109,248,114,246,110,241,106,241,92,231,93,227,87,223,86,223,81,225,77" />
        <area class="czechMap-area" href="#" alt="Pardubický kraj" title="Pardubický kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/pardubice.png" shape="poly" coords="326,106,312,113,310,118,302,119,288,111,287,108,281,105,276,110,273,109,271,105,260,111,255,109,248,114, 242,121,253,128,251,140,257,146,265,146,276,154,277,158,284,159,286,155,316,170,326,169,327,165,344,167,347,162,349,153,341,141,342,136,340,124,346,118,349,101,346,118,349,101,346,102,336,111" />
        <area class="czechMap-area" href="#" alt="Olomoucký kraj" title="Olomoucký kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/olomouc.png" shape="poly" coords="344,167,347,162,349,153,341,141,342,136,340,124,346,118,349,101,346,118,349,101,352,97,359,97,358,88,354,86,349,76,352,73,371,80,382,86,383,91,387,90,389,94,388,97,377,105,376,115,372,119,372,124,374,127,372,136,386,143,392,147,410,150,425,171,414,184,409,182,407,187,398,189,395,193,388,192,382,200,372,203,353,179,351,192,345,188,346,175,342,174,343,167" />
        <area class="czechMap-area" href="#" alt="Moravskoslezský kraj" title="Moravskoslezský kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/ms.png" shape="poly" coords="389,94,388,97,377,105,376,115,372,119,372,124,374,127,372,136,386,143,392,147,410,150,425,171,433,174,443,174,453,176,462,187,466,185,473,174,487,174,493,168,489,153,477,149,471,130,457,126,452,127,450,123,444,120,437,119,434,114,434,119,429,119,421,123,409,110,401,103,413,96,410,86,403,91,392,92" />
        <area class="czechMap-area" href="#" alt="Zlínský kraj" title="Zlínský kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/zlin.png" shape="poly" coords="425,171,414,184,409,182,407,187,398,189,395,193,388,192,382,200,372,203,433,174,443,174,453,176,462,187,453,196,446,199,441,223,437,228,429,229,426,239,420,239,413,247,408,247,401,238,392,238,376,225,370,225,370,219,375,215,372,214,370,207,344,167" />
        <area class="czechMap-area" href="#" alt="Jihomoravský kraj" title="Jihomoravský kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/jm.png" shape="poly" coords="408,247,401,238,392,238,376,225,370,225,370,219,375,215,372,214,370,207,353,179,351,192,345,188,346,175,342,174,343,167,327,165,326,169,316,170, 314,196,307,200,305,222,300,228,283,230,267,240,258,241,254,246,269,252,277,249,295,263,318,265,323,258,338,259,338,263,346,266,356,267,357,274,360,274,377,247,389,253,396,251,402,253" />
        <area class="czechMap-area" href="#" alt="Vysočina" title="Vysočina" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/vysocina.png" shape="poly" coords="251,140,257,146,265,146,276,154,277,158,284,159,286,155,316,170,314,196,307,200,305,222,300,228,283,230,267,240,258,241,251,236,256,223,246,223,240,219,239,212,234,213,226,212,218,204,213,205,208,196,209,175,214,168,231,166,231,163,226,159,232,151,245,146,245,142" />
        <area class="czechMap-area" href="#" alt="Jihočeský kraj" title="Jihočeský kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/jc.png" shape="poly" coords="258,241,254,246,251,236,256,223,246,223,240,219,239,212,234,213,226,212,218,204,213,205,208,196,209,175,198,169,189,179,160,174,157,176,144,175,139,179,126,177,125,178,125,196,117,212,119,217,110,223,106,239,128,260,145,272,144,281,164,286,173,280,174,276,180,280,186,278,192,283,194,271,198,267,200,261,210,262,214,245,215,234,228,242,234,240,235,237" />
        <area class="czechMap-area" href="#" alt="Praha" title="Praha" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/praha.png" shape="poly" coords="168,129,181,123,189,123,189,117,192,113,180,105,170,108,169,111,162,111,162,118,167,126" />
        <area class="czechMap-area" href="#" alt="Středočeský kraj" title="Středočeský kraj" data-img="<?php echo htmlSpecialChars($basePath) ?>/images/mapa/sc.png" shape="poly" coords="126,177,139,179,144,175,157,176,160,174,189,179,198,169,209,175,214,168,231,166,231,163,226,159,232,151,245,146,245,142,251,140,253,128,242,121,248,114,246,110,241,106,241,92,231,93,227,87,223,86,223,81,225,77,223,67,211,57,193,71,185,72,184,68,177,74,171,79,170,84,160,88,144,86,133,97,108,104,105,111,100,114,102,122,117,125,130,134,128,152,120,155,119,166,125,167,125,178" />                
    </map> 

    <img id="czechMap-overlap" src="../images/mapa/none.png" usemap="#czMap" />
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