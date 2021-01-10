<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blockbluster</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-info text-light navbar-dark fixed-top">
            <ul class="navbar-nav">
                <li class="navbar-brand" >
                    <img class="brand-img" src="assets/images/blockbuster.png"></img>
                </li>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
               </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">                    <ul class=navbar-nav>
                    <li class="nav-item">
                        <a class="nav-link" href="home.html"><i class="fa fa-fw fa-home"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"><i class="fa fa-fw fa-user"></i>About us</a>
                    </li>
                    <form class="form-inline" action="" method="GET" target="index.php">
                        <div class="form-group">
                            <input type="text" class="form-control mr-sm-2" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default bg-primary text-white"><i class="fa fa-fw fa-search"></i>Search</button>
                        </div>
                    </form>
                </div>
            </ul>
        </nav>
    </div>

    <div class="container-fluid p-3 pt-5 bg-light">
        <?php
            include 'search_titles.php';
            searchTitles();
        ?>
    </div>
</body>

</html>