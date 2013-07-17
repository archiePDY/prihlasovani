<?php //netteCache[01]000393a:2:{s:4:"time";s:21:"0.61516600 1370593897";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:71:"/Users/janikm/dev/webroot/testPages/app/templates/Homepage/jqplot.latte";i:2;i:1367574233;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Users/janikm/dev/webroot/testPages/app/templates/Homepage/jqplot.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '409v4og79t')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe14695134e_content')) { function _lbe14695134e_content($_l, $_args) { extract($_args)
?><h1>Jqplot</h1>
<div id="chartdiv2" style="height:300px;width:330px;margin-left:10px "></div>
<div id="chart1" style="height:400px;width:400px"></div>
<div id="chart2" style="height:400px;width:400px"></div>
<div id="chartdiv" style="height:400px;width:300px;float:left;margin-left:10px"></div>

<div id="chartdiv3" style="height:300px;width:330px;float:left;margin-left:10px "></div>
<div class="cb"></div>
<?php $array = array( 
array("1-2-2013", 18.4),
array("2-2-2013", 19),
array("3-2-2013", 20.2),
array("4-2-2013", 19.8),
array("5-2-2013", 18.9),
array("6-2-2013", 19.1),
array("7-2-2013", 18.8),
array("8-2-2013", 19.8)
) ?>

<script>
$.jqplot('chartdiv',  [[[1, 2],[3,5.12],[5,13.1],[7,33.6],[9,85.9],[11,219.9]]],
{ title:'Kurz $',
  axes:{ yaxis:{ min:0, max:240}},
  series:[{ color:'#5FAB78'}]
});
  var line1=[["1-2-2013",18.4],["2-2-2013",19],["3-2-2013",20.2],["4-2-2013",19.8],["5-2-2013",19.9],["6-2-2013",19.1],["7-2-2013",19.9],["8-2-2013",19.8]];
  var line2 = <?php echo Nette\Templating\Helpers::escapeJs($array) ?>;

  var plot1 = $.jqplot('chartdiv2', [line2], {
    title:'vývoj kurzu',
    axes:{ xaxis:{
            
            renderer:$.jqplot.DateAxisRenderer,
            numberTicks:5,
            tickOptions:{ formatString:'%d/%m/%y'},
        
          }},
      
    series:[
        { lineWidth:2, markerOptions:{ style:'filledCircle'}, showMarker:false, color:'#1088c5'}
    ],

    grid: {
        drawGridLines: true,
        gridLineColor: '#e0e0e0', 
        background: '#ebebeb',
        borderColor: '#1088c5',
        shadow: true,        
        shadowAlpha: 0.07      
    }

  });
</script>

<script>
      var data = [["1-2-2013",18.4],["2-2-2013",19],["3-2-2013",20.2],["4-2-2013",19.8],["5-2-2013",19.9],["6-2-2013",19.1],["7-2-2013",19.9],["8-2-2013",19.8]];
      //var url ="http://localhost/exodus2/www/front/www.denik.cz/kurzy/data-kurz-cnb/?mena="+mena;
      //var url ="http:/www.denik.cz/kurzy/data-kurz-cnb/?mena="+mena;
  
            var plot1 = $.jqplot('chartdiv3', [data], {
        title: {
            //text: mena,   // title for the plot,
            show: true,
            textColor:'#1088c5',
            fontSize:'14px'
        },
        axes:{ xaxis:{
                renderer:$.jqplot.DateAxisRenderer,
                numberTicks:5,
     
                tickOptions:{ formatString:'%#d.%#m.%y',textColor:'black'},
        
              },
         yaxis:{
                tickOptions:{ textColor:'black'},
        
              } 
  
         },
      
        series:[
            { lineWidth:2, markerOptions:{ style:'filledCircle'}, showMarker:false, color:'#1088c5'}
        ],

        grid: {
            drawGridLines: true,
            gridLineColor: '#e0e0e0', 
            background: 'white',
            borderColor: '#1088c5',
            shadow: true,        
            shadowAlpha: 0.07      
           },

        });
       
   
          
      


    
</script>

<script>
    $(document).ready(function(){
  var plot2 = $.jqplot ('chart2', [[3,7,9,1,4,6,8,2,5]], {
      // Give the plot a title.
      title: 'Plot With Options',
      // You can specify options for all axes on the plot at once with
      // the axesDefaults object.  Here, we're using a canvas renderer
      // to draw the axis label which allows rotated text.
      axesDefaults: {
        labelRenderer: $.jqplot.CanvasAxisLabelRenderer
      },
      // An axes object holds options for all axes.
      // Allowable axes are xaxis, x2axis, yaxis, y2axis, y3axis, ...
      // Up to 9 y axes are supported.
      axes: {
        // options for each axis are specified in seperate option objects.
        xaxis: {
          label: "X Axis",
          // Turn off "padding".  This will allow data point to lie on the
          // edges of the grid.  Default padding is 1.2 and will keep all
          // points inside the bounds of the grid.
          pad: 0
        },
        yaxis: {
          label: "Y Axis"
        }
      }
    });
});
</script>
<script>
    $(document).ready(function(){
  var data = [["1-2-2013",18.4],["2-2-2013",19],["3-2-2013",20.2],["4-2-2013",19.8],["5-2-2013",19.9],["6-2-2013",19.1],["7-2-2013",19.9],["8-2-2013",19.8]];
  var plot1 = $.jqplot('chart1', [line1], {
      title:'Data Point Highlighting',
      axes:{
        xaxis:{
          pad:0,
          renderer:$.jqplot.DateAxisRenderer,
          tickOptions:{
            pad:0,
            formatString:'%b&nbsp;%#d'
          } 
        },
        yaxis:{
          tickOptions:{
              pad:0,
            formatString:'$%.2f'
            }
        }
      },
      highlighter: {
        show: true,
        sizeAdjust: 7.5
      },
      cursor: {
        show: false
      }
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