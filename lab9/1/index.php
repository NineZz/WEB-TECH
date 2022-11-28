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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Document</title>
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      padding: 10px;
    }
  </style>
</head>

<body>

  <?php
  // Connect to Database 
  class MyDB extends SQLite3
  {
    function __construct()
    {
      $this->open('customers.db');
    }
  }

  // Open Database 
  $db = new MyDB();

  // SQL SELECT 
  $sql = "SELECT * from customers";

  $ret = $db->query($sql);

  echo "<table class='table'>
   <thead>
     <tr>
       <th scope='col'>ID</th>
       <th scope='col'>Name</th>
       <th scope='col'>Address</th>
       <th scope='col'>Phone</th>
       <th scope='col'>Email</th>
     </tr>
   </thead>
   <tbody>";
  while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    $numberofid = $row['CustomerId'];
    echo "<tr>
            <td>" . $row['CustomerId'] . "</td>";
    echo "<td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['Phone'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>
      </tr>";
  }
  echo "  </tbody>
  </table>";

  if (isset($_POST['delete'])) {
    $sql = "DELETE from customers where CustomerId = $numberofid;";
    $ret = $db->exec($sql);
  }

  // Close database
  $db->close();
  ?>

  <form action="" method="POST">
    <button type='submit' class='btn-default' name='delete'>Delete last row</button>
  </form>
</body>

</html>