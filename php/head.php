<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Keywords" content="profile">
<meta name='author' content="Hongbin Lee">
<meta http-equiv="refresh" content="180">
<title>Hongbin's Playground</title>
<script defer src="https://kit.fontawesome.com/6a3c487225.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/index.css">
<link rel="shortcut icon" href="#">
<!--dbpassword: CeI}q*xUE+#N -->
<?php
  function connectDB(){
    $db = mysqli_connect("localhost", "leehb_portfolio_user", "CeI}q*xUE+#N", "leehb_portfolio");
    return $db;
  }
  $db = connectDB();
  $sql = "INSERT INTO users (name,email,comment) VALUES ('".$_POST['name']."',";
  $sql .= "'".$_POST['email']."',";
  $sql .= "'".$_POST['message']."');";
  print $sql;
  $result = mysqli_query($db, $sql);
  if(!$result){
    print("Error description: " . mysqli_error($db));
  }
?>