<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: customerlogin.php");
}
?>

<?php
$showerror = false;
$showalert = false;
require_once "connectdb.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $foodName = $_POST['foodName'];
        $foodQty = $_POST['foodQty'];

        $sql = "INSERT INTO `order` (Order_details, no_of_items)
        VALUES ('$foodName', '$foodQty')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showalert = true;
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
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">Sagar Ratna</div>
        <ul class="links">
            <li><a href="#home">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert info">
            <span class="alertClose">X</span>Welcome <?php
            echo $_SESSION['name'];
            ?>, Place you order now
        </div>
    </label>

    <section id="categories">
        <div class="categ">
            <h2>Categories</h2>
            <h3>Veg</h3>
            <ul>
                <li>Veggie Burger</li>
                <li>Paneer Pan Pizza(M)</li>
                <li>Red Sauce Pasta</li>
                <li>White Sauce Cheese Pasta</li>
                <li>Veg Hakka Noodles</li>
                <li>Onion and Tomato Pizza(M)</li>
            </ul>
            <h3>Non-Veg</h3>
            <ul>
                <li>Chicken Tikka Pizza(M)</li>
                <li>Chicken Cheese Burger</li>
                <li>Chicken Soup</li>
            </ul>
            <h3>Beverages</h3>
            <ul>
                <li>Iced Tea</li>
                <li>Cold Coffee</li>
            </ul>
        </div>
    </section>

    <?php
    if ($showalert) {
        echo '<label>
            <input type="checkbox" class="alertCheckbox" autocomplete="off" />
            <div class="alert info">
                <span class="alertClose">X</span>Success! Your order has been placed, we will contact you shortly via email.
            </div>
        </label>';
    }
    ?>

    <section class="register" id="register">
        <h2 class="order">Order Now</h2>
        <form action="customerorder.php" method="post" class="container">
            <p class="pandemic">Due to pandemic, only one food per person allowed</p>
            <div>
                <label for="name">Food Name: </label>
                <input type="text" name="foodName" id="name" required>
            </div>
            <div>
                <label for="qty">Quantity: </label>
                <input type="number" name="foodQty" id="qty" required">
            </div>
            <button type="submit">Order</button>
        </form>
    </section>

</body>

</html>