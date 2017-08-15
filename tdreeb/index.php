<?php
    
	require "header.php";
    include 'config.php';
?>


<h5 style="float: right"> اختر المجال التدريبي </h5>
<br>

		                                                       
		 
		<form style="float: right" action="select.php" method="post"	>
			 <div class="col-md-12">
								<div class="form-group">
									<label for="gender" class="sr-only">Gender</label>
            <select>
                <option  value="-"> لايوجد</option>
                     
                <option value="econmic" > اقتصاد</option>-</option>
                
                 <option value="Engineer" > هندسة</option>-</option>
                 
                   <option value="IT" > تكنولوجيا المعلومات</option>-</option>
                   
                     <option value="Network" > شبكات</option>-</option>
                     
                     <option value="business" > ادارة اعمال</option>-</option>
            </select>
      <br><br>
      <input type="submit" name="submit" value="استعراض"/>
      <br> <br>
		</form>
      <br>
      <form method="post" action="search.php">
	<input type="text" name="major" placeholder="ابحث عن منظمة"/>
	<br><br>
	<input type="submit" name="submit" value="إبحث"/>
	<a href="res.php">صفحة نتائج البحث </a>
	
	
      </form>
		</div>
	</div>
	


		 <a style="float: right" href="org.php">صفحة كل منظمة  </a>

<?php

    mysqli_close($conn);
	require "footer.php";
 
?>