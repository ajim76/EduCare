<?php

    if(!isset($_SESSION))
    {
        session_start();
    }



if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: Home.php?loggedinerr=true");

}







?>
<?php
require 'config.php';
 ?>

 <!DOCTYPE html>
 <html style="font-size: 16px;">
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta charset="utf-8">
     <meta name="keywords" content="We Care About Y​our Future., Key Features">
     <meta name="description" content="">
     <title>Home</title>
     <link rel="stylesheet" href="nicepage.css" media="screen">
     <link rel="stylesheet" href="Connect.css" media="screen">
     <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
     <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
     <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
     <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
     <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">




     <script type="application/ld+json">{
 		"@context": "http://schema.org",
 		"@type": "Organization",
 		"name": "",
 		"logo": "images/8.png",
 		"sameAs": []
 }</script>
     <meta name="theme-color" content="#478ac9">
     <meta property="og:title" content="Home">
     <meta property="og:type" content="website">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>



       <?php include 'header.php'; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <h4>Filters</h4>
          <hr>
          <h5 class="text-primary">Location</h5>
          <ul class="list-group overf" style="margin-bottom: 20px;
          border:1px;
          background-color: #E8F9FD;
          height: 300px;
          overflow-x: hidden;
          overflow-y: scroll;">
            <?php
            $sql ="SELECT DISTINCT c_loc FROM sheet1 ORDER BY c_loc";
            $result = $conn->query($sql);
            while($row=$result->fetch_assoc()){
             ?>
             <li class="list-group-item">
               <div class="form-check">
                 <label class="form-check-label">
                   <input type="checkbox" class="form-check-input product_check" value="<?= $row['c_loc']; ?>" id="c_loc"><?= $row['c_loc'] ?>
                 </label>
               </div>
             </li>
           <?php } ?>
          </ul>


          <h5 class="text-primary">Total Fee</h5>
          <ul class="list-group" style="margin-bottom: 20px;
          border:1px;
          background-color: #E8F9FD;">
            <?php
            $sql ="SELECT DISTINCT c_fee_cat FROM sheet1 ";
            $result = $conn->query($sql);
            while($row=$result->fetch_assoc()){
             ?>
             <li class="list-group-item">
               <div class="form-check">
                 <label class="form-check-label">
                   <input type="checkbox" class="form-check-input product_check" value="<?= $row['c_fee_cat']; ?>" id="c_fee_cat"><?= $row['c_fee_cat'] ?>
                 </label>
               </div>
             </li>
           <?php } ?>
          </ul>

          <h5 class="text-primary">University</h5>
          <ul class="list-group overf" style="height: 300px;
          overflow-x: hidden;
          overflow-y: scroll;
          margin-bottom: 20px;
          border:1px;
          background-color: #E8F9FD;">
            <?php
            $sql ="SELECT DISTINCT c_university FROM sheet1 ORDER BY c_university";
            $result = $conn->query($sql);
            while($row=$result->fetch_assoc()){
             ?>
             <li class="list-group-item">
               <div class="form-check">
                 <label class="form-check-label">
                   <input type="checkbox" class="form-check-input product_check" value="<?= $row['c_university']; ?>" id="c_university"><?= $row['c_university'] ?>
                 </label>
               </div>
             </li>
           <?php } ?>
          </ul>

          <!-- dummy.html -->
        </div>
        <div class="col-lg-9">
          <h4 class="text-center" id="textChange">All Colleges</h4>
          <hr>
          <div class="row" id="result" style="display: flex; flex-wrap: wrap;">
            <?php
              get_pro();
             ?>
          </div>
        </div>

      </div>

    </div>
    <script type="text/javascript">
      $(document).ready(function(){

        $(".product_check").click(function(){
          var action ='data';
          var c_loc = get_filter_text('c_loc');
          var c_fee_cat = get_filter_text('c_fee_cat');
          // var c_fee = get_filter_text('c_fee');
          var c_university = get_filter_text('c_university');
          // var Branch1 = get_filter_text('Branch1');
          // var Branch2 = get_filter_text('Branch2');
          // var Branch3 = get_filter_text('Branch3');
          // var Branch4 = get_filter_text('Branch4');

          $.ajax({
            url:'action.php',
            method:'POST',
            data:{action:action ,c_loc:c_loc, c_fee_cat:c_fee_cat ,c_university:c_university },
            success:function(response){
              $("#result").html(response);
              $("#textChange").text("Filtered Result");
            }
          })
        });
        function get_filter_text(text_id){
          var filterData =[];
          $('#'+text_id+':checked').each(function(){
            filterData.push($(this).val());
            });
            return filterData;

        }
      });
    </script>

    <?php include 'footer.php'; ?>
  </body>
</html>
