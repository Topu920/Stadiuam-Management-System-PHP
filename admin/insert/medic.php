<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medic</title>

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
              <a href="../index.php"><img src="../img/logo.png" alt="LOGO" style="height:40px;"></a>
          </div><!--LOGO AREA-->
              <div class="col-lg-6">
               <div class="panelf panel-default">
               <h4 style="margin-top:10px;text-align:center">Medic Regstration Form</h4><hr>
                <div class="panel-boy">
                 <form method="POST" action="mediccon.php">

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

     <div class="form-group ">
      <label class="control-label " for="Slip_no">
       Slip no
      </label>
      <input class="form-control" id="Slip_no" name="Slip_no" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="P_name">
       Patient name
      </label>
      <input class="form-control" id="P_name" name="P_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="P_age">
       Patient age
      </label>
      <input class="form-control" id="P_age" name="P_age" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="P_Type">
       Patient type
      </label>
      <input class="form-control" id="P_Type" name="P_Type" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Pcell_number">
       Patient Cell number
      </label>
      <input class="form-control" id="Pcell_number" name="Pcell_number" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Doc_name">
       Doctor name
      </label>
      <input class="form-control" id="Doc_name" name="Doc_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Dcell_num">
       Doctor cell number
      </label>
      <input class="form-control" id="Dcell_num" name="Dcell_num" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Treat_type">
       Treatment type
      </label>
      <input class="form-control" id="Treat_type" name="Treat_type" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="TOF">
       Types Of facilites
      </label>
      <input class="form-control" id="TOF" name="TOF" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Total_cost">
       Total cost
      </label>
      <input class="form-control" id="Total_cost" name="Total_cost" type="number"/>
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
