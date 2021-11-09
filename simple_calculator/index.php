<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Calculator</title>
  <link rel="stylesheet" href="main.css">
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];

$result = '';

if (is_numeric($first_num) && is_numeric($second_num)) {
  switch ($operator) {
    case "Add":
      $result = $first_num + $second_num;
      break;
    case "Subtract":
      $result = $first_num - $second_num;
      break;
    case "Multiply":
      $result = $first_num * $second_num;
      break;
    case "Divide":
      $result = $first_num / $second_num;
  }
}

?>

<body>
  <div class="container">
    <div class="calc">

      <!-- This would be easier (and cheaper) with JavaScript. -->

      <h1>Simple Calculator Program</h1>
      <form method="post">
        <label for="first_num">First Number</label>
        <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" />

        <label for="second_num">Second Number</label>
        <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" />

        <label for="result">Result</label>
        <input readonly="readonly" name="result" value="<?php echo $result; ?>">


        <input type="submit" name="operator" value="Add" />
        <input type="submit" name="operator" value="Subtract" />
        <input type="submit" name="operator" value="Multiply" />
        <input type="submit" name="operator" value="Divide" />
      </form>
    </div>
  </div>

</body>

</html>
