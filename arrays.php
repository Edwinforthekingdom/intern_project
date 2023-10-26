<?php
$stuff = ["phone", "bag","mouse","airpods"];
array_splice($stuff, 0, 2);


$more_stuff = [
    "johnny" => "phone",
    "danny" => "airplane",
    "kelly" => "car",
    "nelly" => "motor_bike"
];
array_push($stuff, "new_thing");
$more_stuff["i_think"] = "also_new";
print_r ($more_stuff);

$food = [
    array("triangle","circle","square"),
    "donkey",
    "camel"
];
echo $food[0][0];

$vehicles =[
    "land" => array("cars","motorcycles","carts"),
    "water" => array("boats","surf_boards"),
    "air" => array("airplane","jetfighter"),
];

//print_r ($more_stuff);
//print_r ($more_stuff);
//print_r ($stuff);
//print_r ($stuff)
//echo $stuff[1];
//unset($stuff[1]);
//______________________________________________________________________________________________________________________

$string = "this is my string";
echo substr($string, 2, 2);
// echo strlen($string);
// echo strpos($string, "o");
echo str_replace("this","yes", $string);

echo $string
