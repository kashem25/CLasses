
<?php 
session_start();


include('connetion.php');


if(isset($_POST['sign_up']))
{
    $user=$_POST['username'];
    $password=$_POST['password'];
    $dof=$_POST['dof'];
    $full_name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $sql="INSERT INTO user (Name,User_name,Password,Gender,Email,Date_of_Birth) VALUES('$user','$full_name','$password','$gender','$email','$dof')";
    $stmt=mysqli_query($con,$sql);
    if($stmt)
    {
        header("location:index.php");
    }
else
{
    echo "false";
}

    
}

if(isset($_POST['login']))
{
    $username=($_POST['username']);
    $password=($_POST['password']);
    
    $sql="SELECT * FROM user WHERE User_name='$username' AND Password='$password'";
    
    $stmt=mysqli_query($con,$sql);
    if($stmt)
    {
        
          $_SESSION["loginmessage"]="Welcome to our Service";
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        
           header('location:index.php');
    }
    else
    {
        $_SESSION['message']="Please provide valid username and password";
        header('location:loginmessage.php');
    }
    
}
if(isset($_GET['username']))
{
    session_destroy();
    header('location:index.php');
}
    





?>