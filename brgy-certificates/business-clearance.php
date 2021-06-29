<?php
include "../db_conn.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Certificate Issuance System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/clear.js"></script>
</head>

<body>
    <main>
      

        <section>
            <div class="header">
                <h1>Business Clearance</h1>
                <a href="certificates.php">
                    <button class="back-btn"><span>Back</span></button>
                </a>
            </div>

            <div class="content">
                <div class="brgy-cert">


                    
                    <div class="cert-infos"
                    style="margin-top:.5rem;">

                    <form id="" action="cert-template/business-clearance-generate.php" method="post">
                        

                    <div class="cert-info">
                    <h2 style="margin: 1.5rem 0;">Please fill in all fields.</h2>
                    </div>
                        <div class="cert-info">
                            <h5>Name:</h5>
                            <input id="name" type="text" name="name" required=""/>
                        </div>

                        <div class="cert-info">
                            <h5>Business Location:</h5>
                            <textarea id="address" rows="2" name="bus_location" required=""></textarea>
                        </div>

                        <div class="cert-info">
                            <h5>Business Name:</h5>
                            <input id="purpose" type="text" name="bus_name" required=""/>
                        </div>

                        <div class="cert-info">
                            <h5>Date Issued:</h5>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date-issued" required=""/>
                        </div>
                        
                        <div class="cert-info">
                            <h5>Clearance No:</h5>
                            <input id="cedula-no" type="text" name="clearance_number" required=""/>
                        </div>

                        <div class="cert-info">
                            <h5>Business Type:</h5>
                            <input id="cedula-issued-at" type="text" name="bus_type" required=""/>
                        </div>

                        <div class="cert-btn">
                            <input type="submit" class="print-btn" value="Generate" onclick="savepicture()"/>
                            <input type="button" class="clear-btn" value="Clear" style="border-radius:2rem;">
                        </div>
                    </div>                        
                        
                    </div>

                 
                        </form>


                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>