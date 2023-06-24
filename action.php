<?php
  require 'config.php';
  if(isset($_POST['action'])){
    $sql = "SELECT * FROM sheet1 WHERE c_loc !=''";

    if(isset($_POST['c_loc'])){
      $c_loc = implode("','" , $_POST['c_loc']);
      $sql .="AND c_loc IN('".$c_loc."')";
    }
    if(isset($_POST['c_fee_cat'])){
      $c_fee_cat = implode("','" , $_POST['c_fee_cat']);
      $sql .="AND c_fee_cat IN('".$c_fee_cat."')";
    }
    // if(isset($_POST['c_fee'])){
    //   $c_fee = implode("','" , $_POST['c_fee']);
    //   $sql .="AND c_fee IN('".$c_fee."')";
    // }
    if(isset($_POST['c_university'])){
      $c_university = implode("','" , $_POST['c_university']);
      $sql .="AND c_university IN('".$c_university."')";
    }
    // if(isset($_POST['Branch1'])){
    //   $branch1 = implode("','" , $_POST['Branch1']);
    //   $sql .="AND Branch1 IN('".$branch1."')";
    // }
    // if(isset($_POST['Branch2'])){
    //   $branch2 = implode("','" , $_POST['Branch2']);
    //   $sql .="AND Branch2 IN('".$branch2."')";
    // }
    // if(isset($_POST['Branch3'])){
    //   $branch3 = implode("','" , $_POST['Branch3']);
    //   $sql .="AND Branch3 IN('".$branch3."')";
    // }
    // if(isset($_POST['Branch4'])){
    //   $branch4 = implode("','" , $_POST['Branch4']);
    //   $sql .="AND Branch4 IN('".$branch4."')";
    // }



    $result = $conn->query($sql);
    $output='';
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        $img1=$row['c_img1'];
        $name=$row['c_name'];
        $loc=$row['c_loc'];
        $fee=$row['c_fee'];
        $status=$row['c_status'];
        $degree=$row['c_degree'];
        $brochure=$row['c_brochure'];
        $code=$row['c_code'];
        $rank=$row['rank'];
        $output .='<div class="col-md-3 mb-2">
          <div class="card-deck " style="display: flex; flex: 1; height:">
            <div class="card border-secondary ">
              <img src="College_Images/'.$img1.'" class="card-img-top" style="height: 150px;" alt="">
              <div class="text-wrap">
                <h6 class="text-light bg-info text-centre rounded p-1 name_div" style="text-align: center;
                height: 80px;
                overflow:hidden;
                text-overflow: ellipsis;">'.$name.'</h6>
              </div>
            <div class="card-body ">
              <h4 class="card-title text-danger" style="
              height: 80px;
              overflow:hidden;
              text-overflow: ellipsis;">Location : '.$loc.'</h4>
              <p class="card-text" style="
              height: 80px;
              overflow:hidden;
              text-overflow: ellipsis;">Fee :'. $fee.'<br>
                 Status:'. $status.'<br>
                 Degree:'.$degree.'<br>
              </p>
              <a href="College_brochure/'. $brochure.'" download="Brochure-College code: '. $code.'"class="btn btn-danger btn-block">Brochure</a>
              <a href="details.php?rank='.$rank.'" class="btn btn-success btn-block">More Info</a>
              </div>
            </div>
          </div>
        </div>';
      }
    }
    else{$output = "<h3>No Colleges Found!</h3>";
    }
    echo $output;
  }
?>
