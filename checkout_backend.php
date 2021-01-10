

<?php
include 'sql_connect.php';

$conn = $conid;

$movie_id = $_POST['movie_id'];
$user_id = 1;

if(!$conn)
{
  echo "error when connecting";
}
else{
    
    mysqli_query($conn, "INSERT INTO rental (m_id, u_id) VALUES('$movie_id','$user_id')");
    echo "success";
    
}




?>