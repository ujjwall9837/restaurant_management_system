<?php
// signup

$showerror = false;
$showalert = false;
require_once "connectdb.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['cusName']) && !empty($_POST['cusNumber']) && !empty($_POST['cusAddress'])) {

        $cusName = $_POST['cusName'];
        $cusEmail = $_POST['cusEmail'];
        $cusAddress = $_POST['cusAddress'];
        $cusNumber = $_POST['cusNumber'];
        $cusPassword = $_POST['cusPassword'];
        $cusconfirmPassword = $_POST['cusconfirmPassword'];

        $query = "INSERT INTO `customer` (`Name`, `email`, `Address`, `Contact_no`, `password`, `cpassword`)
        VALUES ('$cusName', '$cusEmail', '$cusAddress', '$cusNumber', '$cusPassword', '$cusconfirmPassword');";

        $result = mysqli_query($conn, $query);
        if ($result) {
            $showalert = true;
        }
    }
}
else {
    $showerror = 'One or more field is empty';
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
            <li><a href="customerlogin.php">Login</a></li>
        </ul>
    </nav>

    <?php
    if ($showalert) {
        echo '<label>
            <input type="checkbox" class="alertCheckbox" autocomplete="off" />
            <div class="alert info">
                <span class="alertClose">X</span>Successfully registered. You can login now
            </div>
        </label>';
    }
    ?>

    <section class="register" id="register">
        <h2 style="margin-top: 80px;">Register with us</h2>
        <form action="customerregister.php" method="post" class="container">
            <div>
                <label for="name">Name: </label>
                <input type="text" name="cusName" id="name" required>
            </div>
            <div>
                <label for="emailId">Email: </label>
                <input type="email" name="cusEmail" id="emailId" required onkeyup="emailValidate()">
            </div>
            <p id="e1"> </p>
            <div>
                <label for="pass">Password: </label>
                <input type="password" name="cusPassword" id="pass" required>
            </div>
            <div>
                <label for="cpass">Confirm Password: </label>
                <input type="password" name="cusconfirmPassword" id="cpass" required onkeyup="passValidate()">
            </div>
            <p id="e2"> </p>
            <div>
                <label for="contactno">Contact Number: </label>
                <input type="text" name="cusNumber" id="contactno" onkeyup="numValidate()" required>
            </div>
            <p id="e3"> </p>
            <div>
                <label for="address">Address: </label>
                <input type="text" name="cusAddress" id="address">
            </div>
            <button type="submit">Register</button>
        </form>
    </section>

</body>

</html>