<?php

function display_stars($movie_id) {
    include "sql_connect.php";
    if($conid) {

        $query = "SELECT * FROM review WHERE(m_id = '" . $movie_id . "')";
        $result = mysqli_query($conid, $query);

        $review_count = 0;
        $star_total = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $review_count = $review_count + 1;
            $star_total = $star_total + $row['rating'];
        }

        if ($review_count == 0) {
            echo "(0)";
        }

        else {
            $star_mean = round($star_total / $review_count);
            $stars = 0;
            while($stars < $star_mean) {
                $stars = $stars + 1;
                ?> <img src=assets/images/star.png height=30px;></a> <?php
            }
            echo "(" . $review_count . ")";
        }
    }
}
?>