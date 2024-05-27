<?php

include 'db.php';

?>

<?php

if(isset($_POST['sendmsg'])){
   
    $name = $_POST['user'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $query = "INSERT INTO restaurant_contact(user, email, subject, message)
    VALUES('$name', '$email', '$subject', '$message')";

    $run = mysqli_query($conn, $query);
    
    if($run){
        echo "<script>alert('Thanks for Review our Taste');window.location.href='restaurant.php';</script>";
    }
    else{
        echo "Something Went Wrong Please Check your Network or another thing, THANKS!!!";
    }
}

?>