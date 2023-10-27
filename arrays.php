<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
            padding: 20px;
        }
        
        h2 {
            font-size: 34px;
            margin: 0;
        }
        h3 {
            font-size: 24px;
            margin: 0;

        }

        code {
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 4px;
            display: block;
            padding: 10px;
            margin: 10px 0;
            overflow-x: auto;
        }

        pre {
            margin: 0;
        }
    </style>
</head>
<body>
    <h2>PHP  (27/10/2023)</h2>

    <code>
        <?php
        //functions 
        
        echo "<h3>Built in functions</h3>";


$string = "Hello-World!"; // Define a string
$lowercaseString = strtolower($string); // Convert the string to lowercase
$uppercaseString = strtoupper($string); // Convert the string to uppercase
$explode = explode("-", $string); // Split the string
print_r($explode);
echo "<br>";
foreach ($explode as $value) {
    echo $value . "<br>";
}


$number = -5.5;
echo $number . "<br>";

echo abs($number) . "<br>";

echo round($number) . "<br>";
echo "<br>";
echo round(abs($number));
echo "<br>";
echo pow(2, 3) . "<br>"; //this is for exponential expressions

echo sqrt(144) . "<br>";

echo rand(1, 5) . "<br>";//this gives you a random number from the given parameters

$array = ["apple", "banana", "orange"];
$array1 = ["papaya", "coconut", "grapes"];
$array2 = ["kiwi", "mangoes", "superlicious"];
echo count($array) . "<br>";

echo is_array($array) . "<br>";// returns true or false

array_pop($array);
echo "<br>";
echo array_pop($array);
echo "<br>";

array_reverse($array);

array_splice($array,4,6);

//$p = array_merge($array1, $array2);
//print_r($p);
array_splice($array1,1,2,$array2);//replaces the input index range with given array
print_r($array1);

echo "<br>";

echo date("D M, Y H-i-s")  . "<br>";

echo time() . "<br>";

$date = "2023-04-11 12:00:00";

echo strtotime($date) . "<br>";
//_________________________________________________________________________________________________



echo"<br><br><br>";
//user defined functions
echo "<h3>User defined functions</h3>";





function sayhello($name = "eddy") {
    return "Hello " . $name . "!";
}

$test = sayhello(); // Provide a name
echo $test . "<br>";

//to use  variable thats not within the function use the global expression
//_________________________________________________________________________________________________




echo"<br><br><br>";
//scopes
echo "<h3>scopes</h3>";





$test = "Daniel";//this is a local variable

$test = "Daniel"; // This is a local variable

function my_Function_1() {
    global $test; // Access the global variable
    return $test;
}

echo my_Function_1() . "<br>";

function my_Function_2() {
    static $staticvariable = 0; // Static variable
    $staticvariable++;
    return $staticvariable;
}

echo my_Function_2() . "<br>";
echo my_Function_2() . "<br>";

//static variable simply allows you to maintain changes in a variable even when called in another function
//while a super-global simply allows you to make this variable accessible to all


/*class MyClass {
    public $classVar = "Hello, world";

    public function myMethod() {
        echo $this->classVar;
    }
}

$obj = new MyClass();
$obj->myMethod(); // Call the method*/


echo"<br><br><br>";
//Constants
echo "<h3>constants</h3>";



define("PI", 3.14); // Define constants
define("NAME", "Daniel");
define("IS_ADMIN", true);

function test() {
    echo PI . "<br>"; // Use constants
}

test();



 
echo"<br><br><br>";
//loops
echo "<h3>loops</h3>";




for ($i =5; $i <= 10; $i++ ){
    echo "this is iteration number " . $i ."<br>";
}

echo"<br><br><br>";

$test = 5;
while ($test <= 10) {
    echo "this is iteration number " . $test . "<br>";
    $test++; // Increment $test
}




$test = 10;
do {
    echo $test . "<br>";
    $test++;
} while ($test < 10);


$fruits = array("banana", "mango", "ovacado", "apple");
foreach ($fruits as $fruit){
    echo "<ul><li>" . $fruit . "</li></ul>";
}



$fruits = array("banana"=>"yellow", "mango" => "orange", "ovacado" =>"green", "apple" => "red");
foreach ($fruits as $fruit => $color){
    echo "<ul><li> Do you want a " . $fruit ." that is ". $color . "</li></ul>";
}
///EXECRCISE
$main = [array("name1"=>"sensy","name"=>"komagum"),array("name2"=>"chris","name"=>"jotham")];

$main = [
    [
        "name"=>"sensy",
        "age"=>122
    ],
    [
        "name"=>"chris",
        "age"=>125
    ],
    [
        "name"=>"Komagum",
        "age"=>126

    ]
    ];

foreach ($main as $sub){
    // foreach ($sub as $key){
    //     echo $key . "<br>";
        
    // }

    echo "". $sub["name"]. '<br>' ;

}/*
$item1 = $main[0];
$item2 = $main[1];
foreach ($item1 as $nameKey => $nameValue2) {
   echo($nameValue2 . "<br>");
}
foreach ($item2 as $nameKey => $nameValue) {
    echo$nameValue . "<br>";
}*/
        ?>
    </code>
</body>
</html>