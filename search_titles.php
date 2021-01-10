<?php

function searchTitles() {
    include "sql_connect.php";
    include 'display.php';

    if($conid) {
        if (isset($_GET['title'])) {
            $movie_title = $_GET['title'];
        }

        else {
            $movie_title = "";
        }

        $query = "SELECT * FROM movie WHERE(movie_title LIKE '%" . $movie_title . "%')";
        $result = mysqli_query($conid, $query);


        while($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="container p-3 my-2 bg-white border rounded">
                    <div class="row">
                        <div class="col-sm-3 offset-sm-1">
                            <a href=<?php echo "detail.php?m_id=" . $row['movie_id'] ?>><img src="<?php echo $row['movie_thumb']?>" class="img-thumbnail" alt="result-thumb"></a>
                        </div>

                        <div class="col-sm-7">
                            <div class="container">
                                <div class="row">
                                    <h1><a href=<?php echo "detail.php?m_id=" . $row['movie_id'] ?>><?php echo $row['movie_title']; ?></a></h1>
                                </div>
                                <div class="row">
                                    <?php
                                        display_stars($row['movie_id']);
                                    ?>
                                </div>
                                <div class="row">
                                    <?php
                                        echo $row['description'];
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
    }
    mysqli_free_result($result);
    mysqli_close($conid);
}
?>