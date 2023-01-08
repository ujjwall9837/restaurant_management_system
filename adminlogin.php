<?php
// login

$login = false;
$showalert = false;
require_once "connectdb.php";

$sql = "SELECT * FROM chef ORDER BY name";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM cashier ORDER BY name";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM bill ORDER BY price";
$result3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT * FROM manager ORDER BY name";
$result4 = mysqli_query($conn, $sql4);

$sql5 = "SELECT * FROM waiter ORDER BY name";
$result5 = mysqli_query($conn, $sql5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
    <link rel="stylesheet" href="css/styleAdmin.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            margin-left: -5px;
            margin-right: -5px;
        }

        .column {
            float: left;
            width: 50%;
            padding: 5px;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
            border: 1px solid black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
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
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="row">
        <div class="column">
            <table>
                <tr>
                    <th>Name</th>
                </tr>
                <?php
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['Name']; ?></td>
                    </tr>
                <?php
                }
                ?>
        </div>
    </div>
    <h1 style="margin-top: 100px;">Chef Details</h1>

    <div class="row">
        <div class="column">
            <table>
                <tr>
                    <th>Name</th>
                </tr>
                <?php
                while ($rows = $result2->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['name']; ?></td>
                    </tr>
                <?php
                }
                ?>
        </div>
    </div>
    <h1>Cashier Details</h1>

    <table>
        <tr>
            <th>Bill No</th>
            <th>Price</th>
            <th>Order Details</th>
        </tr>
        <?php
        while ($rows = $result3->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $rows['Bill_no']; ?></td>
                <td><?php echo $rows['Price']; ?></td>
                <td><?php echo $rows['Order_details']; ?></td>
            </tr>
        <?php
        }
        ?>
        <h1>Bill Details</h1>
        <table>
            <tr>
                <th>Manager Id</th>
                <th>Name</th>
                <th>Conact No</th>
            </tr>
            <?php
            while ($rows = $result4->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $rows['manager_ID']; ?></td>
                    <td><?php echo $rows['Name']; ?></td>
                    <td><?php echo $rows['Contact_no']; ?></td>
                </tr>
            <?php
            }
            ?>
            <h1>Manager Details</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
                <?php
                while ($rows = $result5->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                    </tr>
                <?php
                }
                ?>
                <h1>Waiter Details</h1>

</body>

</html>