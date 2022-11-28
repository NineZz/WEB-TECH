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
</head>

<body>
    <?php
    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
    $response = file_get_contents($url);
    $result = json_decode($response);
    $random = (rand(1, 30));

    if ($random < 10) {
        $day = "2022-09-0$random";
    } else {
        $day = "2022-09-$random";
    }
    echo "<h1>ข้อมูล Covid ของวันที่ $day</h1>";
    echo "<table class='table'>
        <thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>จังหวัด</th>
                <th scope='col'>ผู้ติดเชื้อ</th>
                <th scope='col'>เสียชีวิต</th>
                <th scope='col'>ยอดผู้ป่วยสะสม</th>
            </tr>
        </thead>
        <tbody>";
    $i = 1;
    foreach ($result as $case) {
        if (($case->txn_date) == $day) {
            echo "<tr> 
                <th scope='row'>$i</th>";
            echo "<td> $case->province </td>";
            echo "<td> $case->new_case </td>";
            echo "<td> $case->new_death</td>";
            echo "<td>$case->total_case </td>";
            echo "</tr>";
            $i++;
        }
    }
    echo "</tbody>
        </table>";
    ?>
</body>

</html>