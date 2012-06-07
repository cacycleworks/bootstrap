<!DOCTYPE html>
<? include("csscolor.php");
$filename="tweaker.less";
// variables ------------------------------------------
$accent_colors  = Array("@blue","@green","@red","@yellow","@orange","@pink","@purple");
$grayscale_colors=Array("@black","@grayDarker","@grayDark","@gray","@grayLight","@grayLighter","@white");
$scaffolding=Array("@bodyBackground","@textColor", "@linkColor", "@linkColorHover" );
$grid=Array("@gridColumns","@gridColumnWidth","@gridGutterWidth","@fluidGridColumnWidth","@fluidGridGutterWidth");
$typography=Array("@sansFontFamily","@serifFontFamily","@monoFontFamily","@baseFontSize","@baseFontFamily","@baseLineHeight","@altFontFamily","@headingsFontFamily","@headingsFontWeight","@headingsColor");
$tables		=Array("@tableBackground","@tableBackgroundAccent","@tableBackgroundHover","@tableBorder");
$buttons	=Array("@btnBackground","@btnBackgroundHighlight","@btnBorder","@btnPrimaryBackground","@btnPrimaryBackgroundHighlight","@btnInfoBackground","@btnInfoBackgroundHighlight","@btnSuccessBackground","@btnSuccessBackgroundHighlight","@btnWarningBackground","@btnWarningBackgroundHighlight","@btnDangerBackground","@btnDangerBackgroundHighlight","@btnInverseBackground","@btnInverseBackgroundHighlight");
$forms		=Array("@placeholderText","@inputBackground","@inputBorder","@inputBorderRadius","@inputBorderRadius","@inputDisabledBackground","@formActionsBackground");
$formStates	=Array("@warningText","@warningBackground","@errorText","@errorBackground","@successText","@successBackground","@infoText","@infoBackground");
$navbar		=Array("@navbarHeight","@navbarBackground","@navbarBackgroundHighlight","@navbarText","@navbarLinkColor","@navbarLinkColorHover","@navbarLinkColorActive","@navbarLinkBackgroundHover","@navbarLinkBackgroundActive","@navbarSearchBackground","@navbarSearchBackgroundFocus","@navbarSearchBorder","@navbarSearchPlaceholderColor","@navbarBrandColor");
$dropdowns	=Array("@dropdownBackground","@dropdownBorder","@dropdownLinkColor","@dropdownLinkColorHover","@dropdownLinkBackgroundHover");
$hero_unit	=Array("@heroUnitBackground","@heroUnitHeadingColor","@heroUnitLeadColor");
// defaults for above variables
$default_colors = Array(
	 "@black"=>"#000","@grayDarker"=>"#222","@grayDark"=>"#333","@gray"=>"#555","@grayLight"=>"#999","@grayLighter"=>"#eee","@white"=>"#fff"
	,"@blue"=>"#049cdb","@green"=>"#46a546","@red"=>"#9d261d","@yellow"=>"#ffc40d","@orange"=>"#f89406","@pink"=>"#c3325f","@purple"=>"#7a43b6"
	,"@bodyBackground"=>"@white","@textColor"=>"@grayDark", "@linkColor" =>"#08c", "@linkColorHover"=>"darken(@linkColor, 15%)"
	,"@tableBackgroundAccent" => "#f9f9f9","@tableBackgroundHover" => "#f5f5f5","@tableBorder" => "#ddd"
	,"@btnBackground" => "@white","@btnBackgroundHighlight" => "darken(@white, 10%)","@btnBorder" => "darken(@white, 20%)","@btnPrimaryBackground" => "@linkColor","@btnInfoBackground" => "#5bc0de","@btnInfoBackgroundHighlight" => "#2f96b4","@btnSuccessBackground" => "#62c462","@btnSuccessBackgroundHighlight" => "#51a351","@btnWarningBackground" => "lighten(@orange, 15%)","@btnWarningBackgroundHighlight" => "@orange","@btnDangerBackground" => "#ee5f5b","@btnDangerBackgroundHighlight" => "#bd362f","@btnInverseBackground" => "@gray","@btnInverseBackgroundHighlight" => "@grayDarker"
	,"@placeholderText" => "@grayLight","@inputBackground" => "@white","@inputBorder" => "#ccc","@inputBorderRadius" => "3px","@inputDisabledBackground" => "@grayLighter","@formActionsBackground" => "#f5f5f5"
	,"@warningText" => "#c09853","@warningBackground" => "#f3edd2","@errorText" => "#b94a48","@errorBackground" => "#f2dede","@successText" => "#468847","@successBackground" => "#dff0d8","@infoText" => "#3a87ad","@infoBackground" => "#d9edf7"
	,"@navbarBackground" => "@grayDarker","@navbarBackgroundHighlight" => "@grayDark","@navbarText" => "@grayLight","@navbarLinkColor" => "@grayLight","@navbarLinkColorHover" => "@white","@navbarLinkColorActive" => "@navbarLinkColorHover","@navbarLinkBackgroundActive" => "@navbarBackground","@navbarSearchBackground" => "lighten(@navbarBackground, 25%)","@navbarSearchBackgroundFocus" => "@white","@navbarSearchBorder" => "darken(@navbarSearchBackground, 30%)","@navbarSearchPlaceholderColor" => "#ccc","@navbarBrandColor" => "@navbarLinkColor"
	,"@dropdownBackground" => "@white","@dropdownLinkColor" => "@grayDark","@dropdownLinkColorHover" => "@white","@dropdownLinkBackgroundHover" => "@linkColor"
	,"@heroUnitBackground" => "@grayLighter"
);
// the default values for exceptions are not readily displayed (like colors), so are handled differently
$exceptions=Array(
	"@tableBackground",	"@btnPrimaryBackgroundHighlight",
	"@inputBorderRadius",
	"@navbarHeight", "@navbarLinkBackgroundHover",
	"@dropdownBorder",
	"@heroUnitHeadingColor", "@heroUnitLeadColor"
 );
