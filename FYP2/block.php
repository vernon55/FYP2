<?php

require_once("block_io.php");

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$version = 2; // API version
$pin ="alex5568"; //Block_io main pin 
$apiKey = "b593-01d6-4add-3a7f"; //Bitcoin testnet
$block_io = new BlockIo($apiKey, $pin, $version);
$Address = $block_io->get_my_addresses();  //this line is throwing error
print_r($Address);

//$Send = $block_io->withdraw(array('amounts' => '0.00001', 'to_addresses' => '2N3PAfjJHcHVZGGHQ72LmJP1DZ7f6fXuzrX', 'pin' => 'alex5568'));
//print_r($Send);

$SendFees = $block_io->get_network_fee_estimate(array('amounts' => '0.00001', 'to_addresses' => '2N3PAfjJHcHVZGGHQ72LmJP1DZ7f6fXuzrX'));
print_r($SendFees);

$SaveFav = $block_io->archive_address(array('addresses' => '2N3PAfjJHcHVZGGHQ72LmJP1DZ7f6fXuzrX'));
print_r($SaveFav);



//$getNewAddress = $block_io->get_new_address(array());
//var_dump($getNewAddress);

//$getCurrentPrice = $block_io->get_current_price(array());
//var_dump($getCurrentPrice);



//Withdraw

//Show Ammount
?>