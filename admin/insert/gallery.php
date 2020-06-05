<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>

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
               <h4 style="margin-top:10px;text-align:center">Gallery Registration Area</h4><hr>
                <div class="panel-boy">
                 <form method="POST" action="gallerycon.php">

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

     <div class="form-group ">
      <label class="control-label " for="Gal_name">
       Gallery name
      </label>
      <input class="form-control" id="Gal_name" name="Gal_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Gal_type">
       Gallery type
      </label>
      <input class="form-control" id="Gal_type" name="Gal_type" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Gal_capacity">
       Gallery capacity
      </label>
      <input class="form-control" id="Gal_capacity" name="Gal_capacity" type="number"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Gal_tramway">
       Gallery tramway
      </label>
      <input class="form-control" id="Gal_tramway" name="Gal_tramway" type="text"/>
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
