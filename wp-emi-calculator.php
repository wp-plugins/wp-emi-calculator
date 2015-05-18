<?php 

/**
* Plugin Name: EMI Calculator 
* Plugin URI: http://www.wptutorialspoint.com/
* Description: This plugin is for EMI Calculator. Please check DEMO on this Link http://www.wptutorialspoint.com/wordpress-emi-calculator-plugin .
* Version: 1.0.0.1
* Author: omikant, wptutorialspoint
* Author URI: http://www.wptutorialspoint.com/
* License: GPL2
*/
?>
<?php

// create shortcode to Display EMI Calculator
add_shortcode( 'emi-calculator', 'emi_calculator' );
function emi_calculator( $atts ) {
?>
<section>

			  <div class="calculator-div">	
			  	<h2>Price Calculator</h2>
						<div id="pricecal">
							<!--<h1>Price Calculator </h1>-->	
						<form name="pricecal1">
						<div style="border:1px dotted #fff; margin-top:5px; padding:5px;">
						<label>Area (Sq Yard):</label><input type="text" name="area1" id="area1" class="cal1" onkeyup="pricecal()"; value="1"> <br>
						</div>

						<div style="border:1px dotted #fff; margin-top:5px; padding:5px;">
						<label>Rate:</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="rate1" id="rate1" class="cal1" onchange="pricecal()";>
						<option value="500">500 Rs.</option>
						<option value="1000">1000 Rs.</option>
						<option value="1500">1500 Rs.</option>
						<option value="2000">2000 Rs.</option>
						<option value="2500">2500 Rs.</option>
						<option value="3000">3000 Rs.</option>
						<option value="3500">3500 Rs.</option>
						<option value="4000">4000 Rs.</option>
						<option value="4500">4500 Rs.</option>
						<option value="5000">5000 Rs.</option>
						<option value="5500">5500 Rs.</option>
						<option value="6000">6000 Rs.</option>
						<option value="6500">6500 Rs.</option>
						<option value="7000">7000 Rs.</option>
						<option value="7500">7500 Rs.</option>
						<option value="8000">8000 Rs.</option>
						<option value="8500">8500 Rs.</option>
						<option value="9000">9000 Rs.</option>
						<option value="9500">9500 Rs.</option>
						<option value="10000">10000 Rs.</option>
						<option value="10500">10500 Rs.</option>
						<option value="11000">11000 Rs.</option>
						<option value="11500">11500 Rs.</option>
						<option value="12000">12000 Rs.</option>
						<option value="12500">12500 Rs.</option>
						<option value="13000">13000 Rs.</option>
						<option value="13500">13500 Rs.</option>
						<option value="14000">14000 Rs.</option>
						<option value="14500">14500 Rs.</option>
						<option value="150000">150000 Rs.</option>
						</select>
						</div>	
					</form>

					<div id="priceresult" style="border:1px dotted #fff; margin-top:15px; padding:10px;font-weight:bold;">Total Amount:</div>
						
							<!--<div id="unitconverter">
								<form name="uconv">
									<select id="unit1" name="unit1">
										<option value=""></option>
									</select>
								</form>
							</div>-->
						</div>
					</div>


					<div class="calculator-div">	
			  	<h2>EMI Calculator</h2>
			  		<form name="emical">
			  		<div style="border:1px dotted #fff; margin-top:5px; padding:5px;">
						<label>Area (Sq Yard):</label>
						<input type="text" name="area" id="area" class="cal1" onkeyup="emical1()"; value="1">
					</div>	
						
					<div style="border:1px dotted #fff; margin-top:5px; padding:5px;">
						<label>Rate:</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="rate" id="rate" class="cal1" onchange="emical1()";>
						<option value="500">500 Rs.</option>
						<option value="1000">1000 Rs.</option>
						<option value="1500">1500 Rs.</option>
						<option value="2000">2000 Rs.</option>
						<option value="2500">2500 Rs.</option>
						<option value="3000">3000 Rs.</option>
						<option value="3500">3500 Rs.</option>
						<option value="4000">4000 Rs.</option>
						<option value="4500">4500 Rs.</option>
						<option value="5000">5000 Rs.</option>
						<option value="5500">5500 Rs.</option>
						<option value="6000">6000 Rs.</option>
						<option value="6500">6500 Rs.</option>
						<option value="7000">7000 Rs.</option>
						<option value="7500">7500 Rs.</option>
						<option value="8000">8000 Rs.</option>
						<option value="8500">8500 Rs.</option>
						<option value="9000">9000 Rs.</option>
						<option value="9500">9500 Rs.</option>
						<option value="10000">10000 Rs.</option>
						<option value="10500">10500 Rs.</option>
						<option value="11000">11000 Rs.</option>
						<option value="11500">11500 Rs.</option>
						<option value="12000">12000 Rs.</option>
						<option value="12500">12500 Rs.</option>
						<option value="13000">13000 Rs.</option>
						<option value="13500">13500 Rs.</option>
						<option value="14000">14000 Rs.</option>
						<option value="14500">14500 Rs.</option>
						<option value="150000">150000 Rs.</option>
						</select>
					</div>

					<div style="border:1px dotted #fff; margin-top:5px; padding:5px;">
						<label>Month:</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="month" id="month" class="cal1" onchange="emical1()";>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						</select> 
					</div>
						</form>

						<div id="result" style="border:1px dotted #fff; margin-top:5px; padding:10px;font-weight:bold;">Result:</div>
						</div>


					 <div class="calculator-div">	

						  <h2>Unit Converter</h2>

						  <form name="unitconv">
						  	<div style="border:1px dotted #fff; margin-top:5px; padding:5px;">

								<label name="convertfrom" class="heading">Convert from:</label>
								<select name="convertfrom" id="convertfrom"  onchange="unitcal1()";>
								<option value='0.9999999999999999'>Acres [ac]</option>
								<option value='40.48364371120674'>Ares [a]</option>
								<option value='605.0926899984885'>Aankadam</option>
								<option value='2.5000229998915344'>Bigha I</option>
								<option value='1.600014723415414'>Bigha II</option>
								<option value='0.1250011478165567'>Biswa I</option>
								<option value='0.0800007361707707'>Biswa II</option>
								<option value='100.01467985501355'>Cents</option>
								<option value='96.80089029714829'>Chataks</option>
								<option value='18.15016707591663'>Grounds</option>
								<option value='40.000367891384755'>Guntha</option>
								<option value='0.40469426915013224'>Hectares</option>
								<option value='60.50055691972211'>Kottah (B)</option>
								<option value='0.40339531107135496'>Kanal</option>
								<option value='8.0679063085479'>Marla</option>
								<option value='159.972090851314'>Perch</option>
								<option value='3.9993022930630495'>Rood</option>
								<option value='43560.40063371671'>Square Feet</option>
								<option value='4051.117258935654'>Square Metres</option>
								<option value='4840.044514856928'>Square Yards</option>
								<option value='0.00405'>Square Kilometres</option>
								</select>
								<input type="text" name="unit1" id="unit1" value="1" onkeyup="unitcal1()"; style="margin-top: 5px; width:172px">
							
							</div>

							<div style="border:1px dotted #fff; margin-top:5px; padding:5px;">
								<label name="convertfrom" class="heading">Convert To:</label>
								<select name="convertto" id="convertto"  onchange="unitcal1()";>
								<option value='0.9999999999999999'>Acres [ac]</option>
								<option value='40.48364371120674'>Ares [a]</option>
								<option value='605.0926899984885'>Aankadam</option>
								<option value='2.5000229998915344'>Bigha I</option>
								<option value='1.600014723415414'>Bigha II</option>
								<option value='0.122'>Biswa I</option>
								<option value='0.08'>Biswa II</option>
								<option value='100.01467985501355'>Cents</option>
								<option value='96.80089029714829'>Chataks</option>
								<option value='18.15016707591663'>Grounds</option>
								<option value='40.000367891384755'>Guntha</option>
								<option value='0.40469426915013224'>Hectares</option>
								<option value='60.50055691972211'>Kottah (B)</option>
								<option value='0.40339531107135496'>Kanal</option>
								<option value='8.0679063085479'>Marla</option>
								<option value='159.972090851314'>Perch</option>
								<option value='3.9993022930630495'>Rood</option>
								<option value='43560.40063371671'>Square Feet</option>
								<option value='4051.117258935654'>Square Metres</option>
								<option value='4840.044514856928'>Square Yards</option>
								<option value='0.00405'>Square Kilometres</option>
								</select>
							</div>

								</form>
								<div id="unitresult" style="border:1px dotted #fff; margin-top:15px; padding:10px;font-weight:bold;">Result:</div>
							<div>
			  		
			  </div>

			 
	</section>
	
<?php } 
function emi_calculator_script() {?>

<script>
(function($){
$(document).ready(function(){
$('#menuToggle').click(function(e){
var $parent = $(this).parent('section');
$parent.toggleClass("open");
var sectionState = $parent.hasClass('open') ? "hide" : "show";
$(this).attr("title", sectionState + " sectionigation");
// Set the timeout to the animation length in the CSS.
setTimeout(function(){
console.log("timeout set");
$('#menuToggle > span').toggleClass("sectionClosed").toggleClass("sectionOpen");
}, 200);
e.preventDefault();
});
});
})(jQuery);
</script>

<script>
// Window load event used just in case window height is dependant upon images
$(window).bind("load", function() { 
       
       var footerHeight = 0,
           footerTop = 0,
           $footer = $("#footer");
           
       positionFooter();
       
       function positionFooter() {
       
                footerHeight = $footer.height();
                footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";
       
               if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                   $footer.css({
                        position: "absolute"
                   }).animate({
                        top: footerTop
                   })
               } else {
                   $footer.css({
                        position: "static"
                   })
               }
               
       }

       $(window)
               .scroll(positionFooter)
               .resize(positionFooter)
               
});
</script>


