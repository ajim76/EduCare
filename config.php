

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $conn = new mysqli("localhost" , "root" , "" , "newdb");
      if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
      }
      ?>
    <?php

    function get_pro(){
      global $conn;

    $sql="SELECT * FROM sheet1 ";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {

        $img1=$row['c_img1'];
        $name=$row['c_name'];
        $loc=$row['c_loc'];
        $fee=$row['c_fee'];
        $status=$row['c_status'];
        $degree=$row['c_degree'];
        $brochure=$row['c_brochure'];
        $code=$row['c_code'];
        $rank=$row['rank'];
   echo "<div class='col-md-3 mb-2'>
     <div class='card-deck' style='display: flex; flex: 1;'>
       <div class='card border-secondary'>
         <img src='College_Images/$img1' class='card-img-top' style='height: 150px;'>
         <div class='text-wrap'>
           <h6 class='text-light bg-info text-centre rounded p-1 name_div' style='text-align: center;
           height: 80px;
           overflow:hidden;
           text-overflow: ellipsis;'>$name</h6>
         </div>
       <div class='card-body '>
         <h5 class='card-title text-danger'>Location : $loc</h5>
         <p class='card-text'>Fee :$fee<br>
            Status:$status<br>
            Degree:$degree<br>
         </p>
         <a href='College_brochure/$brochure' download='Brochure-College code: $code' class='btn btn-danger btn-block'>Brochure</a>
         <a href='details.php?rank=$rank' class='btn btn-success btn-block'>More Info</a>
         </div>
       </div>
     </div>
   </div>";
 }


}
    ?>
  </body>
</html>
