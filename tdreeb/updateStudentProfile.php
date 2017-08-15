<!DOCTYPE html>
<?php
    require "header.php";
    include 'config.php';
    ?>

            <div id="fh5co-main">
			<div class="container">


<form method="post">
<table class="table table-striped">
<thead>
<tr>
<td style="color:#94CDDE;"><input type="text" name="email" size="40" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right; font-weight: bold;">: الايميل</td>
</tr>


<tr>
<td style="color:#94CDDE;"><input type="text" name="phoneNumber" size="40" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: رقم الجوال</td>
</tr>


<tr>
<td style="color:#94CDDE;"><input type="text" name="university" value="جامعة الأميرة نورة" size="40" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الجامعة</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="collage" value="شبكات الحاسب" size="40" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: الكلية</td>
</tr>

<tr>
<td style="color:#94CDDE;"><input type="text" name="department" value="نظم شبكات" size="40" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right;  font-weight: bold;">: القسم</td>
</tr>
<br/>
<tr>
<td colspan="2"><a href="student.php" class="btn btn-primary btn-lg " style="font-weight: bold;">إلغاء</a>
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
    <td style="text-align: right; font-weight: bold;">  رابط صفحة المشرف</td>
    <td style="text-align: right; font-weight: bold;">  ID رقم معرف المشرف</td>
    <td style="text-align: right; font-weight: bold;"> اسم المشرف</td>
    </tr>

    <tr>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">www.tadreb.********.com</td>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">1234****</td>
    <td style="text-align: right; font-weight: bold; color:#94CDDE;">اسم المشرف</td>
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