<!--calculator=========-->
<script type="text/javascript">

function emical1(i){
	var str=emical.area.value;
	str=str.slice(-1);
	if(isNaN(str)==true){
			alert("Enter only numeric values");
			str=str.slice(0, -1);
			emical.area.value=str;
			return false;
		}
	var area=parseFloat(emical.area.value);
	var rate=parseFloat(emical.rate.value);
	var month=parseFloat(emical.month.value);
	var result=area*rate/month.toFixed(2);
	document.getElementById('result').innerHTML=result;
}

function pricecal(){
	var str=pricecal1.area1.value;
	str=str.slice(-1);
	if(isNaN(str)==true){
			alert("Enter only numeric values");
			str=str.slice(0, -1);
			pricecal1.area1.value;
			return false;
		}
	var parea=parseFloat(pricecal1.area1.value);
	var prate=parseFloat(pricecal1.rate1.value);
	var presult=parea*prate.toFixed(2);
	document.getElementById('priceresult').innerHTML=presult;
	}
</script>
<!--calculator=========-->


<!--EMI calculator=========-->
<script type="text/javascript">
function unitcal1(){
	var str=unitconv.unit1.value;

	var unittxt1=parseFloat(unitconv.unit1.value);
	var convfrom=parseFloat(unitconv.convertfrom.value);
	var convto=parseFloat(unitconv.convertto.value);
	var result=convto*unittxt1/convfrom;
	document.getElementById('unitresult').innerHTML=result.toFixed(4);
}
 </script>
<!--EMI calculator=========-->
    <script>
		$(document).on("scroll", function() {
		  if ($(document).scrollTop() > 120) {
			$("header").addClass("small");
		  } else {
			$("header").removeClass("small");
		  }
		});
    </script>
<?php }
// Add hook for front-end <head></head>
add_action('wp_head', 'emi_calculator_script');

add_action('wp_footer', 'emi_calculator_scripts');
function emi_calculator_scripts() {
    if (!is_admin()) {
        wp_enqueue_script( 'jquery' );
    }
}
?>
