<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Audience</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">.
<link rel="stylesheet" href="../style.css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="form.css">

</head>
<body>
   <?php include "header.php" ?>
    <div class="container">
         
         <div class="row">
                <div class="col-lg-3 logo">
              <a href="../index.php"><img src="../img/logo.png" alt="Home" style="height:60px;"></a>
          </div><!--LOGO AREA-->
              <div class="col-lg-6">
               <div class="panelf panel-default">
               <h4 style="margin-top:10px;text-align:center">Audience Regstration Form</h4><hr>
                <div class="panel-boy">
                 <form method="POST" action="audincecon.php">

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

     <div class="form-group ">
      <label class="control-label " for="aud_seat_no">
       audience seat number
      </label>
      <input class="form-control" id="aud_seat_no" name="aud_seat_no" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="aud_name">
       audience name
      </label>
      <input class="form-control" id="aud_name" name="aud_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="aud_gender">
       audience gender
      </label>
      <input class="form-control" id="aud_gender" name="aud_gender" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="aud_types">
       audience types
      </label>
      <input class="form-control" id="aud_types" name="aud_types" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="aud_cell_num">
       audience cell number
      </label>
      <input class="form-control" id="aud_cell_num" name="aud_cell_num" type="number"/>
     </div>
     <div class="form-group ">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
               </div><!--panel-body-->

           </div><!--panel default-->
           </div><!--col-->
           
      
          </div>
          </div><!--row area-->
          <?php include "footer.php" ?>
</body>
</html>
