<?php
require_once "connection.php";
require_once "header.php";

echo '<pre>';
echo var_dump($_GET);
echo '</pre>';

$query_username  = $_GET['query_username'];
echo $query_username;
?>

<div class="row">
      <div class="col">
          <p>
              <h1>
                  <b>Query Result for <?php echo "'".$query_username."'" ?> </b>
              </h1>
              <span>Display and flaunt your score among other players. <br>
                  Do you have what it takes to be the best? Play and upload your score today.
              </span>
          </p>
      </div>
  </div>

  <div class="row">
    <div class="col">
      <?php
        $query = "SELECT * FROM scores WHERE  username LIKE $query_username AND approved = 1  ORDER BY score DESC";
        $data = mysqli_query ($dbs, $query) or die ("Query failed!");
        include_once "displayscore.php"; ?>
        

<?php require_once "footer.php"; ?>