$exception_defaults=Array(
	 "@tableBackground" => "transparent"
	,"@inputBorderRadius" => "3px"
	,"@btnPrimaryBackgroundHighlight" => "spin(@btnPrimaryBackground, 15%)"
	,"@dropdownBorder" => "rgba(0,0,0,.2)"
	,"@navbarLinkBackgroundHover" => "transparent"	,"@navbarHeight" => "40px"
	,"@heroUnitHeadingColor" => "inherit"	,"@heroUnitLeadColor" => "inhereit"
	,"@gridColumns"=>"12", "@gridColumnWidth"=>"60px", "@gridGutterWidth"=>"20px", "@fluidGridColumnWidth"=>"6.382978723%", "@fluidGridGutterWidth"=>"2.127659574%"
	,"@sansFontFamily"=>'"HelveticaNeue",Helvetica,Arial,sans-serif' ,"@serifFontFamily"=>'Georgia,"TimesNewRoman",Times,serif' ,"@monoFontFamily"=>'Menlo,Monaco,"CourierNew",monospace' ,"@baseFontSize"=>'13px' ,"@baseFontFamily"=>'@sansFontFamily' ,"@baseLineHeight"=>'18px' ,"@altFontFamily"=>'@serifFontFamily' ,"@headingsFontFamily"=>'inherit' ,"@headingsFontWeight"=>'bold' ,"@headingsColor"=>'inherit'
);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>A &lt;?php Bootstrap Tweaker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap.css?<?php echo time();?>" rel="stylesheet">
    <link href="docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="docs/assets/css/docs.css" rel="stylesheet">
    <link href="docs/assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="docs/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="docs/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="docs/assets/ico/apple-touch-icon-57-precomposed.png">

<style>
body {
	background-image:none;
<?  if(isset($_POST['@bodyBackground'])) { ?>	background-color:<? echo myColor($_POST['@bodyBackground']) ?>; <? } ?>

}
</style>
  </head>
  <body data-spy="scroll" data-target=".subnav" data-offset="50">

    <div class="container">
