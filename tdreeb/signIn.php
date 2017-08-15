<?php
	require "header.php";
    include 'config.php';
    
    @$fname=$_POST['fname'];
    @$lname=$_POST['lname'];
    @$pass=$_POST['pass'];
    @$confPass=$_POST['confPass'];
    @$email=$_POST['email'];
    @$phone=$_POST['phone'];
    @$university=$_POST['university'];
    @$collage=$_POST['collage'];
    @$department=$_POST['department'];
    @$officeNum=$_POST['officeNum'];
    
?>

<div id="fh5co-main">
<div class="container">

<table class="table table-striped" style="width:90%;">

<tr>
<td style="text-align: right;  font-weight: bold;">التسجيل كطالب</td>
<td style="text-align: right;  font-weight: bold;">التسجيل كمشرف</td>
</tr>

<tr>
<td>
<form method="post"  action="index.php">

<table class="table table-striped">
<thead>

<tr>
<td style="color:#94CDDE;"><input type="text" name="fname" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الاسم الأول</td>
</tr>


<tr>
<td style="color:#94CDDE;"><input type="text" name="lname" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الاسم الأخير</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="pass" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: كلمة المرور</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="confPass" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: إعادة كلمة المرور</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="email" value="xxx@xxx.com" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right; font-weight: bold;">: الايميل</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="phone" value="05********" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: رقم الجوال</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="university" size="25" style="text-align: right;"class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الجامعة</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="collage" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الكلية</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="department"size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: القسم</td>
</tr>

<tr>
<td colspan="2"><a href="index.php" class="btn btn-primary btn-lg " style="font-weight: bold;">إلغاء</a>
<input type="submit" name="SignIn" value="تسجيل" class="btn btn-primary btn-lg " style="font-weight: bold;"></td>
</tr>
</table>
</form>
</td>

<td>
<form method="post"  action="index.php">

<table class="table table-striped">
<thead>

<tr>
<td style="color:#94CDDE;"><input type="text" name="fname" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الاسم الأول</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="lname" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الاسم الأخير</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="pass" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: كلمة المرور</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="confPass" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: إعادة كلمة المرور</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="email" value="xxx@xxx.com" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right; font-weight: bold;">: الايميل</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="phone" value="05********" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: رقم الجوال</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="officeNum" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: رقم المكتب</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="collage" size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الكلية</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="department"size="25" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: القسم</td>
</tr>

<tr>
<td colspan="2"><a href="index.php" class="btn btn-primary btn-lg " style="font-weight: bold;">إلغاء</a>
<input type="submit" name="SignIn" value="تسجيل" class="btn btn-primary btn-lg " style="font-weight: bold;"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>

					<div class="fh5co-spacer fh5co-spacer-md"></div>

				</div>
			</div>


		</div>
		<!-- END fhtco-main -->

	<?php
        mysqli_close($conn);
	require "footer.php";
 
?>