<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    /*
    --REFLECTIONS--
    -I realize I need to work faster and start getting into the code faster; I find myself trying to overprepare when I should just get to it
    -
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