<?php
if(isset($_POST['submit'])){
        $name=$_POST['fullname'];
        $number=$_POST['mobileno'];
        $email=$_POST['emailid'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $blood_group=$_POST['blood'];
        $address=$_POST['address'];
        $hb=$_POST['hb'];
        $wt=$_POST['wt'];
        $conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");

        if ($age < "18" || $age="") {
                echo "<script>alert('Enter Valid Age'); location.href='donate_blood.php'</script>";
        } else if ($hb < "12") {
                // Display the validation message
                echo "<script>alert('Enter Valid Hb'); location.href='donate_blood.php'</script>";
        } else if ($wt < "45") {
                // Display the validation message
                echo "<script>alert('Enter Valid weight'); location.href='donate_blood.php'</script>";
        } else {
                        $sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address, himoglobin,weight) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}','{$hb}','{$wt}')";
                $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
                if($result){
                        echo '<script>alert("Successfully Registered"); location.href="donate_blood.php"</script>';
                }
                mysqli_close($conn);
        }
}
 ?>
