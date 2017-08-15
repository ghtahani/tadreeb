<!DOCTYPE html>

<?php
	require "header.php";
    include 'config.php';
    
   #  = $_SESSION["id"];
    
?>


			<div class="fh5co-spacer fh5co-spacer-md"></div>

			<!-- Responsive Tabs -->
			<div class="container">
				
                    
					<!-- Start Slider Testimonial -->
	          
	           <!-- End Slider Testimonial -->
			  <div class="row">
					<div class="col-md-12 animate-box">

	
<?php
     $orgID=1;                       
    $getData = mysqli_query($conn, "SELECT * FROM oraganzation WHERE OrgID = '$orgID'");
    $rowData = mysqli_fetch_array($getData);
    print '<h2 style="float: right;" >'.$rowData['OrgName'].'</h2>
    <div class="fh5co-spacer fh5co-spacer-sm"></div>
    
    <div id="fh5co-tab-feature-center" class="fh5co-tab text-center" style="text-align: right;  font-weight: bold;">
    <ul class="resp-tabs-list hor_1">
	
	 
    <li><i class="fh5co-tab-menu-icon "></i>طرق التواصل</li>
    <li><i class="fh5co-tab-menu-icon "></i>نبذة عن المنظمة</li>
    </ul>
    <div class="resp-tabs-container hor_1">
    
    <div>
    <div class="row">
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">'.$rowData["OrgEmail"].'</p>
    </div>
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">الايميل</p>
    </div>
    
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">'.$rowData["OrgPhoneNO"].'</p>
    </div>
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">رقم التواصل</p>
    </div>
    
    </div>
    </div>
    
    <div>
    <div class="row">
    
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">'.$rowData["City"].'</p>
    </div>
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">المدينة</p>
    </div>
    
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">'.$rowData["Workfield"].'</p>
    </div>
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">مجال العمل</p>
    </div>
    
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">'.$rowData["Trainingrecruitment"].'</p>
    </div>
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">التدريب الميداني</p>
    </div>
    
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;"><a href='.$rowData["WebsiteLink"].'>'.$rowData["OrgName"].'</a></p>
    </div>
    <div class="col-md-6">
    <p style="text-align: right;  font-weight: bold;">الموقع الإلكتروني</p>
    </div>
    
    </div>
    </div>
    
    ';
?>

							</div>
						</div>
					</div>
				</div>

			  <br> <br> <br>

			  	<div class="fh5co-spacer fh5co-spacer-sm"></div>

			  <h2 class="h3" style="float: right;">قيّم المنظمة فضلاً</h2>
			  <br>
			  
		<div class="star-rating">
			<input id="star-5" type="radio" name="rating" value="star-5">
			<label for="star-5" title="5 stars">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-4" type="radio" name="rating" value="star-4">
			<label for="star-4" title="4 stars">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-3" type="radio" name="rating" value="star-3">
			<label for="star-3" title="3 stars">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-2" type="radio" name="rating" value="star-2">
			<label for="star-2" title="2 stars">
					<i class="active fa fa-star" aria-hidden="true"></i>
			</label>
			<input id="star-1" type="radio" name="rating" value="star-1">
			<label for="star-1" title="1 star">
					<i class="active fa fa-star" aria-hidden="true"></i>
				
			</div>
<br/>

<?php
   
    if(!empty($logged)){
        $getData = mysqli_query($con, "SELECT AdminID FROM admin WHERE AdminID = '$logged' ");
        $rowData = mysqli_fetch_array($getData);
        if( count($rowData) > 0 ) {
            print '<form method="post"  action="index.php" >
            <a href="orgUpdate.php" class="btn btn-primary btn-lg " style="font-weight: bold;">تحديث</a>
            <input type="submit" name="delete" value="حذف" class="btn btn-primary btn-lg " style="font-weight: bold;">
            </form>';
        }
    }
    
    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM oraganzation WHERE OrgID = ".$rowData['OrgID'].";";
        $insert = mysqli_query($con, $sql);
        
        if($insert){
            echo "<script> alert('تم حذف معلومات المنظمة'); </script>" ;
        }
    }
?>
			  <div class="row">
					<div class="col-md-12 animate-box">
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
						<h2 class="fh5co-uppercase-heading-sm text-center">التعليقات</h2>
						<div class="fh5co-spacer fh5co-spacer-sm"></div>
					</div>
					<div class="col-md-8 col-md-offset-2 animate-box">
						<form method="post"  action="org.php"  style= "padding: 50px 0px 50px 80px;" >
						
			 
			 <div class="col-md-12">
								<div class="form-group">
									<label for="gender" class="sr-only">Gender</label>
									<input placeholder="الاسم" id="name" type="text" name="name" class="form-control input-lg" >
								</div>	
							</div>
			 
			
			  	<div class="col-md-12">
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea placeholder="اكتب رأيك عن المنظمة هنا" id="message" name="message" class="form-control input-lg" rows="3"></textarea>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									

									<input type="reset" class="btn btn-outline btn-lg " value="مسح">
									<input type="submit" name="submit" class="btn btn-primary btn-lg " value="إرسال">
								</div>	
							</div>
						</form>
						
						
	
						
					</div>
					
				</div>

					
					
<?php
    mysqli_close($conn);
	require "footer.php";
 
?>