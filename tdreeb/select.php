<?php 
 include 'config.php';
class select {
public function selectID ($SuperID){

			$getData = mysqli_query($conn, "SELECT * FROM student where SuperID='$SuperID'  ");
			$rowData = mysqli_fetch_array($getData);
			while ($rowData){
				print '<option>'.$row["StudID"].'</option>';
			}	
				
}}
										?>
									