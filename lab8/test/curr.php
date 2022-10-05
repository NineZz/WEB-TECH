<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $firstnum = $_POST['firstnum'];
    $url = "http://10.0.15.20/lab8/restapis/currencyrate";
    $response = file_get_contents($url);
    $result = json_decode($response);
    if (isset($_POST['submit'])) {
        echo "<form action='curr.php' method='POST'>
        <h1>Currency Converter</h1>
        <label for='Form'>Form :</label>
        <select name='Form' id='form'>
            <option value='00'>---</option>
            <option value='01'>THB</option>
            <option value='02'>JPY</option>
            <option value='03'>CNY</option>
            <option value='04'>SGD</option>
            <option value='05'>USD</option>
        </select>
        <input type='number' id='firstnum' name='firstnum' /><br>
        <label for='To'>To :</label>
        <select name='To' id='to'>
            <option value='00'>---</option>
            <option value='01'>THB</option>
            <option value='02'>JPY</option>
            <option value='03'>CNY</option>
            <option value='04'>SGD</option>
            <option value='05'>USD</option>
        </select>
        <input type='number' id='secondnum' value='" . $firstnum * $result->rates->SGD . "'/><br>
        <button type='submit' name='submit'>Convert</button>
    </form>";
    }
    ?>
</body>

</html>