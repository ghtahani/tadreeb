<?php
    require "header.php";
    include 'config.php';

    $logged = $_SESSION["username"];

    if (isset ($_POST['submit'])) {
        
        @$ID=$_POST['ID'];
        @$name=$_POST['name'];
        @$city=$_POST['city'];
        @$email=$_POST['email'];
        @$phone=$_POST['phone'];
        @$training=$_POST['training'];
        @$workfield=$_POST['workfield'];
        @$website=$_POST['website'];

        
        if($ID != $logged){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >يجب أن تضيف المنظمة بالرقم التعريفي الخاص بك</p>';
        }else if(empty($ID) || empty($name) || empty($training)){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من ادخال كامل الحقول</p>';
        }else if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من ادخال الايميل بشكلٍ صحيح</p>';
        }else if(empty($phone)){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من ادخال رقم الجوال</p>';
        }else if(empty($website) || !preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من رابط موقع المنظمة</p>';
        }else{
            $sql = "INSERT INTO oraganzation (`OrgID`, `OrgName`, `City`, `OrgEmail`, `OrgPhoneNO`, `Workfield`, `Trainingrecruitment`, `Ratio`, `WebsiteLink`, `AdminID`) VALUES ('0', '$name', '$city', '$email', '$phone', '$workfield', '$training', '0', '$website', '$ID')";
        
            $insert = mysqli_query($conn, $sql);
            if($insert){
                echo "<script> alert('تم حفظ معلومات المنظمة'); </script>" ;
            }
        }
    }
    

?>


			<div class="fh5co-spacer fh5co-spacer-md"></div>

			<!-- Responsive Tabs -->
			<div class="container">
			   
			   
<div  style="float:center; align:center;">

<form method="post"  action="addorg.php">

<table class="table table-striped">
<thead>

<tr>
<td style="color:#94CDDE;"><input type="text" name="ID" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">الرقم التعريفي لمُضيف المنظمة</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="name" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">اسم المنظمة </td>
</tr>


<tr>
<td style="color:#94CDDE;"><input type="text" name="city" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">المدينة </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="email" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">الإيميل </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="phone" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">رقم الجوال </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="training" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right; font-weight: bold;">التدريب الميداني </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="workfield" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">مجال العمل </td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="website" size="25" style="text-align: right;"class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">رابط الموقع </td>
</tr>

<tr>
<td colspan="2"><a href="index.php" class="btn btn-primary btn-lg " style="font-weight: bold;">إلغاء</a>
<input type="submit" name="submit" value="إضافة" class="btn btn-primary btn-lg " style="font-weight: bold;"></td>
</tr>
</table>
</form>
</div>
			   

					 <div class="fh5co-spacer fh5co-spacer-lg"></div>
                    </div>
		
<?php
    mysqli_close($conn);
	require "footer.php";
?>