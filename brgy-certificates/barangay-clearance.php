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
        <?php
                $id= $_GET['id'];
                $squery =  mysqli_query($conn,"select * from residents where id = $id");
                while ($row = mysqli_fetch_array($squery)){
                $sex=$row['sex'];
                $civil_status=$row['civil_status'];
?>
      

        <section>
            <div class="header">
                <h1>Barangay Clearance</h1>
            
                    <button class="back-btn" onclick="history.back();"><span>Back</span></button>
               
            </div>

            <div class="content">
                <div class="brgy-cert">


                   
                    <div class="cert-infos">
                    <form id="" action="cert-template/barangay-clearance-generate.php" method="post">
                    
                    <!-- hidden -->
                    <div class="cert-info" >
                            <input id="id" type="hidden" name="id" style="display:none;
                                value="<?php echo $row['id']?>" />
                        </div>


                        <div class="cert-info" >
                        <h2>Please fill in all fields.</h2>
                    </div>

                        <div class="cert-info" style="border-bottom: 1px solid #6247aa;">
                            <input id="id" type="hidden" name="civil_status" style="display:none;"
                                value="<?php echo $civil_status?>" />
                        </div>
                      

                   

                     <div class="cert-info">
                            <input id="id" type="hidden" name="sex" required=""
                                value="<?php 
                                if($sex=="Female" && $civil_status=="single"){
                                    echo "Ms.";
                                }
                                else if($sex=="Female" && $civil_status=="married"){
                                    echo "Mrs.";
                                }
                                else if($sex=="Female" && $civil_status=="widowed"){
                                    echo "Mrs.";
                                }
                                else if($sex=="Male"){
                                    echo "Mr.";
                                }
                            
                                ;?>" /> 
                    </div>
                    


                        <div class="cert-info">
                            <h5>Name:</h5>
                            <input id="name" type="text" name="name" required=""
                                value="<?php echo $row['first_name']," ",$row['mid_name']," ",$row['last_name']," ", $row['suffix']?>" />
                        </div>

                        <div class="cert-info">
                            <h5>Address:</h5>
                            <textarea id="address" name="address" required=""
                                rows="2"><?php echo$row['house_number']," ",$row['street']," Street, ",$row['purok'],", Barangay Dadiangas North, General Santos City"?></textarea>
                        </div>

                        <div class="cert-info">
                            <h5>Purpose:</h5>
                            <input id="purpose" type="text" name="purpose" required=""/>
                        </div>

                        
                        <div class="cert-info">
                            <h5>Date Issued:</h5>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" name="date-issued"/>
                        </div>
                  


                        <div class="line">
                        </div>

                        <div class="cert-info">
                            <h5>Cedula No:</h5>
                            <input id="cedula-no" type="text"  name="cedula" required=""/>
                        </div>

                        <div class="cert-info">
                            <h5>Issued at:</h5>
                            <input id="cedula-issued-at" type="text" name="cedula-issued" required="" />
                        </div>

                        <div class="cert-info">
                            <h5>Date Issued:</h5>
                            <input id="cedula-date" type="date" name="cedula-date" required=""/>
                        </div>
                        
                        <!-- picture -->
                        <div id="pic" >
                        <img src="../brgy-residents/image/<?php echo basename($row['img_url']);?>" alt="">
                        </div>
                        <input id="abc" name="abc" value="" type="hidden"/>
                        <input type="hidden" name="orig_pic" value="../../brgy-residents/image/<?php echo basename($row['img_url']);?>">
                        
                        
                    </div>

                    <div class="cert-btn">
                        <input type="submit" name="btn_save" class="print-btn" value="Generate" onclick="savepicture()">
                        <input type="button" class="clear-btn" value="Clear" style="border-radius:2rem;">

        
                    </div>

                </form>
                </div>
            </div>
            <?php }
        ?>
        </section>
    </main>
</body>

</html>