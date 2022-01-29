<!-- Connection to database -->
<?php require_once "connection.php";
 include_once "header.php";

 if(isset($_POST['submit'])){
  $first_name = trim($_POST['first_name']);
  $last_name = trim($_POST['last_name']);
  $username = trim($_POST['username']);
  $score = trim($_POST['score']);
  $screenshot = $_FILES['screenshot']['name'];

  //MOVE UPLOADED FILE
 $target = GW_UPLOADPATH.$screenshot;
 move_uploaded_file($_FILES['screenshot']['tmp_name'], $target);+

 $insert = "INSERT INTO scores (first_name,last_name,username,score,screenshot) 
 VALUES ('$first_name', '$last_name', '$username', '$score', '$screenshot')";

 $result = mysqli_query($dbs, $insert) or die ("Error passing query!");
 mysqli_close($dbs);

 echo "<script> alert ('Your data has been sent for approval. It will be added very soon upon approval');window.location.href='{$_SERVER['PHP_SELF']}'; </script>"; 

 }
 ?> 


    <div class="row">
        <div class="col">
            <p>
                <h1>
                    <b>ADD HIGH SCORE</b>
                </h1>
                <span>Display and flaunt your score among other players. <br>
                    Do you have what it takes to be the best? Play and upload your score today.
                </span>
            </p>
        </div>
    </div>

    <div class="row">
      <div class="col-5">
        <?php //if ($successful == true) { include_once "successmark.php"; };?>
        <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
          <div class="mb-3">
            <labels class="form-label">First Name</label>
            <input type="name" class="form-control" name = "first_name" required>
          </div>

          <div class="mb-3">
            <labels class="form-label">Last name</label>
            <input type="name" class="form-control" name="last_name" required>
          </div>

          <div class="mb-3">
            <labels class="form-label">Username</label>
            <input type="username" class="form-control" name="username" required>
          </div>

          <div class="mb-3">
            <labels class="form-label">Score</label>
            <input type="number" class="form-control" name="score" required>
          </div>

          <div class="mb-3">
            <labels class="form-label">High Score Screen shot</label>
            <input type="file" class="form-control" name="screenshot" required>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Add Score</button>
        </form>
      </div>

      <div class = "col-5">
        <img height="400px" width="500px" src="logo.png"/>
      </div>

    </div>

<?php include_once "footer.php";
