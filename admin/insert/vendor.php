<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vendor</title>

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
               <h4 style="margin-top:10px;text-align:center">Vendor Registration Area</h4><hr>
                <div class="panel-boy">
                 <form method="POST" action="vendorcon.php">

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

     <div class="form-group ">
      <label class="control-label " for="SReg_num">
       Stadium Registration number
      </label>
      <input class="form-control" id="SReg_num" name="SReg_num" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Org_name">
       Organizatin name
      </label>
      <input class="form-control" id="Org_name" name="Org_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Org_Reg_num">
       Organization Registration number
      </label>
      <input class="form-control" id="Org_Reg_num" name="Org_Reg_num" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Contact_num">
       Contact number
      </label>
      <input class="form-control" id="Contact_num" name="Contact_num" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Email">
       Email
      </label>
      <input class="form-control" id="Email" name="Email" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Service_type">
       Service type
      </label>
      <input class="form-control" id="Service_type" name="Service_type" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Ser_commment">
       Service commment
      </label>
      <input class="form-control" id="Ser_commment" name="Ser_commment" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Contact_duration">
       Contact_Duration
      </label>
      <input class="form-control" id="Contact_duration" name="Contact_duration" type="number"/>
     </div>
     <div class="form-group">
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