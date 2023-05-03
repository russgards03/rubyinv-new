<?php
/* include the class file (global - within application) */
include_once 'classes/class.user.php';
include_once 'classes/class.products.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$product_id = (isset($_GET['product_id']) && $_GET['product_id'] != '') ? $_GET['product_id'] : '';

$product = new Product();
$user = new User();
if(!$user->get_session()){
	header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
?>

<!DOCTYPE html>
<html>
<head>
<div id="padding">

    <title>Ruby's' Bread and Pastries House</title>
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div id="wrapnav">
        <div id="navbar">
            <a href="index.php"><i class="fa fa-fw fa-home"></i>  Home</a>
            <a href="index.php?page=users"><i class="fa fa-fw fa-user"></i>  Users</a>
            <a href="index.php?page=products"><i class="fa fa-fw fa-clipboard"></i>  Products</a>
            <a href="index.php?page=inventory"><i class="fa fa-fw fa-list"></i>  Inventory</a> 
            <a href="index.php?page=release"><i class="fa fa-fw fa-dollar"></i>  Sales</a> 
        </div>
    </div>

    <div id="wrapper">
        <div id="content">
            <?php
            switch($page){
                
                        case 'usersproducts':
                            require_once 'users-products-module/index.php';
                        break; 
                        case 'users':
                            require_once 'users-module/index.php';
                        break; 
                        case 'products':
                            require_once 'products-module/index.php';
                        break; 
                        case 'inventory':
                            require_once 'products-module/index.php';
                        break;
                        case 'release':
                            require_once 'products-module/index.php';
                        break;
                        default:
                            require_once 'main.php';
                        break; 
                    }
            ?>
        </div>
    </div>
</div>
</body>
</html>