<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $ansfloor = '';
  if (isset($_POST['submit'])) {
    $url = "http://10.0.15.20/lab8/restapis/currencyrate";
    $response = file_get_contents($url);
    $result = json_decode($response);

    $rate = $result->rates;
    $rateex1 = $_POST['formsel'];
    $rateex2 = $_POST['tosel'];
    $input = $_POST['frominp'];
    $variable1 = $rate->$rateex1;
    $variable2 = $rate->$rateex2;
    $ans = ($input / $variable1) * $variable2;
    $ansfloor = round($ans, 2);
  }
  ?>
  <h1>Curency Converter</h1>
  <div class="container">
    <form action="" method="POST">
      <div class="form-group">
        <label for="fromsel">From:</label>
        <select name="formsel">
          <option name="THB" value="THB">THB</option>
          <option value="JPY">JPY</option>
          <option value="CNY">CNY</option>
          <option value="SGD">SGD</option>
          <option value="USD">USD</option>
        </select>
        <input type="number" name="frominp" placeholder="Enter Number" value="0" required />
        <div class="form-group">
          <label for="toval">TO:</label>
          <select name="tosel">
            <option value="THB">THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
          </select>
          <?php
          echo "<input type='number' name='toinp' placeholder='Ouput' value='$ansfloor' readonly/>";
          ?>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>