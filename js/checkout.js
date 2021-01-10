
function rentMovie(event, movie_id)
{
 
    event.preventDefault();
    //window.alert("fhhe");
    $.ajax({
        
        type : "POST",  
        url  : "checkout_backend.php", 
        data : { movie_id:movie_id},
        success: function(res){  
                                //do what you want here...
                                
                                document.getElementById("custom_error_message-checkout").innerHTML = "Thank you for your purchase";
                                document.getElementById("custom_error_image-checkout").setAttribute('src', 'assets/images/success.png');
                                document.getElementById("error-checkout").setAttribute('id', 'success-checkout');
                                document.getElementById("custom_error-checkout").style.visibility = "visible";
                                
                }
        
    });

    return false;
}


function hidePurchaseMessage(event)
{
   event.preventDefault();


        location.replace("home.html");

    return false;
}

function validateInput(event, movie_id)
{

    event.preventDefault();
    
    var name = document.getElementById("name-checkout").value;
    var address = document.getElementById("address-checkout").value;
    var zip = document.getElementById("zipcode-checkout").value;
    var city = document.getElementById("city-checkout").value;
    var state = document.getElementById("state-checkout").value;
    var cardholder = document.getElementById("cardholder-checkout").value;
    var cardnumber = document.getElementById("cardnumber-checkout").value;

    if(name && address && zip && city && state && cardholder && cardnumber)
    {
        rentMovie(event, movie_id);
    }
    else
    {
        document.getElementById("custom_error_message-checkout").innerHTML = "All fields are required";
        document.getElementById("custom_error_image-checkout").setAttribute('src', 'assets/images/error.png');
        document.getElementById("error-checkout").setAttribute('id', 'error-checkout');
        document.getElementById("custom_error-checkout").style.visibility = "visible";
    }

}

function hideErrorMessage(event,id)
{
   event.preventDefault();
    if(id == "error-checkout")
    {
        document.getElementById("custom_error-checkout").style.visibility = "hidden";
    }
    else
    {
        location.replace("home.html");
        
        
      
    }
}