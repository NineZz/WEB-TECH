<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
  <title>Document</title>
  <style>
    body {
      font-family: 'IBM Plex Mono', monospace;
      padding: 50px;
    }
  </style>
</head>

<body>
  <h1>Employee Form</h1>
  <form id="employeeform" action="index.php" method="post">
    <label for="text">ID:</label>
    <input type="text" name="id" /><br>

    <label for="text">Name:</label>
    <input type="text" name="name" /><br>

    <label for="text">Age:</label>
    <input type="text" name="age" /><br>

    <label for="text">Salary:</label>
    <input type="text" name="salary" /><br>

    <label for="text">Address:</label>
    <textarea type="text" name="address"></textarea><br>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>

  <?php
  // Connect to Database 
  class MyDB extends SQLite3
  {
    function __construct()
    {
      $this->open('company.db');
    }
  }

  // Open Database 
  $db = new MyDB();

  // Query process

  // Create a Table using SQL 
  //  $sql =<<<EOF
  //     CREATE TABLE COMPANY
  //     (ID INT PRIMARY KEY     NOT NULL,
  //     NAME           TEXT    NOT NULL,
  //     AGE            INT     NOT NULL,
  //     ADDRESS        CHAR(50),
  //     SALARY         REAL);
  //   EOF;

  //  $ret = $db->exec($sql);
  //  if(!$ret){
  //     echo $db->lastErrorMsg();
  //  }

  /* Connect and Open database */
  if (isset($_POST['submit'])) {
    $em_id = $_POST['id'];
    $em_name = $_POST['name'];
    $em_age = $_POST['age'];
    $em_salary = $_POST['salary'];
    $em_addr = $_POST['address'];

    $sql = <<<EOF
  INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
  VALUES ($em_id, '$em_name', $em_age, '$em_addr', $em_salary );
  EOF;
    $ret = $db->exec($sql);
    if (!$ret) {
      echo $db->lastErrorMsg();
    }
  }
  // SQL SELECT 
  $sql = "SELECT * from COMPANY";
  $ret = $db->query($sql);

  echo "<h1>List of Employees</h1>
  <table class='table'>
   <thead>
     <tr>
       <th scope='col'>ID</th>
       <th scope='col'>Name</th>
       <th scope='col'>Age</th>
       <th scope='col'>Address</th>
       <th scope='col'>Salary</th>
     </tr>
   </thead>
   <tbody>";

  while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    echo "<tr>
      <td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['NAME'] . "</td>";
    echo "<td>" . $row['AGE'] . "</td>";
    echo "<td>" . $row['ADDRESS'] . "</td>";
    echo "<td>" . $row['SALARY'] . "</td>
      </tr>";
  }
  echo "  </tbody>
  </table>";

  // Close database
  $db->close();

  ?>
</body>

</html>