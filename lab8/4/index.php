<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $url = "http://10.0.15.20/lab8/restapis/10countries";
    $response = file_get_contents($url);
    $result = json_decode($response);

    foreach ($result as $country) {
        echo "<div style='font-size: 20px; display: flex; padding-top: 30px; padding-left: 10px;'>";
        echo "<div style='width: 20vw;'>";
        echo "Name : <b>" . $country->name . "</b><br>";
        echo "Capital : " . $country->capital . "<br>";
        echo "Population : " . $country->population . "<br>";
        echo "Region : " . $country->region . "<br>";
        echo "Location : " . $country->latlng[0] . " " . $country->latlng[1] . "<br>";
        echo "Borders : ";
        foreach ($country->borders as $border) {
            echo $border . " ";
        }
        echo "</div>";
        echo "<img style='margin-top: 30px; height: 100px; width: 150px;' src='" . $country->flag . "'>";
        echo "</div>";
    }
    ?>
</body>

</html>