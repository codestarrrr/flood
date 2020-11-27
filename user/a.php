<?php
include('../connect.php');
$result = mysql_query("SELECT * FROM stats ORDER BY ID DESC LIMIT 1");
while($row = mysql_fetch_array($result))
{
	$stats = $row['status'];
	$status = $row['status'];
}
if($status == '15') {
	$s = '1';
}
if($status == '14') {
	$s = '2';
}
if($status == '13') {
	$s = '3';
}
if($status == '12') {
	$s = '4';
}
if($status == '11') {
	$s = '5';
}
if($status == '10') {
	$s = '6';
}
if($status == '9') {
	$s = '7';
}
if($status == '8') {
	$s = '8';
}
if($status == '7') {
	$s = '9';
}
if($status == '6') {
	$s = '10';
}
if($status == '5') {
	$s = '11';
}
if($status == '4') {
	$s = '12';
}
if($status == '3') {
	$s = '13';
}
if($status == '2') {
	$s = '14';
}
if($status == '1') {
	$s = '15';
}
echo '<h1 style="font-size:45px">'.$s.' cm</h1><br>';
if($stats > 10) {
	$status = 'LOW';
	?>
	
	<table style="border:0px solid #FFF;width:80%">
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  High</td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  Moderate</td>
					</tr>
					<?php 
				
					if($stats <= '11') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '12') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '13') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '14') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php
					}
					if($stats <= '15') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  Low</td>
					</tr>
					<?php
					}
					?>
				
				</table>
	<?php
	
	
		}
if($stats <= 10 && $stats > 5) {
	?>
	
	<table style="border:0px solid #FFF;width:80%">
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px;">
						<td style="border:1px solid #FFF;" width="60%"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  High</td>
					</tr>
					<?php 
				
					if($stats <= '6') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '7') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '8') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '9') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php
					}
					if($stats <= '10') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  Moderate</td>
					</tr>
					<?php
					}
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green""></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green""></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green""></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green""></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green"><center style="color:#000"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  Low</td>
					</tr>
				
				</table>
	<?php
	$status = 'MODERATE';
}

if($stats <= 5) {
	
	?>
	
	<table style="border:0px solid #FFF;width:80%">
<?php 
				
					if($stats <= '1') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:red" width="60%"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '2') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:red"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '3') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:red"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php 
					}
					if($stats <= '4') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:red"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					
					<?php 
					}
					else {
					?>
					
					<tr style="height:30px">
						<td style="border:1px solid #FFF;"></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<?php
					}
					if($stats <= '5') {
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:red"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  High</td>
					</tr>
					<?php
					}
					?>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow" valign="middle" width="60%"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:yellow" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  Moderate</td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"></td>
					</tr>
					<tr style="height:30px">
						<td style="border:1px solid #FFF;background-color:green" valign="middle"><center style="color:#000"></center></td>
						<td></td>
						<td valign="bottom" style="color:#FFF;font-size:18px"> -  Low</td>
					</tr>
					</tr>
				
				</table>
	<?php
}
?>
