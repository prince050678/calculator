<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator app using php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container my-3 p-3 shadow">
    <h2 style="text-transform: uppercase; text-align: center">Calculator app using php</h2>
    <form class="form" action="" method="post">
First Number: <input class="form-control" style="text-align: center" type="text" name="number1">
Second Number: <input class="form-control" style="text-align: center" type="text" name="number2"><br>
Operation:
    <select class="form-control" style="text-align: center" name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select><br>
  <input class="form-control bg-info" style="text-transform:uppercase" type="submit" value="Calculate">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = floatval($_POST['number1']);
    $num2 = floatval($_POST['number2']);
    switch ($_POST['operator']) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $errorMessage = "Error: Division by zero.";
            }
            break;
        default:
            $errorMessage = "Invalid operation.";
    }
    if (!isset($errorMessage)) {
        echo "<h3 style='text-align: center; color:blue'>Result= $result</h3>";
    } else {
        echo "<p>$errorMessage</p>";
    }
}
?>