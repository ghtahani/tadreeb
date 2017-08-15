<?php
	require "header.php";
    include 'config.php';

        
        if(isset($_POST['submit'])){
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            
            if(empty($user)){
                print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" > تأكد من ادخال اسم المستخدم او الايميل</p>';
            }else if(empty($pass)){
                print '<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من ادخال كلمة المرور</p>';
            }else{
                $getData = mysqli_query($conn, "SELECT AdminID, Admpassword FROM admin WHERE AdminID = '$user' and Admpassword = '$pass'");
                $getData1 = mysqli_query($conn, "SELECT StudEmail, StudPassword FROM student WHERE StudEmail = '$user' and StudPassword = '$pass'");
                $getData2 = mysqli_query($conn, "SELECT supEmail, supPassword FROM supervisor WHERE supEmail = '$user' and supPassword = '$pass'");
                
                $rowData = mysqli_fetch_array($getData);
                $rowData1 = mysqli_fetch_array($getData1);
                $rowData2 = mysqli_fetch_array($getData2);
                
                if( count($rowData) > 0 || count($rowData1) > 0 || count($rowData2) > 0 ) {
                    $_SESSION['username'] = $user;
                    echo "<script> alert('مرحبا بك من جديد'); </script>" ;
                    print'<meta http-equiv="refresh" content="0; URL=index.php">';
                } else {
                    print'<p align="center" style="color:red;font-size:10px;font-family:tahoma;font-weight:lighter;" >تأكد من صحة المعلومات</p>';
                }
                mysqli_close($conn);
            }}

?>
 <div class="col-md-8 col-md-offset-2 animate-box">

<form method="post"  action="login.php"  style= "padding: 50px 0px 50px 80px;" >
<table class="table table-striped">
<thead>
<tr>
<td style="color:#94CDDE;"><input type="text" name="user" size="40" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right; font-weight: bold;">: اسم المستخدم</td>
</tr>


<tr>
<td style="color:#94CDDE;"><input type="text" name="pass" size="40" style="text-align: right;" class="form-control input-lg"></td>
<td style="text-align: right; font-weight: bold;">: كلمة المرور</td>
</tr>

<tr>
<td colspan="2"><input type="submit" name="submit" class="btn btn-primary btn-lg " value="دخول "></td>
</tr>
</table>
</form>

</div>

<?php
    require "footer.php";
?>