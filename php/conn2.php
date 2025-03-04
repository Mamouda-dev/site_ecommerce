<?php require("./conn1.php") ?>
<?php
$email=$_POST['emails'];
$password=$_POST['passwords'];
$sub= $_POST["sub"];
if(isset($sub)){
    try{
        $stmt=$conn->prepare("SELECT*FROM clients WHERE emails =:emails , passwords =:passwords");
        $stmt->bindParam(':emails',$email);
         $stmt->bindParam(':passwords',$password);
         $stmt->execute();
         echo"cool";

         
    } catch (PDOException $e) {
        echo "email or password are false" ;
    }
}
    