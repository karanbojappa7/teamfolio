<?php 

$conform = mysqli_connect('localhost','root','');
mysqli_select_db($conform,'team');
$qform = "select * from query";
$queryform = mysqli_query($conform,$qform);

if(mysqli_num_rows($queryform) > 0){
    while($resultform = mysqli_fetch_array($queryform)){
        ?>

    <tr>
        <td><?php echo $resultform['id'] ?></td>
        <td><?php echo $resultform['name'] ?></td>
        <td><?php echo $resultform['mail'] ?></td>
        <td><?php echo $resultform['mess'] ?></td>

</tr>

<?php
    }
}

?>





