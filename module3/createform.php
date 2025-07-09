<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //variables for form data and error messages
    $name = $email = $topic = $message = '';
    $name_error = $email_error = $topic_error = $message_error = '';
    $success_message = '';

    //Ssubmission detection and data cleaning
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['Submit'])) {
        $name = trim($_POST['$name']);
        $email = trim($_POST['$email']);
        $topic = trim($_POST['$topic']);
        $message = trim($_POST['$message']);
    }

    //Validation flag
    $validation_passed = true;

    //Validate name field
    if (empty($name)) {
        $name_error = "Please enter your name.";
        $validation_passed = false;
    } elseif (strlen($name) <2 ) {
        $name_error = "Name must be over 2 characters long.";
        $validation_passed = false;
    }

    //Validate email field
    if (empty($email)) {
        $email_error = "Please enter an email address";
        $validation_passed = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please enter a valid email address";
        $validation_passed = false;
    }

    //Validate top field
    if (empty($topic)) {
        $topic_error = "Please enter a topic for your message";
        $validation_passed = false;
    }
    
    /*
    --REFLECTIONS--
    -I realize I need to work faster and start getting into the code faster; I find myself trying to overprepare when I should just get to it
    */
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
       <input type="text" name="name" placeholder="Name; i.e John Smith"> 
       <input type="email" name="email" placeholder="JohnSmith123@yahoo.com">
       <input type="text" name="topic" placeholder="I.E., Life Finds a Way.">
       <input type="textarea" name="message" placeholder="...Well, there it is.">
       <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>