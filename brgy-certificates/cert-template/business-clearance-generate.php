<?php 
$name=$_POST['name'];
$bus_location=$_POST['bus_location'];
$bus_name=$_POST['bus_name'];
$date_issued=$_POST['date-issued'];
$clearance_number=$_POST['clearance_number'];
$bus_type=$_POST['bus_type'];
$date = date("F j, Y", strtotime($date_issued)); 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Clearance</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" /> <link rel="icon" type="image/x-icon" href="../../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../../css/brgy-certs.css" />
    

  </head>
  <body>
    <div class="canvas">
      <img class="header" src="../../img/cert-header.png" alt="" />

      <div class="text2">
        <h1>BARANGAY BUSINESS CLEARANCE</h1>
        <br />
        <p>
          Date Issued <span class="tab"> <b>: <?php echo $date  ?></b></span>
          <br />
          Clearance No<b> : <?php echo $clearance_number  ?></b>
          <br />
          <br />
          <br />
          <b>TO WHOM IT MAY CONCERN:</b>
          <br />
          <br />
          <br />
        </p>

        <p class="text-center">
          This Business Clearance is hereby granted to:
          <br />
        </p>

        <div class="pink">
          <p><?php echo $name  ?></p>
        </div>

        <p class="text-center">
          Owner/proprietor of
          <br />
        </p>

        <div class="pink">
          <p><?php echo $bus_name  ?></p>
        </div>

        <p class="text-center">
          located at
          <br />
          <br />
          <span class="prk"
            >PUROK <?php echo $bus_location  ?>, BARANGAY DADIANGAS NORTH
            <br />
            GENERAL SANTOS CITY</span
          >
          <br />
          <br />
          to operate and engage in the business of
          <br />
        </p>

        <div class="pink">
          <p><?php echo $bus_type  ?></p>
        </div>

        <p class="text-justify">
          Further, this clearance is being issued to the abovementioned person
          provided that the provisions of Laws, Rules and Regulations which are
          in force and other ordinances of this Barangay pertaining to the
          abovementioned business shall be complied with.
          <br />
          <br />
          <span class="pink-text"
            >Note: However, that this certification is subject for CANCELLATION
            for any cause violative of existing rules and regulations and
            ordinances of this Barangay. This Barangay Clearance is VALID UPON
            PAYMENT OF THE CORRESPONDING FEES.</span
          >
        </p>

        <p class="text-justify">
          <br />
          <br />
          <br />
          <b><i>Records Verified by:</i></b>
          <br />
          <br />
          <br />
          <b>GRACE B. ALFANTA</b>
          <br />
          <span>Barangay Secretary</span>
          <br />
          <br />
          <br />
          <b><i>Approved by:</i></b>
          <br />
          <br />
          <br />
          <b>HON. RENIEL A. GONATO</b>
          <br />
          <span>Punong Barangay</span>
        </p>


        <div class="thumb">
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
      
        <div class="buttons" style="position:absolute; bottom: -3.5rem; left:20rem;">
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
    </div>
  </body>
</html>
