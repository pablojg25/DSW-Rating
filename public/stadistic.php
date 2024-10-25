<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $fileName = '..\data\2024_10_25_15_15.csv';
    $content = file_get_contents($fileName);
    $rates = explode(',', $content);
    array_pop($rates);
    // $count =
    // $total = 
    // $avg = $total / $count; 
  ?>
</body>
</html>