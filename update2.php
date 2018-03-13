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
                    $pass=$_POST['pass2'];
                    $pass1=sha1($_POST['pass2']);

                    $update="UPDATE 6470users SET PASSWORD_HASH='$pass1' WHERE USERNAME = '$user'";
                    $check="SELECT * FROM 6470users WHERE USERNAME = '$user'";
                    $result = mysqli_query($conn,$check);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $count = mysqli_num_rows($result);

                    if ($count == 1) {
                        mysqli_query($conn,$update);
                        session_start();
                        $_SESSION['username']=$user;
                        setcookie ("username",$user,time()+ (10 * 365 * 24 * 60 * 60));
                        setcookie ("password",$pass,time()+ (10 * 365 * 24 * 60 * 60));
                        echo "<div class='login100'><center><h1 style='color: green'><strong>Successfully changed your password!!<br>Login now <br><a href='view.php' class='btn btn-primary'>Login</a></strong></h1></center></div>";

                    } else {
                        echo "<div class='login100'><center><h1 style='color: red'><strong>Incorrect username!!<br>Try again. <br><a href='forgot.php' class='btn btn-primary'>Login</a></strong></h1></center></div>";
                    }


                }
                ?>

            </div>
        </div>
    </div>
    
<?php include 'foot.php' ?>