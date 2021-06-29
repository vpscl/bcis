<?php

if(isset($_POST['btn_save'])){
include "../../db_conn.php";
$res_id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$purpose=$_POST['purpose'];
$date_issued=$_POST['date-issued'];
$cedula=$_POST['cedula'];
$cedula_issued_at=$_POST['cedula-issued'];
$cedula_date=$_POST['cedula-date'];
$sex=$_POST['sex'];
$civil_status=$_POST['civil_status'];
$r_image_url=$_POST['orig_pic'];
$new_date_issued_day = date("jS", strtotime($date_issued));
$new_date_issued_month_year = date("F Y", strtotime($date_issued));
$new_cedula_date = date("F j, Y", strtotime($cedula_date)); 

if($_POST['abc']=="abcd"){
  $sql= "INSERT INTO `barangay_clearance`(
    `resident_id`, 
    `name`, 
    `address`, 
    `purpose`, 
    `date_issued`, 
    `cedula_number`, 
    `cedula_place`, 
    `cedula_date`, 
    `url_image`) 
    VALUES (
    '$res_id',
    '$name',
    '$address',
    '$purpose',
    '$date_issued',
    '$cedula',
    '$cedula_issued_at',
    '$cedula_date',
    '$image_url'
    )";
    mysqli_query($conn,$sql);
}
else{
  $sql= "INSERT INTO `barangay_clearance`(
    `resident_id`, 
    `name`, 
    `address`, 
    `purpose`, 
    `date_issued`, 
    `cedula_number`, 
    `cedula_place`, 
    `cedula_date`, 
    `url_image`) 
    VALUES (
    '$res_id',
    '$name',
    '$address',
    '$purpose',
    '$date_issued',
    '$cedula',
    '$cedula_issued_at',
    '$cedula_date',
    '$r_image_url'
    )";
    mysqli_query($conn,$sql);
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barangay Clearance</title>
    <link rel="icon" type="image/x-icon" href="../../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../../css/brgy-certs.css" />
  </head>
  <body>
    <div class="canvas">
      <img class="header" src="../../img/cert-header.png" alt="" />
      <div class="text">
        <h1>BARANGAY CLEARANCE</h1>
        <span class="br"></span>
        <span class="br"></span>
        <span class="br"></span>
        <p>
          <b>TO WHOM IT MAY CONCERN:</b>
          <span class="br-md"></span>
          This is to <b><u>CERTIFY</u></b> that
         <b><?php echo $sex ?> <?php echo $name?></b>,
         <?php echo $civil_status?>, and with a Resident Certificate No.
          <b><?php echo $cedula ?></b>
          issued at <b><?php echo $cedula_issued_at ?></b> on <b><?php echo $new_cedula_date ?></b> is a
          resident of
          <b><?php echo $address ?></b>.
          <span class="br"></span>
          This is to certify further that the said person has
          <b><u>NO DEROGATORY RECORD</u></b> filed in this office. This
          <b><u>CERTIFICATION</u></b> is upon being issued the request of the
          above named person in connection with <?php 
                if($sex=="Ms."){
                        echo "her";
                    }
                else if($sex=="Mrs."){
                        echo "her";
                    }
                else if($sex=="Mr."){
                        echo "his";
                    }
          ?> application for
          <b><?php echo $purpose ?></b> and for whatever legal purposes it may serve
          <?php 
                if($sex=="Ms."){
                        echo "her";
                    }
                else if($sex=="Mrs."){
                        echo "her";
                    }
                else if($sex=="Mr."){
                        echo "him";
                    }
          ?>
           best.
          <span class="br"></span>
          Issued this  <b><?php echo $new_date_issued_day ?></b> day of  <b><?php echo $new_date_issued_month_year ?></b> at Barangay
          Dadiangas North, General Santos City.
        </p>
        <span class="br"></span>
        <div class="thumb">
          <div class="img-box">

            <img src="<?php
           if(!empty($_POST['abc'])){
              echo $image_url;
            }
            else echo $r_image_url;

            ?>" alt="" />
          </div>

          <div class="box">
            <p>LEFT</p>
          </div>

          <div class="box">
            <p>RIGHT</p>
          </div>
        </div>

        <div class="sig">
          <p>Signature of Applicant over Printed Name</p>
        </div>

        <span class="br"></span>
        <span class="br"></span>
        <div class="bottom">
          <div class="kap">
            <p class="kap-name">
              <span class="k-name">HON. RENIEL A. GONATO</span>
              <br />
            </p>

            <p class="k-pos">
              Punong Barangay
              <br />
              Barangay Dadiangas North
              <br />
              General Santos City
            </p>
          </div>

          <p class="seal">Not valid without dry seal</p>
        </div>

        
        <div class="buttons" style="position:absolute; bottom: -2.5rem; left:20rem;">
        <button class="print" id="printbutton" onclick="printpage()"
        style="padding:.5rem 1rem; background: #f64242; color:white; border:none; cursor:pointer; margin:0 .5rem;">
        Print</button>
        
        <button class="back" id="backbutton" type="button" onclick="history.back();"
        style="padding:.5rem 1rem; background: #01497c; color:white; border:none; cursor:pointer;">Back</button>
        </div>
        
        <script>
        function printpage() {
        
        var printButton = document.getElementById("printbutton");
        
        printButton.style.visibility = 'hidden';
        backbutton.style.visibility = 'hidden';
        
        window.print()
        printButton.style.visibility = 'visible';
        backbutton.style.visibility = 'visible';
        document.location.href ='../certificates.php';
    }
        </script>
        </div>

      </div>
    </div>
  </body>
</html>
  