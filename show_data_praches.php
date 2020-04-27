<?php


include('connect.php');


//table show

if (isset($_POST['tb'])) {

    $q = $conn->query("SELECT * FROM purchases WHERE cod = 1");

    while ($row = $q->fetch()) {

        echo '<tr>';
        echo '<td>' . $row['supplier_name'] . "</td>";
        echo '<td>' . $row['product_name'] . "</td>";
        echo '<td>' . $row['price_product'] . "</td>";
        echo '<td>' . $row['quantity'] . "</td>";
        echo '<td>' . $row['date_time'] . "</td>";
        echo '</tr>';
    }
}


//select show

if (isset($_POST['del'])) {



    $q = $conn->query('SELECT date_time FROM purchases WHERE cod = 1');

    while ($row = $q->fetch()) {


        echo  '<option>' . $row['date_time'] . '</option>';
    }
}

//get data in box update
if (isset($_POST['cheack_update'])) {

    $date_time_1 = $_POST['sel_data'];

    $q = $conn->query("SELECT supplier_name , product_name , price_product , quantity FROM purchases WHERE date_time = '$date_time_1'");

    while ($row = $q->fetch()) {

        if ($_POST['cheack'] == 1) {
            echo $row['supplier_name'];
        }
        if ($_POST['cheack'] == 2) {
            echo $row['product_name'];
        }
        if ($_POST['cheack'] == 3) {
            echo $row['price_product'];
        }
        if ($_POST['cheack'] == 4) {
            echo $row['quantity'];
        }
    }
}

//end get data in box update
