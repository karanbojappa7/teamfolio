 <?php
            include "contact.php";
            $name=$_POST['name'];
            $mail=$_POST['mail'];
            $mess=$_POST['mess'];
            
            
            $mysqli->query("INSERT INTO query (name,mail,mess) VALUES('$name','$mail','$mess') ");
 
if($mysqli->error){
	echo $mysqli->error;
}else{
	echo '1';
}

            
?>