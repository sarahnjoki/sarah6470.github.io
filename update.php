



<?php 
include 'head.php';

?>  
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                
<?php
require_once('conn.php');
if (isset($_POST['submit'])) {
    $user=$_POST['username'];
    $pass1=sha1($_POST['pass1']);
    $pass2=$_POST['pass2'];

    $update="UPDATE 6470users SET PASSWORD='$pass2' WHERE USERNAME = '$user'";
    $check="SELECT * FROM 6470users WHERE USERNAME = '$user' and PASSWORD_HASH = '$pass1'";
    $result = mysqli_query($conn,$check);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        if ($pass1== $row['PASSWORD_HASH']) {
            mysqli_query($conn,$update);
            echo "<div class='login100'><center><h1 style='color: green'><strong>Successfully changed your password!!<br>Login now <br><a href='view.php' class='btn btn-primary'>Login</a></strong></h1></center></div>";
        }else {
            $error1="Incorrect Password";
            echo $error1;
        }
    } else {
        $error="Incorrect username or password";
        echo $error;
    }


}
?>
            </div>
        </div>
    </div>
    
<?php include 'foot.php' ?>