<?php
include("connect.php");
include("header.php");
?>
<h3 style="text-align: center;"></h3>
				<form action="save_theme.php" method="POST">
				<table align="center">
						<tr>
							<td>Theme change</td>
							<td><select name="color"><option>select</option>
									<option <style type="background:#FF3756">red</option>
										<option <style type="background:#5EFF4C">green</option>
										<option <style type="background:#3331FF">blue</option>
										<option <style type="background:#F770F9">pink</option>
										<option <style type="background:#BAFFC9">seagreen</option></select></td></tr>
						<tr>
							<tr>
							<td colspan="2" align="center">
								<input id="button" type="submit" value="Login"/>
							</td>
						</tr>