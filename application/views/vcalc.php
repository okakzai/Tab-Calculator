<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to PHP Calculator</title>
	<meta name="keywords" content="PHP, CodeIgniter, jQuery, Calculator">
	<meta name="description" content="PHP Calculator Berbasis CodeIgniter dan jQuery">
	<link rel="shortcut icon" href="<?php echo base_url()?>asset/img/favicon.ico" />
	<link rel="stylesheet" href="<?php echo base_url()?>asset/css/calc.css" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url()?>asset/jquery/jquery-1.7.1.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#combobox').change(function(){
			$('#loading').html('Loading...');
			var pad = $('#combobox option:selected').text();
			$('.calculation1,.calculation2,.calculation3,.calculation4,.calculation5,.calculation6,.calculation7,.calculation8,.calculation9,.calculation10,.calculation11,.calculation12,.calculation13,.calculation14').html('None');
			if (pad=='Select Pad Driver:'){
				$('#total,#section,#cut,#polish,#crew,#inefficiency,#revenue,#satu,#dua,#tiga,#empat,#lima,#othermat').attr('value','None');
				$('.data1,.data2,.data3,.total,.section,.cut,.polish,.crew,.inefficiency,.revenue,.headtab,.laborcost1,.laborcost2,.laborcost3,.laborcost4,.laborcost5,.satu,.dua,.tiga,.empat,.lima,.othermat,.onesatu,.onedua,.onetiga,.oneempat,.onelima,.twosatu,.twodua,.twotiga,.twoempat,.twolima,.threesatu,.threedua,.threetiga,.threeempat,.threelima,.foursatu,.fourdua,.fourtiga,.fourempat,.fourlima,.fivesatu,.fivedua,.fivetiga,.fiveempat,.fivelima,.sixsatu,.sixdua,.sixtiga,.sixempat,.sixlima').html('None');
				$('#loading').html(null);
			}
			else if (pad=='17" Pad Driver'){
				$.getJSON('<?php echo site_url();?>/ccalc/set17', function(data) {	
					$('#total').attr('value',data.total);
					$('#section').attr('value',data.section);
					$('#cut').attr('value',data.cut);
					$('#polish').attr('value',data.polish);
					$('#crew').attr('value',data.crew);
					$('#inefficiency').attr('value',data.inefficiency+'%');
					$('#revenue').attr('value','$'+data.revenue);
					$('#loading').html(data.loading);
					$('#satu').attr('value','$'+data.satu);
					$('#dua').attr('value','$'+data.dua);
					$('#tiga').attr('value','$'+data.tiga);
					$('#empat').attr('value','$'+data.empat);
					$('#lima').attr('value','$'+data.lima);
					$('#othermat').attr('value','$'+data.othermat);
					$('.data1,.data2,.data3,.total,.section,.cut,.polish,.crew,.inefficiency,.revenue,.headtab,.laborcost1,.laborcost2,.laborcost3,.laborcost4,.laborcost5,.satu,.dua,.tiga,.empat,.lima,.othermat,.onesatu,.onedua,.onetiga,.oneempat,.onelima,.twosatu,.twodua,.twotiga,.twoempat,.twolima,.threesatu,.threedua,.threetiga,.threeempat,.threelima,.foursatu,.fourdua,.fourtiga,.fourempat,.fourlima,.fivesatu,.fivedua,.fivetiga,.fiveempat,.fivelima,.sixsatu,.sixdua,.sixtiga,.sixempat,.sixlima').html('None');
				});
			}
			else if (pad=='22" Pad Driver'){
				$.getJSON('<?php echo site_url();?>/ccalc/set22', function(data) {	
					$('#total').attr('value',data.total);
					$('#section').attr('value',data.section);
					$('#cut').attr('value',data.cut);
					$('#polish').attr('value',data.polish);
					$('#crew').attr('value',data.crew);
					$('#inefficiency').attr('value',data.inefficiency+'%');
					$('#revenue').attr('value','$'+data.revenue);
					$('#loading').html(data.loading);
					$('#satu').attr('value','$'+data.satu);
					$('#dua').attr('value','$'+data.dua);
					$('#tiga').attr('value','$'+data.tiga);
					$('#empat').attr('value','$'+data.empat);
					$('#lima').attr('value','$'+data.lima);
					$('#othermat').attr('value','$'+data.othermat);
					$('.data1,.data2,.data3,.total,.section,.cut,.polish,.crew,.inefficiency,.revenue,.headtab,.laborcost1,.laborcost2,.laborcost3,.laborcost4,.laborcost5,.satu,.dua,.tiga,.empat,.lima,.othermat,.onesatu,.onedua,.onetiga,.oneempat,.onelima,.twosatu,.twodua,.twotiga,.twoempat,.twolima,.threesatu,.threedua,.threetiga,.threeempat,.threelima,.foursatu,.fourdua,.fourtiga,.fourempat,.fourlima,.fivesatu,.fivedua,.fivetiga,.fiveempat,.fivelima,.sixsatu,.sixdua,.sixtiga,.sixempat,.sixlima').html('None');
				});
			}
		});	
		$('#button').click(function(){
			var pad = $('#combobox option:selected').text();
			var total=$('#total').attr('value');
			var section=$('#section').attr('value');
			var cut=$('#cut').attr('value');
			var polish=$('#polish').attr('value');
			var crew=$('#crew').attr('value');
			var inefficien=$('#inefficiency').attr('value');
			var inefficiency=inefficien.replace("%","");
			var revenu=$('#revenue').attr('value');
			var revenue=revenu.replace("$",""); 
			var sat=$('#satu').attr('value');
			var satu=sat.replace("$","");
			var du=$('#dua').attr('value');
			var dua=du.replace("$","");
			var tig=$('#tiga').attr('value');
			var tiga=tig.replace("$","");
			var empa=$('#empat').attr('value');
			var empat=empa.replace("$","");
			var lim=$('#lima').attr('value');
			var lima=lim.replace("$","");
			var mat=$('#othermat').attr('value');
			var othermat=mat.replace("$","");
			if (pad=='Select Pad Driver:'){
				$('#loading').html(null);
			}
			else{
				$('#loading').html('Loading...');
			}	
			$.getJSON('<?echo site_url();?>/ccalc/calculation/'+pad+'/'+total+'/'+section+'/'+'/'+cut+'/'+polish+'/'+crew+'/'+inefficiency+'/'+revenue+'/'+satu+'/'+dua+'/'+tiga+'/'+empat+'/'+lima+'/'+othermat, 
			function(calculation){	
					$('#loading').html(calculation.loading);
					$('.data1').html(calculation.pad);
					$('.headtab').html(calculation.pad);
					$('.data2').html(calculation.total);
					$('.data3').html(calculation.calculation1);
					$('.total').html(calculation.total);
					$('.section').html(calculation.section);
					$('.cut').html(calculation.cut);
					$('.polish').html(calculation.polish);
					$('.crew').html(calculation.crew);
					$('.inefficiency').html(calculation.inefficiency+'%');
					$('.revenue').html('$'+calculation.revenue);
					$('.calculation1').html(calculation.calculation1);
					$('.calculation2').html(calculation.calculation2);
					$('.calculation3').html(calculation.calculation3);
					$('.calculation4').html(calculation.calculation4);
					$('.calculation5').html(calculation.calculation5);
					$('.calculation6').html(calculation.calculation6);
					$('.calculation7').html('$'+calculation.calculation7);
					$('.calculation8').html(calculation.calculation8);
					$('.calculation9').html(calculation.calculation9);
					$('.calculation10').html(calculation.calculation10);
					$('.calculation11').html(calculation.calculation11);
					$('.calculation12').html(calculation.calculation12);
					$('.calculation13').html('$'+calculation.calculation13);
					$('.calculation14').html('$'+calculation.calculation14);
					$('.laborcost1').html('$'+calculation.laborcost1);
					$('.laborcost2').html('$'+calculation.laborcost2);
					$('.laborcost3').html('$'+calculation.laborcost3);
					$('.laborcost4').html('$'+calculation.laborcost4);
					$('.laborcost5').html('$'+calculation.laborcost5);
					$('.satu').html('$'+calculation.satu);
					$('.dua').html('$'+calculation.dua);
					$('.tiga').html('$'+calculation.tiga);
					$('.empat').html('$'+calculation.empat);
					$('.lima').html('$'+calculation.lima);
					$('.othermat').html('$'+calculation.othermat);
					$('.onesatu').html('$'+calculation.onesatu);
					$('.onedua').html('$'+calculation.onedua);
					$('.onetiga').html('$'+calculation.onetiga);
					$('.oneempat').html('$'+calculation.oneempat);
					$('.onelima').html('$'+calculation.onelima);
					$('.twosatu').html('$'+calculation.twosatu);
					$('.twodua').html('$'+calculation.twodua);
					$('.twotiga').html('$'+calculation.twotiga);
					$('.twoempat').html('$'+calculation.twoempat);
					$('.twolima').html('$'+calculation.twolima);
					$('.threesatu').html('$'+calculation.threesatu);
					$('.threedua').html('$'+calculation.threedua);
					$('.threetiga').html('$'+calculation.threetiga);
					$('.threeempat').html('$'+calculation.threeempat);
					$('.threelima').html('$'+calculation.threelima);
					$('.foursatu').html(calculation.foursatu+'%');
					$('.fourdua').html(calculation.fourdua+'%');
					$('.fourtiga').html(calculation.fourtiga+'%');
					$('.fourempat').html(calculation.fourempat+'%');
					$('.fourlima').html(calculation.fourlima+'%');
					$('.fivesatu').html(calculation.fivesatu+'%');
					$('.fivedua').html(calculation.fivedua+'%');
					$('.fivetiga').html(calculation.fivetiga+'%');
					$('.fiveempat').html(calculation.fiveempat+'%');
					$('.fivelima').html(calculation.fivelima+'%');
					$('.sixsatu').html(calculation.sixsatu+'%');
					$('.sixdua').html(calculation.sixdua+'%');
					$('.sixtiga').html(calculation.sixtiga+'%');
					$('.sixempat').html(calculation.sixempat+'%');
					$('.sixlima').html(calculation.sixlima+'%');
			});
		});	
	})
	</script>
