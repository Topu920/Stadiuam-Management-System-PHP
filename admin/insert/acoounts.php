<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accounts</title>
  
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
              <a href="../index.php"><img src="../img/logo.png" alt="LOGO" style="height:60px;"></a>
          </div><!--LOGO AREA-->
              <div class="col-lg-6">
               <div class="panelf panel-default">
               <h4 style="margin-top:10px;text-align:center">Accounts Regstration area</h4><hr>
                <div class="panel-boy">
                 <form method="POST" action="accountscon.php">
     <div class="form-group">
      <label class="control-label " for="tran_number">
       transaction no
      </label>
      <input class="form-control" id="tran_number" name="tran_number" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="tran_date">
      transaction date
      </label>
      <input class="form-control" id="tran_date" name="tran_date" type="date"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="tran_type">
       transaction type
      </label>
      <input class="form-control" id="tran_type" name="tran_type" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="client_name">
       client name
      </label>
      <input class="form-control" id="client_name" name="client_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="cont_number">
       contact number
      </label>
      <input class="form-control" id="cont_number" name="cont_number" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="balance">
       amount
      </label>
      <input class="form-control" id="balance" name="balance" type="number"/>
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