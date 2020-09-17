<!--dbpassword: CeI}q*xUE+#N -->
<?php
  include('../php/function.php');
  $db=connectDB();
  
?>
<?php include('../php/head.php');?>
<?php include("../php/header.php");?>
  <nav>
    <?php include('../php/nav.php');
    visiting("CONTACT");?>
  </nav>
</div>
  <?php
    $valid_post = true;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errormsg="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      if($_POST["password"]!=$_POST["confirm_password"]){
        $valid_post=false;
        $errormsg = "Please make sure those passwords";
      }
      if(strlen($name)<3){
        $valid_post=false;
        $errormsg="Please type your full name";
      }
      if(strlen($password)<4){
        $valid_post=false;
        $errormsg="Please type more than 3";
      }
      if(!$valid_post){
        $name = $_POST["name"];
        $email = $_POST["email"];
      }  
      if($valid_post){
        $sql = "INSERT INTO users (name,email,password,comment) VALUES ('".$_POST['name']."',";
        $sql .= "'".$_POST['email']."',";
        $sql .= "'".sha1($_POST['password'])."',";
        $sql .= "'".$_POST['message']."');";
        $result = mysqli_query($db, $sql);
        if(!$result){
          print("Error description: " . mysqli_error($db));
        }
      }
    } else{
      $valid_post = false;
    } 
    if($valid_post==false){ ?>
      <main>
        <h1>Q&A</h1>
        <h1>Please fill out the Form</h1>
        <form action="form.php" method="POST">
        Name: <input type='text' name="name" value="<?php echo $name ?>" required><br/>
        Your Email: <input type='email' name='email' value="<?php echo $email ?>" required><br/>
        Password: <input type='password' name='password' required><br/>
        Confirm Password: <input type='password' name='confirm_password' required><br/>
        <div> Message:</div>
        <textarea name="message" rows="10" cols="100" required></textarea><br/>
        <input type="submit" value="Send">
        </form>
        <h2><?php echo $errormsg; ?></h2>
        <?php } else{ ?>
        <h1>!!!Complete!!!</h1>
        <h2> <?php echo $_POST["name"],','; ?> </h2>
        <h2>Thank you for sending me a message</h2>
      </main>
    <?php } ?>
<?php  include('../php/footer.php'); ?>
