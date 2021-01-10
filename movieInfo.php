<?php

    $conn = $conid;
    
    $movie_id = $_GET['m_id'];
    if($conn)
    {
        $result = mysqli_query($conn, "SELECT * FROM movie WHERE movie_id = '$movie_id'");
        $row = mysqli_fetch_assoc($result);

        $title = $row['movie_title'];
        $image = $row['movie_thumb'];
        $description = $row['description'];
    }

   

?>