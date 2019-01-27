<?php 
include_once 'connection.php';
$sql="SELECT * FROM  new_hero WHERE hero_status='Alive' LIMIT 2";
$res=mysqli_query($con,$sql);
$sql="SELECT MAX(win_score) AS win_score,hero_name FROM  new_hero";
$res1=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fighter</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="resources/fighter.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="resources/fighter.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Figter Game</a>
            </div>
          </div>
        </nav>
      
        <div class="container">
            <form method="post" action="api/modelCreateNewhero.php" class="col-md-4">
                <input type="submit" class="btn btn-info" value="New Hero" id="new_hero">
            </form>
            <form method="post" action="api/modelWinner.php" class="col-md-4">
                <input type="submit" class="btn btn-danger" value="Fight To Death" id="fight_to_death" >
                
                <?php 
                  while($row=mysqli_fetch_assoc($res))
                  {
                    echo '<input type="hidden" name="hero_id" value='.$row['hero_id'].'>';
                    echo '<div class="ken" style="margin-top:150px; margin-left: 80px;display:none" align="center" name="hero_name">'.$row['hero_name'].'</div>';
                  }
                ?>
            </form>
            <form method="post" action="api/modelChampion.php" class="col-md-4">
              <?php 
                  while($row1=mysqli_fetch_assoc($res1))
                  {
                     echo'<input type="hidden" value='.$row1['win_score'].' name="score" id="score">';
                      echo'<input type="hidden" value='.$row1['hero_name'].' name="name" id="name">';
                  }
                ?>
                <input type="submit" class="btn btn-info" value="Become Champion" name="champ" id="champ">
            </form>
        </div>
    </body>
</html>
