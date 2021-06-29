<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/modal.css" />
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <h1>BARANGAY CLEARANCE</h1>
      <div class="close-btn">
      <span class="close">&times;</span>
      </div>
    </div>
    <div class="modal-body">


    <div>
    <table id="resTable" ">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php    
                
                $squery =  mysqli_query($conn,"select * from residents");
                while ($row = mysqli_fetch_array($squery)){
                
                ?>

                        <tr>
                            
                            <td><?php echo $row['first_name']," ",$row['mid_name']," ",$row['last_name'] ?></td>
                            <td><a href="barangay-clearance.php?id=<?php echo$row['id']?>">
                                    <button class="create-btn">Create</button></a>
                            </td>

                        </tr>
                        <?php 
                  }
                ?>
                
                    </table>
                    </div>



    </div>
    

</div>

<script>
$('#resTable').paginate({
    limit: 8
});
</script>




<script>
var modal = document.getElementById("myModal");

var btn = document.getElementById("certBtn");

var span = document.getElementsByClassName("close-btn")[0];
 
btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
