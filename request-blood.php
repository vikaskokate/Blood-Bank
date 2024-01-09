<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- <script>
   function validateAge(event) {
      event.preventDefault(); // prevent the form from submitting

      // Get the user's date of birth from the form
      const age  = parseInt(document.getElementById('age').value);
	  const hb  = parseInt(document.getElementById('hb').value);
	  const wt  = parseInt(document.getElementById('wt').value);
	  
      // Check if the user is at least 18 years old
	   if (age < 18 || age="") {
        // Display the validation message
        document.getElementById('age-validation-message').style.display = 'block';
      } else if (hb < 12) {
        // Display the validation message
        document.getElementById('hb-validation-message').style.display = 'block';
      } 
	  else if (wt < 45) {
        // Display the validation message
        document.getElementById('wt-validation-message').style.display = 'block';
      } else {
        // Submit the form
        event.target.form.submit();
		alert("<?php echo "This is a PHP alert!"; ?>");
      }
    }

  </script> -->
  

</head>

<body>
<?php
$active ='';
 include('head.php') ?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">t
        <h1 class="mt-4 mb-3">Request Blood </h1>
      </div>
</div>
<form name="donor" action="admin/save_request_data.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Patient Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="text" name="mobileno" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Hospital Name<span style="color:red">*</span></div>
<div><input type="text" name="hos_name" class="form-control" required></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Patient's Age<span style="color:red">*</span></div>
<div  id="a"><input type="text" id="age" name="age"  class="form-control" required ></div>
<p id="age-validation-message" style="color: red; display: none; ">You are not eligible for blood donation as you must be at least 18 years old.</p>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Gender<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group of patient<span style="color:red">*</span></div>
<div><select name="blood" class="form-control" required>
  <option value=""selected disabled>Select</option>
  <?php
    include 'conn.php';
    $sql= "select * from blood";
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  while($row=mysqli_fetch_assoc($result)){
   ?>
   <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
  <?php } ?>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Doctor's Prescription<span style="color:red">*</span></div>
      <div> <input type="file" name="file" id="file" class="form-control"></div>
    </div>
  </div>
<div class="row">
  <div class="col-lg-4 mb-4">
  <div><button type="submit" name="submit" onclick="" style="background: #0066A2;
	color: white;
	border-style: outset;
	border-color: #0066A2;
	height: 50px;
	width: 100px;
	font: bold15px arial,sans-serif;
	text-shadow: none;">Submit</button></div>
  </div>
</div>
</form>
</div>
  <div class="col-lg-4 mb-4">
    <h6 class="mt-4 mb-3">Already Requested...? <u><a href="admin/request_info.php">Check Status</a>.</u></h6>
  </div>
</div>
<?php include('footer.php') ?>
</div>
</body>
</html>
