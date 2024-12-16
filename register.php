<?php 

// Include the database connection file
include 'login_db.php';

// Check if the signup form is submitted
if(isset($_POST['signUp'])){

    // Retrieve user input from the signup form
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    // Encrypt the password using md5 hash function
    $password=md5($password);

    // Check if the email already exists in the database
     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{

        // Insert the user data into the database
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){

                // Redirect to login page after successful signup
                header("location: login.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

// Check if the signin form is submitted
if(isset($_POST['signIn'])){

   // Retrieve user input from the signin form
   $email=$_POST['email'];
   $password=$_POST['password'];

   // Encrypt the password using md5 hash function
   $password=md5($password) ;
   
   // Check if the email and password match in the database
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){

    // Start a session and store user email in session variable
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];

    // Redirect to login page after successful signin
    header("Location: login.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>