

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="auth.css">
    <title>Covid</title>

  
</head>
<body>

<?php

$conn = new mysqli('localhost', 'root', '', 'brief 01');
// 


$count=" SELECT * FROM `images` ";

$result=mysqli_query($conn,$count);

$c= mysqli_num_rows($result);

$rand= rand(3, $c) - 3;

$query=" SELECT * FROM `images` WHERE `id` > '$rand' LIMIT 3 ";

// $query=" SELECT * FROM `images` WHERE DATE(jour) = CURDATE() order by rand() limit 3  " ;



$resulta=mysqli_query($conn,$query);

?>

<div class="big_container">

 <div class="w3-container w3-center w3-animate-zoom">
<h4 class="text-center h4"  style="     color: antiquewhite;font-family: serif; font-size: 40px;margin-left: 28px;" >Restaurant La buvette </h4>

</div>

<div class="inputs_div">
<div class= "container col-md-10 big-box">
<form action="" method="post" enctype="multipart/form-data">
<table class="table" algin="center" border="3px" style="width:300px;color:white; line-height:30px;">
 
    <tr>
      <th  colspan="4"><h2>Menu du jour</h2></th>
      </tr>
      <tr>
   
      <th >Nom_Repas</th>
      <th >Rapas_jour</th>
      <th >Prix_Repas</th>
     </tr>

     <?php
         while($rows = mysqli_fetch_assoc($resulta))
         {
     ?>
           <tr>
              
               <td><?php echo $rows['name_prdouit']; ?></td>
           
               <td><?php echo '<img src="data:pict/;base64, '.base64_encode($rows['image_produit']).'" >'; ?></td>
               <td><?php echo $rows['prix_produit']; ?></td>
           </tr>
         
      <?php
         }
      ?>

</table>  
</form>

<div class="form-group">
                  <button type="submit" class="btn btn-secondary btn-block" name="commande" ><a href="home.php" style=" text-decoration: none; color:white;">Commander</a></button>
                  <br>

                </div>
</div>
</div>
</div>



           
</body>
</html>