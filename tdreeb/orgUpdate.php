<?php
    require "header.php";
    include 'config.php';

   # $logged = $_SESSION["username"];
   # $orgID = $_SESSION["id"];
	$orgID=1;
    if (isset ($_POST['submit'])) {
        
        @$ID=$_POST['ID'];
        @$name=$_POST['name'];
        @$city=$_POST['city'];
        @$email=$_POST['email'];
        @$phone=$_POST['phone'];
        @$training=$_POST['training'];
        @$workfield=$_POST['workfield'];
        @$website=$_POST['website'];

        $getData = mysqli_query($conn, "SELECT * FROM oraganzation WHERE OrgID = '$orgID'");
        $rowData = mysqli_fetch_array($getData);
        
        if($ID != $logged){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >يجب أن تحدث المنظمة بالرقم التعريفي الخاص بك</p>';
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من ادخال الايميل بشكلٍ صحيح</p>';
        }else if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من رابط موقع المنظمة</p>';
        }else{
            $sql = "UPDATE oraganzation SET `OrgName` = '$name', `City` = '$city', `OrgEmail` = '$email', `OrgPhoneNO` = '$phone', `Workfield` = '$workfield', `Trainingrecruitment` = '$training', `WebsiteLink` = '$website' WHERE `OrgID` = ".$rowData['OrgID'].";";
        
            $insert = mysqli_query($conn, $sql);
            if($insert){
                echo "<script> alert('تم تحديث معلومات المنظمة'); </script>" ;
                print'<meta http-equiv="refresh" content="0; URL=org.php">';
            }
        }
    }
    

?>


			<div class="fh5co-spacer fh5co-spacer-md"></div>

			<!-- Responsive Tabs -->
			<div class="container">
			   
			   
<div  style="float:center; align:center;">
<?php
       
print '<form method="post"  action="orgUpdate.php">

<table class="table table-striped">
<thead>

<tr>
<td style="color:#94CDDE;"><input type="text" value="'.$rowData['AdminID'].'" name="ID" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">الرقم التعريفي لمُضيف المنظمة</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" value="'.$rowData['OrgName'].'" name="name" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">اسم المنظمة </td>
</tr>


<tr>
<td style="color:#94CDDE;"><input type="text" value="'.$rowData['City'].'" name="city" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">المدينة </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" value="'.$rowData['OrgEmail'].'" name="email" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">الإيميل </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" value="'.$rowData['OrgPhoneNO'].'" name="phone" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">رقم الجوال </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" value="'.$rowData['Trainingrecruitment'].'" name="training" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right; font-weight: bold;">التدريب الميداني </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" value="'.$rowData['Workfield'].'" name="workfield" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">مجال العمل </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" value="'.$rowData['WebsiteLink'].'" name="website" size="25" style="text-align: right;"class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">رابط الموقع </td>
</tr>

<tr>
<td colspan="2"><a href="org.php" class="btn btn-primary btn-lg " style="font-weight: bold;">إلغاء</a>
<input type="submit" name="submit" value="تحديث" class="btn btn-primary btn-lg " style="font-weight: bold;"></td>
</tr>
</table>
</form>';
?>
</div>
			   

					 <div class="fh5co-spacer fh5co-spacer-lg"></div>
                    </div>
		
<?php
    mysqli_close($conn);
	require "footer.php";
?>