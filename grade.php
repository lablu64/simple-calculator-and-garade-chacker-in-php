<?php
   function grade_func(int $marks){
    $grade = $marks;

    if($marks > 100 || $marks < 0){
        $grade='invaild Number';
    }
    elseif($marks >= 90){
        $grade ='A+';  
    }
    elseif($marks >= 80){
        $grade = 'A';
    }
    elseif($marks >= 70){
        $grade = 'A-';
    }
    elseif($marks >= 60){
        $grade = 'B';
    }
    elseif($marks >= 50){
        $grade = 'C';
    }
    elseif($marks >= 40){
        $grade = 'D';
    }
    elseif($marks >= 33){
        $grade = 'E';
    }
    
    else{
        $grade ='you are fail';
    }
    
    return $grade;
}
   
   if (isset($_POST['marks_btn'])) {
     $marks= $_POST['marks'];

    }

    
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<style>
    .fff{
        margin: 107px 0px;
        border: 1px solid #996969;
        padding: 21px 72px;
        background: #448b8f;
        border-radius: 13px;
    }
</style>
<body>
  
<div class="container">
  	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8 fff">
  		  <h4 style="text-align: center; margin-top: 20px; margin-bottom: 20px; font-family: Georgia, serif; color: #000; font-size: 25px;">Student Grade Checking System</h4>
  			<form method="POST" action="<?php echo($_SERVER['PHP_SELF'])?>">
  				<input type="number" name="marks" class="form-control" required="" placeholder="Enter Your Mark"><br>
  				  <div class="container">
  					<div class="row">
  						<div class="col-md-6">
  				          <button type="submit" name="marks_btn" class="btn btn-primary"  style="width: 100%;">CHECK GRADE</button>
  				        </div>
  				       
  			        </div>
  		          </div>
                 
                 <?php 
                   
                     if (isset($_POST['marks_btn'])) {
                     

                 ?>
  		          <h5 style="margin-top: 20px;">Your Grade is: <?php echo grade_func($marks)?></h5>
  		          <h5 style="margin-top: 20px;">Your mark are: <?php echo $marks?></h5>

  		        <?php 
                   
                   }
                   
  		        ?>
  		   
  			</form>
  		</div>
  		<div class="col-md-2"></div>
  	</div>
  </div>
</body>
</html>