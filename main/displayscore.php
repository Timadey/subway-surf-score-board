<?php
require_once "connection.php";
require_once "header.php";  

$count = 1;
echo '<table class="table table-bordered border-warning">';
          while ($row = mysqli_fetch_array ($data) or die ()) { ?>
            <tr class="table-primary">

              <th scope="row"><?php echo $count ?></th>

              <td class="col-8">
                <table class="table table-striped table-hover">
                  
                  <tr>
                    <th scope="row">Name:</th>
                    <td><?php echo $row['first_name'].' '.$row['last_name']?></td>
                  </tr>

                  <tr>
                    <th scope="row">Username:</th>
                    <td><?php echo $row['username']?></td>
                  </tr>

                  <tr>
                    <th scope="row">Score:</th>
                    <td><?php echo $row['score']?></td>
                  </tr>

                  <tr>
                    <th scope="row">Date Added:</th>
                    <td><?php echo $row['date']?></td>
                  </tr>
                </table>
              </td>    


              <td class="align-middle">
                
                <img height="200px" width= "200px"  class= "image-fluid" src ='logo.png'/> <!-- "<?php echo GW_UPLOADPATH.$row['screenshot'] ?>" -->
                
              </td>
            
            </tr>
            <?php $count++;
          }; mysqli_close($dbs); ?>
        </table>

<?php require_once "footer.php"; ?>