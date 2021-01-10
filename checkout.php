
<?php 
include 'sql_connect.php';
include 'movieInfo.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <title>Blockbluster</title>
  </head>
  <body>

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
                    <li class="nav-item">
                        <a class="nav-link" href="search.php"><i class="fa fa-fw fa-search"></i>Search</a>
                    </li>
                </div>
            </ul>
        </nav>
    </div>

  <div class="container">
    <div class="row divider">
        <span class = "dvd-title">Check out</span>
    </div>


    <div class="row">
      <div class="col">
       
      </div>
      <div class="col img-container dvd">
       
        
        <form>
          <!-- custom error message -->
        <div class = "custom-error-wrapper" >
        <div class = "custom-error" id = "custom_error-checkout">
        <p class = "custom-error-message" id = "custom_error_message-checkout">Thank you for your purchase!</p>  
        <img class = "custom-error-image" id = "custom_error_image-checkout" src = "assets/images/success.png"/>
        <button class = "custom-error-button" id = "error-checkout" onclick = "hideErrorMessage(event, this.id)">Ok</button>
        </div>
        </div>

            <label class = "label-login">Shipping Address:</label>
        
            <div class="form-group">
              <input type="text" class="form-control" id="name-checkout" placeholder="Enter name">
              <small id="emailHelp" class="form-text text-muted">We will never share your data with anyone else.</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="address-checkout" placeholder="Address">
              </div>
            <div class="form-group">
              <input type="text" class="form-control" id="zipcode-checkout" placeholder="Zip Code">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="city-checkout" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="state-checkout" placeholder="State">
            </div>
            <div class="form-group">
              <label for="password-input">Payment information:</label>
              <input type="text" class="form-control" id="cardholder-checkout" placeholder="Cardholder name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="cardnumber-checkout" placeholder="Credit card number">
            </div>
            
          </form>
          <div>
          <button onclick = "validateInput(event, <?php echo $movie_id; ?>)" class="btn btn-primary">Pay Now! </button>
          <button onclick="window.location.href = 'search.php';" class="btn btn-primary">Cancel </button>
          </div>

      </div>
      <div class="col">

      </div>
      <div class="col">
        <p class = "checkout-title"> <?php echo $title;?> </p>
        <img class = "checkout-image" src = "<?php echo $image;?>"/>
      </div>
    </div>
    <div class="row">
      <div class="col">
     
      </div>

      <div class="col img-container">
       
      </div>
      <div class="col ff text-center">
          
      </div>
      <div class="col">
    </div>

    </div>

    <div class = "row">
        
        <div class = "col"></div>
        <div class = "col desc-container"></div>
        <div class = "col"></div>
        <div class = "col"></div>
        
    </div>


    <div class="row divider">
        <span>Blockbluster - We are taking back to where it all started</span>
    </div>
  </div>


<div style = "height:400px"></div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "js/checkout.js"></script>
  </body>
</html>