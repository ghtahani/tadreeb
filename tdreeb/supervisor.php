<?php
    require "header.php";
    include 'config.php';
?>
<!DOCTYPE html>

		<div id="fh5co-main">
			<div class="container">


<table class="table table-striped">
<thead>
<tr>
<?php  
	$SuperID=2;
	$getData = mysqli_query($conn, "SELECT * FROM supervisor WHERE SuperID = '$SuperID'");
    $rowData = mysqli_fetch_array($getData);
	print '<td style="float: right; color:#94CDDE;">'.$rowData['supEmail'].'</td>';
	?>
<td style="text-align: right;  font-weight: bold;">: الايميل</td>
</tr>
<br/>
<tr>
<?php print '<td style="float:right; color:#94CDDE; algin:right;">'.$rowData['OfficeNO'].'</td>'; ?>
<td style="text-align: right;  font-weight: bold;">: رقم المكتب</td>
</tr>
<br/>
</thead>
</table>
<a href="updateSupervisorProfile.php" class="btn btn-primary btn-lg " style="font-weight: bold;">تحديث</a>

<br/>
<br/>

<table class="table">
    <thead>
    <tr>
    <td style="text-align: right; font-weight: bold;"> ارسال تنبيه</td>
    <td style="text-align: right; font-weight: bold;"> الملفات الواردة</td>
    <td style="text-align: right; font-weight: bold;"> رابط صفحة الطالب</td>
    <td style="text-align: right; font-weight: bold;"> رقم تعريف الطالب ID</td>
    <td style="text-align: right; font-weight: bold;"> اسم الطالب</td>
    </tr>
    
    <tr>
	<?php  
	$SuperID=2;
	$getData = mysqli_query($conn, "SELECT * FROM student ");
    $rowData = mysqli_fetch_array($getData);?>
	 
	
	<?php 
	print '<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['massage'].'</td>';
	print '<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['StudFName'].'</td>';
	print '<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['link'].'</td>';
	print '<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['StudID'].'</td>';
	print '<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['StudFName'].'</td>';
	?>
    </tr>
    
    </thead>
    </table>
    <div class="col-md-12 animate-box">
						<h2 class="fh5co-uppercase-heading-sm text-center">Form</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-8 col-md-offset-2 animate-box">
						<form action="#" method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name" class="sr-only">Email</label>
									<input placeholder="Name" id="name" type="text" class="form-control input-lg">
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input placeholder="Email" id="email" type="text" class="form-control input-lg">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="gender" class="sr-only">ID</label>
									
									<select name="categories">
									<?php 
									
									while ($rowData)
									{
										echo "<option '>'".$rowData['StudID']."'</option>";
									}
									?>        
									</select>
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea placeholder="Message" id="message" class="form-control input-lg" rows="3"></textarea>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-lg " value="Send">

									<input type="reset" class="btn btn-outline btn-lg " value="Reset">
								</div>	
							</div>
						</form>	
					</div>
					<div class="fh5co-spacer fh5co-spacer-md"></div>

				</div>
			</div>


		</div>
	</body>
</html>
<?php
    mysqli_close($conn);
    require "footer.php";
    ?>