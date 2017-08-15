<?php
    require "header.php";
    include 'config.php';
?>
		<div id="fh5co-main">
			<div class="container">


<table class="table table-striped">
<thead>
<?php  
	$StudID=3;
	$getData = mysqli_query($conn, "SELECT * FROM student WHERE StudID = '$StudID'");
    $rowData = mysqli_fetch_array($getData);
		
	?>

<tr>
<?php print '
	<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['StudEmail'].'</td>'
	; ?>
<td style="text-align: right; font-weight: bold;">: الايميل</td>

</tr>


<tr>
<?php print '
	<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['StudPhoneNo'].'</td>'
	; ?>
<td style="text-align: right;  font-weight: bold;">: رقم الجوال</td>
</tr>


<tr>
<?php print '
	<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['university'].'</td>'
	; ?>
<td style="text-align: right;  font-weight: bold;">: الجامعة</td>
</tr>

<tr>
<?php print '
	<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['college'].'</td>'
	; ?>
<td style="text-align: right;  font-weight: bold;">: الكلية</td>
</tr>

<tr>
<?php print '
	<td style="text-align: right; font-weight: bold; color:#94CDDE;">'.$rowData['section'].'</td>'
	; ?>
<td style="text-align: right;  font-weight: bold;">: القسم</td>
</tr><br/>
</thead>
</table>
<a href="updateStudentProfile.php" class="btn btn-primary btn-lg " style="font-weight: bold;">تحديث</a>

<br/>
<br/>

<table class="table">
    <thead>
    <tr>
    <td style="text-align: right; font-weight: bold;">  رابط صفحة المشرف</td>
    <td style="text-align: right; font-weight: bold;">  ID رقم معرف المشرف</td>
    <td style="text-align: right; font-weight: bold;"> اسم المشرف</td>
    </tr>

    <tr>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">www.tadreb.********.com</td>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">1234****</td>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">اسم المشرف</td>
    </tr>
    
    <tr>
    <td colspan="3" style="text-align: right; font-weight: bold;"> اختر ملف للتحميل</td>
    </tr>
    </thead>
    </table>
    
    <div align="right">
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="upload">
    <input type="submit" name="submit" value="أرسل" class="btn btn-primary btn-lg ">
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
