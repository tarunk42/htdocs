
   <?php
    // error_reporting(E_ALL);
    // ob_start();
    // session_start();
    include('dbconnection.php');
    
    $name = $_POST["uname"]; 
    $password = $_POST["psw"]; 
    
    echo $sql = "select * from Users where Username='$name' and Password = '$password'";
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    
    echo $username = $row['Username'];


    // exit();
    if($username)
    {
        $_SESSION['Username'] = $name;
        header("Location: Welcome.html");
        exit;
    }
    else
    {
        $msg = "Invalid Username or Password";
        header("Location: index.php?msg=$msg");
        exit;

    }
    // ob_end_flush();
    exit;

    ?>

