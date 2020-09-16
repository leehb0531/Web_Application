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
  $result = mysqli_query($db, $sql);
  if(!$result){
    print("Error description: " . mysqli_error($db));
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('../php/head.php');?>
</head>
<nav>
  <?php include('../php/nav.php');
  visiting("CONTACT");?>
</nav>
<body>
  <?php
    $valid_post = true;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $errormsg="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){ 
      if(strlen($name)<3){
        $valid_post=false;
        $errormsg="Please type your full name";
      }
      if(!$valid_post){
        $name = $_POST["name"];
        $email = $_POST["email"];
      } ?> 
    <?php } else{
      $valid_post = false;
    
     } ?>

    <?php if($valid_post==false){ ?>
      <h1>Q&A</h1>
      <h1>Please fill out the Form</h1>
      <form action="form.php" method="POST">
      Name: <input type='text' name="name" value="<?php echo $name ?>" required><br/>
      Your Email: <input type='email' name='email' value="<?php echo $email ?>" required><br/>
      <div> Message:</div>
      <textarea name="message" rows="10" cols="100" required></textarea><br/>
      <input type="submit" value="Send">
      </form>
      <h2><?php echo $errormsg; ?></h2>
      <?php } else{ ?>
      <h1>!!!Complete!!!</h1>
      <h2> <?php echo $_POST["name"],','; ?> </h2>
      <h2>Thank you for sending me a message</h2>
    <?php } ?>

</body>

<?php  include('../php/footer.php'); ?>
