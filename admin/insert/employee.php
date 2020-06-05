<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee</title>

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
               <h4 style="margin-top:10px;text-align:center">Employee Regstration Form</h4><hr>
                <div class="panel-boy">
                 <form method="POST" action="employeecon.php">

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

     <div class="form-group ">
      <label class="control-label " for="E_ID">
       Employee id
      </label>
      <input class="form-control" id="E_ID" name="E_ID" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="E_NAME">
       Employee name
      </label>
      <input class="form-control" id="E_NAME" name="E_NAME" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="E_CELL_NUM">
       Employee cell number
      </label>
      <input class="form-control" id="E_CELL_NUM" name="E_CELL_NUM" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="E_MAIL">
       Employee Mail
      </label>
      <input class="form-control" id="E_MAIL" name="E_MAIL" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="E_ADDRESS">
       Employee address
      </label>
      <input class="form-control" id="E_ADDRESS" name="E_ADDRESS" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="E_DESIGNATION">
       Employee Designation
      </label>
      <input class="form-control" id="E_DESIGNATION" name="E_DESIGNATION" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="E_JOINING_DATE">
       Employee joining date
      </label>
      <input class="form-control" id="E_JOINING_DATE" name="E_JOINING_DATE" type="date"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="E_SALARY">
       Employee salary
      </label>
      <input class="form-control" id="E_SALARY" name="E_SALARY" type="number"/>
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
