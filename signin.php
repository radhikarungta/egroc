<?php  
if(!empty($_POST['uname']) && !empty($_POST['psw'])) 
{  
    $user=$_POST['uname'];  
    $pass=$_POST['psw'];  
  
    $con=mysqli_connect("localhost", "root", "", "db") or die(mysql_error());  
    //mysql_select_db('db') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE email='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location:home.html");  
    }  
    } else {  
    echo '<script>alert("Invalid Username Or Password")</script>';
    }  
  
} 
else 
{  
    echo '<script>alert("All fields are required!")</script>';  
}  
  
?>