<!DOCTYPE html>
<?php
    require "header.php";
    include 'config.php';
    ?>
	<?php 
		$SuperID=2;
    if (isset ($_POST['submit'])) {
      
        @$email=$_POST['email'];
		@$officeNO=$_POST['officeNO'];
        @$password=$_POST['password'];
        @$newpassword=$_POST['newpassword'];
        
        $getData = mysqli_query($conn, "SELECT * FROM supervisor WHERE SuperID = '$SuperID'");
        $rowData = mysqli_fetch_array($getData);
		$x= $rowData['supPassword'];
        
        if($password != $x){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >كلمة المرور القديمة غير صحيحة </p>';
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من ادخال الايميل بشكلٍ صحيح</p>';
        }
        else{
            $sql = "UPDATE supervisor SET `supEmail` = '$email', `OfficeNO` = '$officeNO', `supPassword` = '$newpassword' WHERE `SuperID` = ".$rowData['SuperID'].";";
        
            $insert = mysqli_query($conn, $sql);
            if($insert){
                echo "<script> alert('تم تحديث معلوماتك'); </script>" ;
                print'<meta http-equiv="refresh" content="0; URL=SUPERVISOR.php">';
            }
        }
    }
    

?>

	
		<div id="fh5co-main">
			<div class="container">

<form method="post" action="updateSupervisorProfile.php">
<table class="table table-striped">
<thead>

<?php  
	$SuperID=2;
	$getData = mysqli_query($conn, "SELECT * FROM supervisor WHERE SuperID = '$SuperID'");
    $rowData = mysqli_fetch_array($getData); 
	print '
	<tr>
	<td style="color:#94CDDE;"><input type="text" value="'.$rowData['supEmail'].'" name="email" size="25" style="text-align: right;" class="form-control input-lg"></td>
	<td style="text-align: right;  font-weight: bold;">الإيميل </td>
	</tr>
	
	<tr>
	<td style="color:#94CDDE;"><input type="text" value="'.$rowData['OfficeNO'].'" name="email" size="25" style="text-align: right;" class="form-control input-lg"></td>
	<td style="text-align: right;  font-weight: bold;">رقم المكتب</td>
	</tr>
	
	<tr>
	<td style="color:#94CDDE;"><input type="password" value="'.$rowData['supPassword'].'" name="email" size="25" style="text-align: right;" class="form-control input-lg"></td>
	<td style="text-align: right;  font-weight: bold;">كلمة المرور القديمة </td>
	</tr>
	
	<tr>
	<td style="color:#94CDDE;"><input type="password" value="'.$rowData['supPassword'].'" name="email" size="25" style="text-align: right;" class="form-control input-lg"></td>
	<td style="text-align: right;  font-weight: bold;"> كلمة المرور الجديدة </td>
	</tr>
	'
	?>
	

<td colspan="2"><a href="index.php" class="btn btn-primary btn-lg " style="font-weight: bold;">إلغاء</a>
<input type="submit" name="SignIn" value="تحديث" class="btn btn-primary btn-lg " style="font-weight: bold;"></td>
</tr>

</thead>
</table>
</form>

<br/>
<br/>

<table class="table">
    <thead>
    <tr>
    <td style="text-align: right; font-weight: bold;"> رابط صفحة الطالب</td>
    <td style="text-align: right; font-weight: bold;"> رقم تعريف الطالب ID</td>
    <td style="text-align: right; font-weight: bold;"> اسم الطالب</td>
    </tr>

    <tr>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">www.tadreb.********.com</td>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">1234****</td>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">اسم الطالب</td>
    </tr>
    </thead>
    </table>
    
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