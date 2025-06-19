
<?php
// session_start();
require "../include/database_connect.php";


$email = $_POST['email'];
    $password =$_POST['password'];
    // $password=sha1($password);
    // echo$name."<br/>";
    // echo $email . "<br/>";
    // echo $password . "<br/>";

    // $db_hostname="127.0.0.1";
    // $db_username="root";
    // $db_password="";
    // $db_name="test";

    // sql =" SELECT * FROM users WHERE email ='$email' AND password ='$password'";
    $sql1 = "SELECT * FROM users WHERE email = '$email' AND password ='$password'";
    $result=mysqli_query($conn,$sql1);
    if(!$result){
        echo"something went wrong".mysqli_error($conn);
        exit;
    }
    $row_count = mysqli_num_rows($result);
    
    if($row_count==0){
        echo"login failed inavalid email and password".mysqli_error($conn);
        exit;
    }
else{
    echo"login succesfully";
    
}
?>
    click <a href="/PG_life/dashboard.php">here</a>to continue.

<?php
    mysqli_close($conn);
?>