</head>
<body>
	<div id="container">
		<h3>PHP Calculator</h3>
		<div id="top">
		<div id="loading"></div>
		<?php
		$option=array('0'=>'Select Pad Driver:','1'=>'17" Pad Driver','2'=>'22" Pad Driver',);
		echo form_dropdown('combo',$option,'0','id="combobox"');
		?>
		</div>
		<div id="contentwrapper">
			<div id="contentcolumn">
				<h4 class="calc">Calculation Result:</h4>
				<div id="calculation">
					<table align="center">
					<tbody>
						<tr>
							<td>
								Labor for
							</td>
							<td>
								<div class="data1">None</div>
							</td>
							<td>
								Total Sq Ft
							</td>
							<td>
								<div class="data2">None</div>
							</td>
							<td>
								devided by
							</td>
							<td>
								<div class="section">None</div>
							</td>
							<td>
								Sq Ft Sections=
							</td>
							<td>
								<div class="data3">None</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="section">None</div>
							</td>
							<td>
								Sq Ft Per <font class="cut">None</font> Min
							</td>
							<td>
								Sections
							</td>
							<td>
								<div class="calculation1">None</div>
							</td>
							<td>
								Multiplied by number of CUTS
							</td>
							<td>
								<div class="cut">None</div>
							</td>
							<td>
								at 4 Mins ea=
							</td>
							<td>
								<div class="calculation2">None</div>
							</td>
							<td>
								Minutes
							</td>
						</tr>
						<tr>
							<td>
								<div class="calculation3">None</div>
							</td>
							<td>
								Sq Ft Per <font class="polish">None</font> Min
							</td>
							<td>
								Sections
							</td>
							<td>
								<div class="calculation1">None</div>
							</td>
							<td>
								Multiplied by number of POLISH
							</td>
							<td>
								<div class="polish">None</div>
							</td>
							<td>
								at 4 Mins ea=
							</td>
							<td>
								<div class="calculation4">None</div>
							</td>
							<td>
								Minutes
							</td>
						</tr>
						<tr>
							<td>
								60 Min=
							</td>
							<td>
								<font class="calculation5">None</font> Sq Ft
							</td>
							<td>
								<font class="calculation6">None</font>
							</td>
							<td colspan="2">
								Minutes divided by 60 Minutes=
							</td>
							<td>
								<div class="calculation8">None</div>
							</td>
							<td>
								Man Hours
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<font class="calculation5">None</font> SF @ 60% Actual= <font class="calculation9">None</font> Sq Ft
							</td>
							<td>
								<font class="calculation8">None</font>
							</td>
							<td>
								Man Hours divided by number of Crew
							</td>
							<td>
								<div class="crew">None</div>
							</td>
							<td>
								=
							</td>
							<td>
								<div class="calculation10">None</div>
							</td>
							<td>
								Hrs for Job
							</td>
						</tr>
						<tr>
							<td colspan="3">
								$21 PH/<font class="calculation9">None</font> SF= <font class="calculation7">None</font>
							</td>
							<td>
								<font class="calculation8">None</font>
							</td>
							<td>
								Multiplied by Percent of Inefficiency
							</td>
							<td>
								<font class="inefficiency">None</font> <font class="calculation11">None</font>
							</td>
							<td>
								=
							</td>
							<td>
								<div class="calculation12">None</div>
							</td>
							<td>
								Hrs for Job
							</td>
						</tr>
						<tr>
							<td colspan="3"></td>
							<td>
								<font class="calculation12">None</font>
							</td>
							<td>
								Multiplied $ per Hour of Revenue
							</td>
							<td>
								<font class="revenue">None</font>
							</td>
							<td>
								=
							</td>
							<td>
								<div class="calculation13">None</div>
							</td>
							<td>
								Ttl Job Quote
							</td>
						</tr>
						<tr>
							<td>
								<font class="calculation13">None</font>
							</td>
							<td>
								Divided by Sq Ft of Job
							</td>
							<td>
								<font class="total">None</font>
							</td>
							<td>
								=
							</td>
							<td>
								<div class="calculation14">None</div>
							</td>
							<td colspan="3">
								Sq Ft Quote for Honing and Polishing
							</td>
						</tr>
					</tbody>
					</table>
					<br />
					<h3><font class="headtab">None</font> Hones & Polish</h3>
					<div id="result">
					<table>
					<tbody>
						<tr>
							<th>NO.</th>
							<th>HONES&POLISH</th>
							<th>SQ.FT. COST DIMONDS&POLISH</th>
							<th>SQ.FT. COST OTHER MAT.</th>
							<th>TOTAL SQ.FT. MATERIAL COST</th>
							<th>SQ.FT. LABOR COST PER CUT</th>
							<th>TOTAL SQ.FT. COST</th>
							<th style="color:purple;">SQ.FT. PRICE W/LABOR AT 25%</th>
							<th>ROI</th>
							<th>COST % REVENUE</th>
							<th>LABOR TO REVENUE</th>
						</tr>
						<tr bgcolor="#E1E1E1">
							<td>1</td>
							<td>1 HONE&POLISH</td>
							<td class="satu">None</td>
							<td class="othermat">None</td>
							<td class="onesatu">None</td>
							<td class="laborcost1">None</td>
							<td class="twosatu">None</td>
							<td class="threesatu">None</td>
							<td class="foursatu">None</td>
							<td class="fivesatu">None</td>
							<td class="sixsatu">None</td>
						</tr>
						<tr bgcolor="#EEEEEE">
							<td>2</td>
							<td>2 HONES&POLISH</td>
							<td class="dua">None</td>
							<td class="othermat">None</td>
							<td class="onedua">None</td>
							<td class="laborcost2">None</td>
							<td class="twodua">None</td>
							<td class="threedua">None</td>
							<td class="fourdua">None</td>
							<td class="fivedua">None</td>
							<td class="sixdua">None</td>
						</tr>
						<tr bgcolor="#E1E1E1">
							<td>3</td>
							<td>3 HONES&POLISH</td>
							<td class="tiga">None</td>
							<td class="othermat">None</td>
							<td class="onetiga">None</td>
							<td class="laborcost3">None</td>
							<td class="twotiga">None</td>
							<td class="threetiga">None</td>
							<td class="fourtiga">None</td>
							<td class="fivetiga">None</td>
							<td class="sixtiga">None</td>
						</tr>
						<tr bgcolor="#EEEEEE">
							<td>4</td>
							<td>4 HONES&POLISH</td>
							<td class="empat">None</td>
							<td class="othermat">None</td>
							<td class="oneempat">None</td>
							<td class="laborcost4">None</td>
							<td class="twoempat">None</td>
							<td class="threelima">None</td>
							<td class="fourempat">None</td>
							<td class="fiveempat">None</td>
							<td class="sixempat">None</td>
						</tr>
						<tr bgcolor="#E1E1E1">
							<td>5</td>
							<td>5 HONES&POLISH</td>
							<td class="lima">None</td>
							<td class="othermat">None</td>
							<td class="onelima">None</td>
							<td class="laborcost5">None</td>
							<td class="twolima">None</td>
							<td class="threelima">None</td>
							<td class="fourlima">None</td>
							<td class="fivelima">None</td>
							<td class="sixlima">None</td>
						</tr>
					</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
		<div id="leftcolumn">
			<h4 class="form">Variable:</h4>
			<div id="variable">
				<table align="center">
				<tbody>
					<tr>
						<td>
						<?php
						echo form_label('Total Sq Ft');
						?>
						</td>
						<td>:</td>
						<td>
						<?php
						$total=array('id'=>'total','type'=>'text','value'=>'None','size'=>'9');
						echo form_input($total);
						?>
						</td>
					</tr>
					<tr>
						<td>
						<?php
						echo form_label('Inefficiency');
						?>
						</td>
						<td>:</td>
						<td>
						<?php
						$inefficiency=array('id'=>'inefficiency','type'=>'text','value'=>'None','size'=>'9');
						echo form_input($inefficiency);
						?>
						</td>
					</tr>
					<tr>
						<td>
						<?php
						echo form_label('Revenue');
						?>
						</td>
						<td>:</td>
						<td>
						<?php
						$revenue=array('id'=>'revenue','type'=>'text','value'=>'None','size'=>'9');
						echo form_input($revenue);
						?>
						</td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td>
						<?php
						echo form_label('Sections');
						?>
						</td>
						<td>:</td>
						<td>
						<?php
						$section=array('id'=>'section','type'=>'text','value'=>'None','size'=>'9');
						echo form_input($section);
						?>
						</td>
					</tr>
					<tr>
						<td>
						<?php
						echo form_label('CUTS');
						?>
						</td>
						<td>:</td>
						<td>
						<?php
						$cut=array('id'=>'cut','type'=>'text','value'=>'None','size'=>'9');
						echo form_input($cut);
						?>
						</td>
					</tr>
					<tr>
						<td>
						<?php
						echo form_label('POLISH');
						?>
						</td>
						<td>:</td>
						<td>
						<?php
						$polish=array('id'=>'polish','type'=>'text','value'=>'None','size'=>'9');
						echo form_input($polish);
						?>
						</td>
					</tr>
					<tr>
						<td>
						<?php
						echo form_label('Crew');
						?>
						</td>
						<td>:</td>
						<td>
						<?php
						$crew=array('id'=>'crew','type'=>'text','value'=>'None','size'=>'9');
						echo form_input($crew);
						?>
						</td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3">
						<?php echo form_fieldset('SQ.FT. COST DIMONDS&POLISH');?>
						<table align="center">
						<tbody>
						<tr>
							<td class="label">
								<?php
								echo form_label('1');
								?>
							</td>
							<td class="delim">:</td>
							<td class="input">
								<?php
								$satu=array('id'=>'satu','type'=>'text','value'=>'None','size'=>'5');
								echo form_input($satu);
								?>
							</td>
						</tr>
						<tr>
							<td class="label">
								<?php
								echo form_label('2');
								?>
							</td>
							<td class="delim">:</td>
							<td class="input">
								<?php
								$dua=array('id'=>'dua','type'=>'text','value'=>'None','size'=>'5');
								echo form_input($dua);
								?>
							</td>
						</tr>
						<tr>
							<td class="label">
								<?php
								echo form_label('3');
								?>
							</td>
							<td class="delim">:</td>
							<td class="input">
								<?php
								$tiga=array('id'=>'tiga','type'=>'text','value'=>'None','size'=>'5');
								echo form_input($tiga);
								?>
							</td>
						</tr>
						<tr>
							<td class="label">
								<?php
								echo form_label('4');
								?>
							</td>
							<td class="delim">:</td>
							<td class="input">
								<?php
								$empat=array('id'=>'empat','type'=>'text','value'=>'None','size'=>'5');
								echo form_input($empat);
								?>
							</td>
						</tr>
						<tr>
							<td class="label">
								<?php
								echo form_label('5');
								?>
							</td>
							<td class="delim">:</td>
							<td class="input">
								<?php
								$lima=array('id'=>'lima','type'=>'text','value'=>'None','size'=>'5');
								echo form_input($lima);
								?>
							</td>
						</tr>
						</tbody>
						</table>
						<?php echo form_fieldset_close();?>
						</td>
					</tr>
					<tr>
						<td>
							<?php
							echo form_label('OTHER MAT.');
							?>
						</td>
						<td>:</td>
						<td>
							<?php
							$othermat=array('id'=>'othermat','type'=>'text','value'=>'None','size'=>'9');
							echo form_input($othermat);
							?>
						</td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
						<?php
						$button=array('id'=>'button','type'=>'button','value'=>'false','content'=>'Calculate');
						echo form_button($button);
						?>
						</td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>	
	</div>
	<br /><br /><br /><br /><br /><br />
	<center>Develop by <a href="http://zainal-abidin.vv.si/" target="blank">Zainal Abidin</a> | Design by <a href="http://www.facebook.com/pesanwebsite" target="blank">Pesan Website</a></center>
</body>
</html>