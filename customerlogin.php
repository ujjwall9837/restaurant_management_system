<?php
// login

$login = false;
$showalert = false;
require_once "connectdb.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['cusNamel'];
    $email = $_POST['cusEmaill'];
    $password = $_POST['cusPasswordl'];

    if($email == 'admin@gmail.com' && $password="12345")
    {
        header('location: adminlogin.php');
    }
    $sql = "SELECT * FROM `customer` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num === 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        header("location: customerorder.php");
    } else {
        $showalert = "Invalid credentials";
    }
} else {
    $showalert = "Invalid credentials";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
    <link rel="stylesheet" href="css/styleCustomer.css">
    <script src="js/validate.js"></script>
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">Sagar Ratna</div>
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Categories</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="index.php">Contact</a></li>
            <li><a href="customerregister.php">Register</a></li>
        </ul>
    </nav>

    <?php
    if ($login) {
        echo '<label>
            <input type="checkbox" class="alertCheckbox" autocomplete="off" />
            <div class="alert info">
                <span class="alertClose">X</span>Successfully logged in
            </div>
        </label>';
    }
    ?>

    <section class="login" id="login">
        <h2>Login</h2>
        <form action="customerlogin.php" method="post" class="container">
            <div>
                <label for="name">Name: </label>
                <input type="text" name="cusNamel" id="name" required>
            </div>
            <div>
                <label for="emailId">Email: </label>
                <input type="email" name="cusEmaill" id="emailId" required onkeyup="emailValidate()">
            </div>
            <p id="e1"> </p>
            <div>
                <label for="pass">Password: </label>
                <input type="password" name="cusPasswordl" id="pass" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </section>

</body>

</html>