<!-- INFO BOX AT TOP ================================================== -->
<?
$output="";
$variables=Array();
if(isset($_POST) && count($_POST) > 0) {
	foreach($_POST as $key=>$value){ 		// handle POST ------------------------------------------
		if(		( array_key_exists($key,$default_colors) && $value != $default_colors[$key] )
			|| 	( array_key_exists($key,$exception_defaults) && $value != $exception_defaults[$key]  )
			){
			$$key=$value;	// make global variables for the "css variable"
			$output.="$key:\t$value;\n";
		}
	}
}
?><pre class="pre-scrollable"><?	// GET and POST processing in here
if(isset($_GET)) {
	if( array_key_exists("build", $_GET) ) {
		echo "<h4>Build it!</h4>";
		doLess($filename);
	} elseif( array_key_exists("save", $_GET) ) {
		echo "<h4>Safe!!!</h4>";
		doSave($filename);
	} elseif( array_key_exists("reset", $_GET) ) {
		echo "<h4>Resetting to default values...</h4>";
		doReset($filename);
		foreach($default_colors as $key=>$value)
			$output.="$key:\t$value;\n";
		foreach($exception_defaults as $key=>$value)
			$output.="$key:\t$value;\n";
	}
}
if(strlen($output)) {
	echo "<h5>Variables:</h5>";
	$bytes=file_put_contents($filename, $output );
	echo "<span class=\"help-inline\">$bytes bytes written to $filename</span>\n";
} else {
	$reddit=file_get_contents($filename);
	if(strlen($reddit)>0){
		$lines=explode(";\n",$reddit);
		foreach($lines as $line){
			if(stripos($line,":\t")>0){
				list($variable,$value)=explode(":\t",$line);
				$variables[$variable]=$value;
			}
		}
		echo "<em>$filename</em> found and values reflected below.\n";
	} else {
		echo "<em>$filename</em> not found and no input, values reflected below are defaults.\n";
	}
}
if(count($variables)>0)
	foreach( $variables as $variable=>$color)
		$$variable=$color;
?></pre>
<!-- CONTROL BUTTONS ================================================== -->
<form action="index.php" method="post">
<div class="row">
	<div class="span1"><input type="submit" class="btn btn-success span1"></div>
	<a class="btn btn-info span3" href="<? echo $_SERVER['DOCUMENT_URI'] ?>?save=TRUE">Save copies of <?=$filename ?> &amp; bootstrap.css</a></p>
</div><br>
<div class="row">
	<P><a class="btn btn-warning span4 icon-cog" href="<? echo $_SERVER['DOCUMENT_URI'] ?>?build=TRUE">Build bootstrap.css from above saved <?=$filename ?></a></P>
</div>
<div class="row">
	<P><a class="btn btn-danger span4" href="<? echo $_SERVER['DOCUMENT_URI'] ?>?reset=TRUE">Delete <? echo $filename ?> &amp; start over with defaults</a></P>
</div>
<!-- VARIABLES ================================================== -->
<section id="variables">
	<h2>A <span style="color:blue">&lt;?php</span> Bootstrap Tweaker</h2>
    <h3>Bootstrap variables <small>LESS variables, their values, and usage guidelines</small></h3>
  <div class="row">
    <div class="span8">
      <h3>Scaffolding and links</h3> <!-- // SCAFFOLDING ======================== -->
      <table class="table table-bordered table-striped table-condensed">
        <tbody>
          <tr><th class="span2">Variable</th> <th class="span2">Setting</th> <th class="span2">Default</th> </tr>
<?
foreach($scaffolding as $color) {
	$_mycolor="";
	if( !isset( $$color ) )
		$_mycolor=$default_colors[$color];
	else
		$_mycolor=$$color;
 ?>      <tr><td><code><? echo "$color" ?></code></td>
			<td><input type="text" class="input-large" id="<? echo $color ?>" name="<? echo $color ?>" value="<? echo $_mycolor ?>">	<span class="swatch" style="background-color:<? echo myColor($_mycolor) ?>;border:thin solid gray"></span>	</td>
            <td class="swatch-col"><span class="swatch" style="background-color: <? echo myColor($default_colors[$color]) ?>;"></span> <? echo $default_colors[$color] ?> </td>
          </tr>
<? } ?></tbody>
      </table>

      <h3>Grid system</h3>				<!-- // GRID SYSTEM ======================== -->
      <table class="table table-bordered table-striped table-condensed">
        <tbody>
          <tr><th>Variable</th> <th class="span3">Setting</th> <th>Default</th> </tr>
