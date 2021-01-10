



function reviewDvd(event)
{
    //window.alert("clicked review button");
   // event.preventDefault();
    window.location.replace("http://stackoverflow.com");
    //return false;
}


function rentDvd()
{
    window.alert("clicked rent button");
}


function attemptReview(event, movie_id)
{
    event.preventDefault();

    //window.alert("hfhffhhf");
  // xmlhttp =  new XMLHttpRequest();
   //xmlhttp.open("GET", "review_backend.php?movie_id=2", true);
   //xmlhttp.send();

   var username = document.getElementById("review-username").value;
   var password = document.getElementById("review-password").value;
   var review = document.getElementById("review-text").value;
 
   var e = document.getElementById("review-rating");
   var rating = e.options[e.selectedIndex].value;



  //var error_message = document.getElementById("custom_error");
  
   

   //
//window.alert(review);

   $.ajax({
           type : "POST",  //type of method
           url  : "review_backend.php",  //your page
           data : { username : username, review : review, password : password, rating:rating, movie_id:movie_id },// passing the values
           success: function(res){  
                                   //do what you want here...

                                   

                                   if(res.includes('success'))
                                   {
                                    document.getElementById("custom_error_message").innerHTML = "Thank you for your review!";
                                    document.getElementById("custom_error_image").setAttribute('src', 'assets/images/success.png');
                                    document.getElementById("error").setAttribute('id', 'success');
                                    document.getElementById("custom_error").style.visibility = "visible";
                                   
                                   }
                                   else
                                   {
                                    //window.alert(res);
                                    document.getElementById("custom_error_message").innerHTML = res;
                                    document.getElementById("custom_error_image").setAttribute('src', 'assets/images/error.png');
                                    document.getElementById("error").setAttribute('id', 'error');
                                    document.getElementById("custom_error").style.visibility = "visible";
                                   }
                   },
           error:function(e)
           {
               console.log(e);
           }
           
       });
   
       return false;

}

function setImage(imageUrl)
{

}
function setDescription(description)
{
    
}

function setRating(rating)
{
    
}

function setReviews(reviews)
{
    
}

function hideErrorMessage(event,id, movie_id)
{
   event.preventDefault();
    if(id == "error")
    {
        document.getElementById("custom_error").style.visibility = "hidden";
    }
    else
    {
        
        location.replace("detail.php?m_id="+movie_id);
        
        
      
    }
}


function validateInput(event, movie_id)
{
   var username = document.getElementById("review-username").value;
   var password = document.getElementById("review-password").value;
   var review = document.getElementById("review-text").value;
 
   var e = document.getElementById("review-rating");
   var rating = e.options[e.selectedIndex].value;

    if(username && password && review && rating)
    {
        attemptReview(event, movie_id);
    }
    else
    {
    
        document.getElementById("custom_error_message").innerHTML = "All fields are required";
        document.getElementById("custom_error_image").setAttribute('src', 'assets/images/error.png');
        document.getElementById("error").setAttribute('id', 'error');
        document.getElementById("custom_error").style.visibility = "visible";
    }

}

