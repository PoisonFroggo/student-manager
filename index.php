<?php
//error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'views/layout/header.php';
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 365 * 3;    // 3 yr in sec
session_set_cookie_params($lifetime, '/');
session_start();
//display session ID
echo "Session ID: " . session_id() . "<br>";

// Create a cart array if needed
if (empty($_SESSION['cart'])) { $_SESSION['cart'] = array(); }


// Include temporary database interfaces
require_once('model/temp_db_stuf.php');

//include database functions
require_once('model/initializeDB.php');
//Access the functions for table filling
require_once('model/Students.php');


// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_add_item';
    }
}

// Add or update cart as needed
switch($action) {
    case 'make_student':
        $fn = filter_input(INPUT_POST, 'studentFN');
        $ln = filter_input(INPUT_POST, 'studentLN');
        $dob = filter_input(INPUT_POST, 'dob');
        $email = filter_input(INPUT_POST, 'email');
        echo $fn;
        echo $ln;
        echo $dob;
        echo $email;
        createStudent($fn, $ln, $dob, $email);
        break;
    case 'init_DB':
        createStudentsTable();
        createClassesTable();
        createEnrollmentsTable();
        break;
    case 'add':
        $product_key = filter_input(INPUT_POST, 'productkey');
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        add_item($product_key, $item_qty);
        include('cart_view.php');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cart12'][$key]['qty'] != $qty) {
                update_item($key, $qty);
            }
        }
        include('cart_view.php');
        break;
    case 'show_students':
        include('views/tables/list.php');
        break;
    case 'add_student':
        include('views/tables/add.php');
        break;
    case 'edit_student':
        include('views/tables/edit.php');
        break;
    case 'delete_student':
        include('views/tables/delete.php');
        break;
}
include 'views/layout/footer.php';
?>
