<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Connect to Database 
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('wt-company.db');
        }
    }

    // Open Database 
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

    // Query process 

    // Create a Table using SQL 
    // $sql = <<<EOF
    //     CREATE TABLE COMPANY
    //     (ID INT PRIMARY KEY     NOT NULL,
    //     NAME           TEXT    NOT NULL,
    //     AGE            INT     NOT NULL,
    //     ADDRESS        CHAR(50),
    //     SALARY         REAL);
    // EOF;

    // $ret = $db->exec($sql);
    // if (!$ret) {
    //     echo $db->lastErrorMsg();
    // } else {
    //     echo "Table created successfully<br>";
    // }

    // $em_id = 2;
    // $em_name = "Allen";
    // $em_age = 25;
    // $em_addr = "Texas";
    // $em_salary = 15000.00;

    // $sql = <<<EOF
    //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
    //     VALUES (3, 'Teddy', 23, 'Norway', 20000.00);

    //     INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
    //     VALUES (4, 'Mark', 30, 'Rich-Mond', 65000.00);
    // EOF;

    // $ret = $db->exec($sql);
    // if (!$ret) {
    //     echo $db->lastErrorMsg();
    // } else {
    //     echo "Records created successfully<br>";
    // }

    // $sql = "SELECT * from COMPANY";

    // $ret = $db->query($sql);
    // while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    //     echo "ID = " . $row['ID'] . "<br>";
    //     echo "NAME = " . $row['NAME'] . "<br>";
    //     echo "ADDRESS = " . $row['ADDRESS'] . "<br>";
    //     echo "SALARY = " . $row['SALARY'] . "<br><br>";
    // }
    // echo "Operation done successfully<br>";

    // $em_id = 2;
    // $sql = "DELETE from COMPANY where ID = $em_id;";

    // $ret = $db->exec($sql);
    // if (!$ret) {
    //     echo $db->lastErrorMsg();
    // } else {
    //     echo $db->changes(), " Record deleted successfully<br>";
    // }

    $em_id = 1;

    $sql = <<<EOF
      UPDATE COMPANY set SALARY = 25000.00 where ID=$em_id;
   EOF;

    $ret = $db->exec($sql);
    if (!$ret) {
        echo $db->lastErrorMsg();
    } else {
        echo $db->changes(), " Record updated successfully<br>";
    }

    // Close database
    $db->close();

    ?>
</body>

</html>