<?
foreach($grid as $value) {		// note, these are ALL exceptions! (meaning no color processing)
	if( !isset( $$value ) )
		$$value=$exception_defaults[$value];
 ?>      <tr>
            <td><code><? echo "$value" ?></code></td>
			<td><input type="text" class="input-medium" id="<? echo $value ?>" name="<? echo $value ?>" value="<? echo $$value ?>"></td>
            <td><? echo $exception_defaults[$value] ?></td>
          </tr>
<? } ?></tbody>
      </table>

      <h3>Typography</h3>				<!-- // TYPOGRAPHY ======================== -->
      <table class="table table-bordered table-striped table-condensed">
        <tbody>
          <tr><th>Variable</th> <th class="span3">Setting</th> <th>Default</th> </tr>
<?	foreach($typography as $value) {		// note, these are ALL exceptions! (meaning no color processing)
	if( !isset( $$value ) )
		$$value=$exception_defaults[$value];
 ?>      <tr>
            <td><code><? echo "$value" ?></code></td>
			<td><input type="text" class="input-medium" id="<? echo $value ?>" name="<? echo $value ?>" value="<? echo htmlspecialchars($$value) ?>"></td>
            <td><? echo $exception_defaults[$value];
            if($value=="@baseFontSize" || $value == "@baseLineHeight"){
				echo '&nbsp; <em class="muted">Must be pixels</em>';
			} ?>
            </td>
          </tr>
<? } ?></tbody>
      </table>

<!-- TABLES ============ has mixed colors and values =========== -->
<? buildMixedTableRows("Tables",&$tables); ?>
    </div>

    <div class="span4">
      <h3>Grayscale colors</h3>
      <table class="table table-bordered table-striped  table-condensed">
        <tbody>
          <tr><th class="span2">Variable</th> <th>Setting</th> <th>Default</th> </tr>
<?	foreach($grayscale_colors as $color) {
	$_mycolor="";
	if( !isset( $$color ) )
		$_mycolor=$default_colors[$color];
	else
		$_mycolor=$$color;
 ?>	<tr><td><code><? echo "$color" ?></code></td>
		<td><input type="text" class="input-mini" id="<? echo $color ?>" name="<? echo $color ?>" value="<? echo $_mycolor ?>"> <span class="swatch" style="background-color:<? echo myColor($_mycolor) ?>;border:thin solid gray"></span>			</td>
		<td class="swatch-col"><? echo $default_colors[$color] ?><span class="swatch" style="background-color: <? echo myColor($default_colors[$color]) ?>;"></span> </td>
	</tr>
<? } ?>	</tbody>
      </table>
      <h3>Accent colors</h3>
      <table class="table table-bordered table-striped  table-condensed">
        <tbody>
          <tr> <th class="span2">Variable</th> <th>Setting</th> <th>Default</th> </tr>
<?	foreach($accent_colors as $color) {
	$_mycolor="";
	if( !isset( $$color ) )
		$_mycolor=$default_colors[$color];
	else
		$_mycolor=$$color;
 ?>
	<tr><td><code><? echo "$color" ?></code></td>
		<td><input type="text" class="input-mini" id="<? echo $color ?>" name="<? echo $color ?>" value="<? echo $_mycolor ?>"> <span class="swatch" style="background-color:<? echo myColor($_mycolor) ?>;"></span></td>
		<td class="swatch-col"><? echo $default_colors[$color] ?><span class="swatch" style="background-color: <? echo myColor($default_colors[$color]) ?>;"></span></td>
	</tr>
<? } ?>		</tbody>
		</table>
    </div>
  </div> <!-- /row -->

  <h3>Components</h3>
  <div class="row">
    <div class="span8">
<?
buildMixedTableRows("Buttons",&$buttons);
buildMixedTableRows("Forms",&$forms);
buildMixedTableRows("Form states and alerts",&$formStates);
?>

    </div>
  </div> <!-- /row -->

  <div class="row">
    <div class="span8">
