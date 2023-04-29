
<?php

require_once 'CardType.php';
require_once 'Item.php';
require_once 'Order.php';
require_once 'OrderStatus.php';
require_once 'Payment.php';
require_once 'User.php';


// creating empty objects to use through out the site
$user = new User(0,"","","","","");
$item = new Item(0,0,"", 0, "");
$order = new Order(0,0,"", OrderStatus::IN_PROCESS);
$payment = new Payment("","",0,CardType::MASTERCARD);


