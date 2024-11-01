<?php
/*
 *	Plugin Name: Steel Calculator
 *	Plugin URI: http://www.marketingthechange.com/
 *	Description: Calculates as per inputs provided
 *	Version: 1.0
 *	Author: Joshua Morley - Digital Marketing
 *	Author URI: http://www.marketingthechange.com/
 */

function mtc_remove_news(){
	remove_meta_box('dashboard_primary', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', 'mtc_remove_news');

function print_my_inline_script() {
  //if ( wp_script_is( 'some-script-handle', 'done' ) ) {
?>
<script type="text/javascript">
// js code goes here
var hb = new Array (800, 780, 760, 752, 745, 746, 735, 711, 695, 681, 658, 642, 627, 613, 601, 592, 572, 552, 534, 513, 504, 486, 469, 468, 456, 445, 430, 419, 415, 402, 388, 375, 373, 360, 348, 341, 331, 322, 314, 308, 300, 290, 277, 271, 264, 262, 255, 250, 245, 240, 233, 229, 223, 216, 212, 208, 203, 199, 191, 190, 186, 183, 180, 175, 170, 167, 166, 163, 160, 156, 154, 149, 147, 143, 141, 139, 137, 135, 131, 127, 121, 116, 114, 111, 107, 105, 103, 95, 90, 81, 76)
var hrc = new Array (72, 71, 70, 69, 68, 67, 66, 65, 64, 63, 62, 61, 60, 59, 58, 57, 56, 55, 54, 53, 52, 51, 50, 49, 48, 47, 46, 45, 44, 43, 42, 41, 40, 39, 38, 37, 36, 35, 34, 33, 32, 31, 30, 29, 28, 27, 26, 25, 24, 23, 22, 21, 20, 19, 18, 17, 16, 15, 14, 13, 12, 11, 10, 9, 7, 6, 5, 4, 3, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
var hrb = new Array (0,0 , 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 120, 119, 118, 118, 117, 117, 116, 115, 115, 114, 114, 114, 113, 112, 111, 111, 110, 109, 109, 108, 108, 107, 107, 106, 105, 104, 103, 103, 102, 101, 100, 100, 99, 98, 97, 96, 95, 95, 94, 93, 92, 92, 91, 90, 89, 88, 87, 86, 86, 85, 84, 83, 82, 81, 80, 79, 78, 77, 76, 75, 74, 72, 70, 68, 67, 66, 64, 62, 61, 56, 52, 41, 37)
var hv = new Array (0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 746, 727, 694, 649, 589, 567, 549, 531, 505, 497, 490, 474, 458, 448, 438, 424, 406, 393, 388, 376, 361, 351, 342, 332, 320, 311, 303, 292, 285, 277, 271, 262, 258, 255, 252, 247, 241, 235, 227, 222, 218, 210, 201, 199, 197, 186, 184, 183, 180, 178, 175, 172, 168, 162, 160, 158, 152, 149, 147, 146, 144, 142, 140, 137, 134, 129, 127, 124, 121, 118, 115, 112, 108, 104, 95, 85, 80)

function convert(from, scale) {
	max = hb.length
	converter.hrc.value = converter.hrb.value = converter.hv.value = converter.hb.value = ""
	if (scale == "hb") {
		for (i=0; i < max; i++) {
			if (hb[i] <= from) {
				converter.hb.value = hb[i]; converter.hrc.value = hrc[i]; converter.hrb.value = hrb[i]; converter.hv.value = hv[i]; 
				break;
			}
		}
	}
	else if (scale == "hrc") {
		for (i=0; i < max; i++) {
			if (hrc[i] <= from) {
				converter.hb.value = hb[i]; converter.hrc.value = hrc[i]; converter.hrb.value = hrb[i]; converter.hv.value = hv[i]; 
				break;
			}
		}
	}
		else if (scale == "hrb") {
		for (i=0; i < max; i++) {
			if (hrb[i] <= from && hrb[i] != 0 ) {
				converter.hb.value = hb[i]; converter.hrc.value = hrc[i]; converter.hrb.value = hrb[i]; converter.hv.value = hv[i]; 
				break;
			}
		}
	}
	else if (scale == "hv") {
		for (i=0; i < max; i++) {
			if (hv[i] <= from && hv[i] != 0) {
				converter.hb.value = hb[i]; converter.hrc.value = hrc[i]; converter.hrb.value = hrb[i]; converter.hv.value = hv[i]; 
				break;
			}
		}
	}

}
//alert('kos');
</script>
<?php
  //}
}
add_action( 'wp_footer', 'print_my_inline_script' );
function calculator_shortcode_handler(){
	$html = '';
	$html .= '<div id="steel-calc"><h1>Steel Hardness Conversion Table</h1>
      <p>This table shows approximate hardness of steel using Brinell, Rockwell B and C and Vickers scales. These conversion charts are provided for guidance only as each  scales uses different methods of measuring hardness. The right hand column show an approximate equivalent tensile strength.      </p>
      <form id="converter" name="converter" method="post" action="">
        <table width="99%" border="0" cellspacing="0" cellpadding="0" style="background-color:#eee">
          <tr>
            <td colspan="5"><strong>Steel Hardness conversion calculator</strong></td>
            </tr>
          <tr>
            <td width="20%">Brinell Hardness HB</td>
            <td width="20%">Rockwell C - HRC</td>
            <td width="20%">Rockwell B - HRB</td>
            <td width="20%">Vickers - HV</td>
            <td width="20%">&nbsp;</td>
          </tr>
          <tr>
            <td><input name="hb" type="text" id="hb" size="5" maxlength="5" onblur="convert(this.value, \'hb\')" /></td>
            <td><input name="hrc" type="text" id="hrc" size="5" maxlength="5" onblur="convert(this.value, \'hrc\')" /></td>
            <td><input name="hrb" type="text" id="hrb" size="5" maxlength="5" onblur="convert(this.value, \'hrb\')" /></td>
            <td><input name="hv" type="text" id="hv" size="5" maxlength="5" onblur="convert(this.value, \'hv\')" /></td>
            <td><input type="button" name="calculate" id="calculate" value="Calculate" /></td>
          </tr>
          <tr>
            <td colspan="5">Enter a figure into any of the fields and click calculate, the nearest values in each scale is shown, or zero if out of range. Values are approximate and for guidance only.</td>
            </tr>
        </table>
      </form></div>';
      echo $html;
}
add_shortcode('SteelCalc', 'calculator_shortcode_handler');
?>