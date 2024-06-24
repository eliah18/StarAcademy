<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
  </head>
  <body>
 <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                    <thead>
                    <tr>
                      <th>Nat_ID</th>
                      <th>Name</th>
                      <th>Surname</th>
                      <th>School</th>
                      <th> Num of Az</th>
                      <th>Accepted By</th>
                      <th> Date Added</th>
                      <th>Time Added</th>
                     
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php include("conn.php");
                 $sqln="SELECT * FROM personal_info WHERE status ='Accepted' order by Az desc ";
                 $query = $connection->query($sqln);
                 while ($row = $query->fetch_assoc()){
                    $id=$row['nat_id'];
                    $name="Accept";
                    $reject="Reject";
                    $session_id=$_SSESSION['nat_id']=$id; 
                     
                   
            echo "
                        <tr>
                          
                          <td>".$row['nat_id']."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['surname']."</td>
                          <td>".$row['xul_name']."</td>
                          <td>".$row['Az']."</td>
                          <td>".$row['accepted_rejected']."</td>
                          <td>".$row['date_added']."</td>
                          <td>".$row['time_added']."</td>

                         
                        </tr>
                      ";
                    }
                    
                  ?>
                  </tbody>
                </table>
                </body>
                </html>