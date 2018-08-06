
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
require './SQL.php';
$emailrr=$passwordrr="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["email"])){
        $emailrr="Email is required";
    }else {
        $email = $_POST["email"];
    }
    if(empty($_POST["password"])){
        $passwordrr="Email is required";
    }else {
        $password= $_POST["password"];
    }
    if( $email = $_POST["email"] AND  $password= $_POST["password"]){
        $cheke="SELECT * FROM hoangdb.sqltest WHERE name='$email' AND password='$password'";
        $good= mysqli_query($conn,$cheke);
        $row=mysqli_num_rows($good);
    if($row>0){
    echo $email;
    echo $password;
    }else{
        echo "sigup fasle";
    }
    
    }else  {
        echo $emailrr;
        echo $passwordrr;
    }
   
}
 
?>
    <p><span class="error">* required field</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST">
    
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailrr;?></span>
  <br><br>
  Password: <input type="text" name="password">
     <span class="error">* <?php echo $emailrr;?></span>
  <br><br>
   <input type="submit" name="submit">
    
    </form>
    
</body>
</html>