<?
buildMixedTableRows("Navbar",&$navbar);
buildMixedTableRows("Dropdowns",&$dropdowns);
buildMixedTableRows("Hero unit", &$hero_unit); ?>

    </div>
  </div><!-- /row -->

</form>

</section>



    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="docs/assets/js/jquery.js"></script>
    <script src="docs/assets/js/google-code-prettify/prettify.js"></script>
    <script src="docs/assets/js/bootstrap-transition.js"></script>
    <script src="docs/assets/js/bootstrap-alert.js"></script>
    <script src="docs/assets/js/bootstrap-modal.js"></script>
    <script src="docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="docs/assets/js/bootstrap-tab.js"></script>
    <script src="docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="docs/assets/js/bootstrap-popover.js"></script>
    <script src="docs/assets/js/bootstrap-button.js"></script>
    <script src="docs/assets/js/bootstrap-collapse.js"></script>
    <script src="docs/assets/js/bootstrap-carousel.js"></script>
    <script src="docs/assets/js/bootstrap-typeahead.js"></script>
    <script src="docs/assets/js/application.js"></script>


  </body>
</html><?
// no matter what you send myColor(), it tries to return #rgb or #rrggbb
// and this is achieved through recursion... it calls itself to distill
// input colors down until there is a # in front of it. :)
//
// NOTE: debug echo statements should be inside /*  */ comments, so they
// won't break the css style
function myColor($in){
	// echo "/* myColor($in) */ ";
	global $default_colors;
	$rtn=$in;
	$myIndex="@".$in; // handle case where input is "white"
	if(array_key_exists($myIndex,$default_colors))
		$rtn=$default_colors[$myIndex];
	elseif(stripos($in,"#")===0) // handle case where input is "#08c"
		;
	elseif(stripos($in,"darken")!==FALSE || stripos($in,"lighten")!==FALSE){
		$blah1=explode("(",$in);
		$lightdark=$blah1[0];
		$blah2=explode(",",$blah1[1]);
		// echo "/* \$blah2[0] is: ".$blah2[0]." */ ";
		$variable=trim($blah2[0],"$");
		$color=myColor($variable);
		$percent=trim($blah2[1],"%) ");
		$percent=1-(float)$percent/100;
		$color=trim(myColor($color),"#");
		include_once("csscolor.php");
		$c = & new CSS_Color($color);
		// echo "/* $lightdark($color, $percent) */";
		$rtn=call_user_func( array(&$c,$lightdark),$color,$percent);
		if($rtn===FALSE) echo "/* didn't darken */";
		$rtn="#".$rtn;
	} elseif(stripos($in,"@")===0){	// handle variable names
		// echo "/* I'm here, \$in=$in */";
		global $$in;
		if(isset($$in) && !is_null($$in))
			$rtn=myColor($$in);
		else{
			// echo "/* global $$in not found! */";
			if(stripos($in,"#")===0)
				;
			elseif( array_key_exists($in,$default_colors) ){
				$rtn=myColor($default_colors[$in]);
			} else
				echo "/* \$in=$in not found in \$default_colors[$in] */";
		}
	}
	if(stripos($rtn,"@")===0) { // we're about to return a variable!
		$rtn=myColor($default_colors[$rtn]);
	}
	// echo "/* returning $rtn */";
	return $rtn;
}
function doLess($filename){
	$filename_lessvariables="less/variables.less";
	global $accent_colors,$grayscale_colors,$scaffolding,$tables,$buttons,$forms,$formStates,$navbar,$dropdowns,$hero_unit,$default_colors,$exceptions,$exception_defaults;
	$changes=@file_get_contents($filename);
	$lines=explode(";\n",$changes);
	unset($changes);
	$changes=Array();
	foreach($lines as $line){
		if(stripos($line,"@")===0){
			$tmp=explode(":",$line);
			$tmp[1]=trim($tmp[1],"\t ;");
			$changes[$tmp[0]]=$tmp[1];
		}
	}
	// read existing less variables
	$variables=file_get_contents($filename_lessvariables);
	$lines=explode("\n",$variables);
	unset($variables);
	$variables=Array();
	foreach($lines as $line){
		if(stripos($line,"@")===0){
			$tmp=explode(":",$line);
			$tmp[1]=trim($tmp[1],"\t ;");
			$variables[$tmp[0]]=$tmp[1];
		}
	}
	foreach($changes as $key=>$value)	// now we add in our values, blowing away
		$variables[$key]=$changes[$key];// any that are already in $variables
	$output=Array();
	foreach($variables as $key=>$value)
		$output[]="$key:\t$value;";
	$output=implode("\n",$output);

	$command="rm less/variables.less"; $stdout; $retval;
	exec ( $command ,  &$stdout, &$retval  );
	echo "Ran command <b>$command</b>, which returned $retval\n";

	$output="// Variables.less\n// Variables to customize the look and feel of Bootstrap\n// Tweaked by CK's php bootstrap tweaker with mods from $filename\n".$output;
	$bytes=file_put_contents($filename_lessvariables, $output );
	echo "<span class=\"help-inline\">$bytes bytes written to $filename_lessvariables</span>\n";

	$command="lessc less/bootstrap.less > bootstrap.css"; $stdout; $retval;
	exec ( $command ,  &$stdout, &$retval  );
	echo "Ran command <b>$command</b>, which returned $retval\n";
	if($retval)
		echo "<b>$command</b>, should have returned 0, $retval indicates an error.\nTry opening a terminal and running <b>$command</b> to see the error output.\n";
}
function doSave($filename){
	$timestamp=date("ymdHis");
	$newfilename="$filename.$timestamp";
	$command="cp $filename $newfilename"; $output; $retval;
	exec ( $command ,  &$output, &$retval  );
	echo "Ran command <b>$command</b>, which returned $retval\n";
	$command="cp bootstrap.css bootstrap.css.$timestamp"; $output; $retval;
	exec ( $command ,  &$output, &$retval  );
	echo "Ran command <b>$command</b>, which returned $retval\n";
}
function doReset($filename){
	$command="rm $filename"; $output; $retval;
	exec ( $command ,  &$output, &$retval  );
	echo "Ran command <b>$command</b>, which returned $retval\n";
	doLess($filename);
}
function buildMixedTableRows($title, $theArray){
	global $exception_defaults, $default_colors;
?>
	<h4><? echo $title ?></h4>
	<table class="table table-bordered table-striped table-condensed">
	<tbody>
	<tr><th>Variable</th>	<th class="span4">Setting</th>	<th class="span3">Default</th></tr>
<?	foreach($theArray as $color) {
		if(array_key_exists($color,$exception_defaults)) {
			$value=$color;	// THIS ROW HAS PLAIN TEXT VALUE, NOT A COLOR -----------------------
			global $$value;
			if( !isset( $$value ) )
				$$value=$exception_defaults[$value];
?>		      <tr>
				<td><code><? echo "$value" ?></code></td>
				<td><input type="text" class="input-large" id="<? echo $value ?>" name="<? echo $value ?>" value="<? echo htmlspecialchars($$value) ?>"></td>
				<td><? echo $exception_defaults[$value];
				if($value=="@baseFontSize" || $value == "@baseLineHeight"){
					echo '&nbsp; <em class="muted">Must be pixels</em>';
				} ?>
				</td>
			  </tr>
<?		} else {					// THIS ROW HAS DISPLAYABLE COLOR -----------------------
			$_mycolor="";
			global $$color;
			if( !isset( $$color ) )
				$_mycolor=$default_colors[$color];
			else
				$_mycolor=$$color;
		 ?>			<tr><td><code><? echo "$color" ?></code></td>
					<td><input type="text" class="input-large" id="<? echo $color ?>" name="<? echo $color ?>" value="<? echo $_mycolor ?>">
						<span class="swatch" style="background-color:<? echo myColor($_mycolor) ?>;border:thin solid gray"></span>
					</td>
					<td class="swatch-col"><span class="swatch" style="background-color: <? echo myColor($default_colors[$color]) ?>;border:thin solid gray"></span> <? echo $default_colors[$color] ?></td>
				</tr>
		<? }
	}
?></tbody></table><?
}
?>
