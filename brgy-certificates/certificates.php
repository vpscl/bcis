<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Barangay Certificate Issuance System</title>
    <link rel="icon" type="image/x-icon" href="../img/icons/north-logo.ico" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/jquery-paginate.js"></script>
</head>


<body>
    <main>
    <?php
session_start();
if (!isset($_SESSION['id'])) {
  header("Location: ../index.php");
  exit();

}
  include "../db_conn.php"
?>

        <section>
            <div class="header">
                <h1>Barangay Certificate Issuance System</h1>

                <div class="logout-div">
                <a href="../logout.php">
                    <img class="logout-btn" src="../img/icons/arrow.svg" alt="" />
                </a>
                </div>
            </div>

            <div class="content">
                
                
                <div class="c-btn">
                <button class="bus-cert" id="certBtn"><span>Barangay Clearance</span></button>
                        <?php include('cert-modal.php'); ?>
                        </div>
                        
                        
                    


                  <div class="c-btn">
                            <a href="business-clearance.php">
                            
                                <button class="bus-cert">
                                     <span>Business Clearance</span>
                                </button>
                        
                            </a>
                       
                     </div>
                
            
        </section>
    </main>
</body>
<script>
                 $(document).ready(function() {
                    $('#resTable').dataTable({
                        "bPaginate": false,
                        "bLengthChange": false,
                        "bFilter": true,
                        "bInfo": false,

                        "bAutoWidth": false
                    });
                });
                $(document).ready(function() {
                    $('#example').dataTable({
                        "bPaginate": false,
                        "bLengthChange": false,
                        "bFilter": true,
                        "bInfo": false,

                        "bAutoWidth": false
                    });
                });
                </script>

</html>