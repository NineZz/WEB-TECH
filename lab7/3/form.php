<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .red {
            color: red;
        }

        body {
            font-size: 1vw;
            margin: 1% 12%;
        }
    </style>
</head>

<body>

    <?php
    $namecolor = '';
    $addrcolor = '';
    $agecolor = '';
    $procolor = '';
    $radiocolor = '';

    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $profession = $_POST['profession'];
    isset( $_POST['residential'] ) ? $radio = $_POST['residential'] : $radio = '';

    echo "
    <form id='registform' action='form.php' method='post'>
        <div class='container'>
            <h1>Member Registration</h1>
            <div class='form-group'>
                <label for='text'>Name:</label>
                <input type='text' id='name' class='form-control' placeholder='Enter Name' name='name' value='$name'/>";

    if (strlen($name) < 5) {
        echo "<label class='red'>**ชื่อต้องมากกว่า 5 ตัวอักษร**</label><br>";
    }
    echo "
                <label for='text'>Address:</label>
                <input type='text' id='address' class='form-control' placeholder='Enter Address' name='address' value='$address'/>";

    if (strlen($address) < 5) {
        echo "<label class='red'>**ที่อยู่ต้องมากกว่า 5 ตัวอักษร**</label><br>";
    }

    echo "
                <label for='text'>Age:</label>
                <input type='number' id='age' class='form-control' placeholder='Enter Age' name='age' value='$age'/>";

    if ($age < 10) {
        echo "<label class='red'>**อายุต้องมากกว่า 10 ปี**</label><br>";
    }

    echo "
                <label for='text'>Profession:</label>
                <input type='text' id='profession' class='form-control' placeholder='Enter Profession' name='profession' value='$profession'/>";
    if (strlen($profession) < 5) {
        echo "<label class='red'>**อาชีพต้องมากกว่า 5 ตัวอักษร**</label><br>";
    }
    echo "
                <br><label for='text'>Residential status:</label><br>";
    
    if($radio == 'resident'){
        echo "
        <input type='radio' class='radio' id='residential' name='residential' value='resident' checked=''>
        <label>Resident</label>
        <input type='radio' class='radio' id='residential' name='residential' value='non-resident'>
        <label>Non-Resident</label><br>";
    }
    else if($radio == 'non-resident'){
        echo "
        <input type='radio' class='radio' id='residential' name='residential' value='resident'>
        <label>Resident</label>
        <input type='radio' class='radio' id='residential' name='residential' value='non-resident' checked=''>
        <label>Non-Resident</label><br>";
    }
    else if($radio == ''){
        echo "
        <input type='radio' class='radio' id='residential' name='residential' value='resident'>
        <label>Resident</label>
        <input type='radio' class='radio' id='residential' name='residential' value='non-resident'>
        <label>Non-Resident</label><br>
        <label class='red'>**Residential status ต้องเลือกอย่างใดอย่างหนึ่ง**</label><br>";
    }
    echo "
                <input type='submit' class='btn-default' id='submit' value='Submit'>
            </div>
        </div>
    </form>";
    ?>
</body>

</html>