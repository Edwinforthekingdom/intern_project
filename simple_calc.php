<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href = "assets\support.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body style = "backround-color: grey; font-size: xxx-l;">
    <br><br><br><br><p style = "font-size: 50px; font-family: 'press Start 2P';">simple calculator</p>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "POST">
        <input placeholder = "number_1" class = "thing" type = "number" name = "number_1">
        <select placeholder = "operator" class = "thing" type = "text" name = "operator">
            <option value = "plus"> + </option>
            <option value = "subtract"> - </option>
            <option value = "multiply"> * </option>
            <option value = "divide"> / </option>
        </select>
        <input placeholder = "number_2" class = "thing" type = "number" name = "number_2">
        <button type = "submit">calculate</button>
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = filter_input(INPUT_POST,"number_1", FILTER_SANITIZE_NUMBER_FLOAT);
    $num2 = filter_input(INPUT_POST,"number_2", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);

    // Error handlers
    $errors = false;
    if (empty($num1) || empty($num2) || empty($operator)) {
        echo "<p class = 'result'> fill in all fields </p>" ;
        $errors = true;
    
    }
    if ( !is_numeric($num1) || !is_numeric($num2)) {
        echo "<p class = 'result'> write only numbers</p>";
        $errors = true;

    }
    if (!$errors) {
        $value = 0; 
      switch ($operator) {
        case"add":
            $value = $num1 + $num2;
            break;
        case "subtract":
            $value = $num1 - $num2;
            break;
        case"multiply":
            $value = $num1 * $num2;
            break;
        case"divide":
            $value = $num1 / $num2;
            break;
        default:
            echo"<p class = 'result'>something went horribly wrong</p>";
      }  
      echo "<p class = 'result'>Result = ". $value . "</p>";
    }
}
?>
</body>
</html> 