<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game Schedule</title>

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
               <h3 style="margin-top:10px;text-align:center">Game Schedule Registration Area</h3><hr>
                <div class="panel-boy">
                 <form method="POST" action="gameschedulecon.php">

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->

     <div class="form-group ">
      <label class="control-label " for="sch_no">
       schedule no
      </label>
      <input class="form-control" id="sch_no" name="sch_no" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="g_date">
       game date
      </label>
      <input class="form-control" id="g_date" name="g_date" type="date"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="g_time">
       game time
      </label>
      <input class="form-control" id="g_time" name="g_time" type="time"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="g_type">
       game type
      </label>
      <input class="form-control" id="g_type" name="g_type" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="tour_name">
       tourament name
      </label>
      <input class="form-control" id="tour_name" name="tour_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="ft_name">
       first team name
      </label>
      <input class="form-control" id="ft_name" name="ft_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="op_name">
       oponent team name
      </label>
      <input class="form-control" id="op_name" name="op_name" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="g_status">
       game status
      </label>
      <input class="form-control" id="g_status" name="g_status" type="text"/>
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
