<!-- Connection to database -->
<?php require_once "connection.php"; ?>

<?php include_once "header.php"; ?>
  <div class="row">
      <div class="col">
          <p>
              <h1>
                  <b>WELCOME TO SUBWAY SURF WARS</b>
              </h1>
              <span>Display and flaunt your score among other players. <br>
                  Do you have what it takes to be the best? Play and upload your score today.
              </span>
          </p>
      </div>
  </div>


  <!-- Page content -->
  <!-- Subway surf image -->
  <div class="row">
      <img class = "image-fluid" src = 'uppicture.png'/>
      
    </div>
  <!-- Score information -->
  <div class="row">
    <div class="col">
      <?php
        $query = "SELECT * FROM scores WHERE approved = 1  ORDER BY score DESC";
        $data = mysqli_query ($dbs, $query) or die ("Query failed!");
        include_once "displayscore.php" ?>
      
      
    </div>

    
  </div>
<?php include_once "footer.php" ?>
