function llevaIndex(){
    window.location.href = 'index.html';
}

function llevaSignIn(){
    window.location.href = 'signin.html';
}

function llevaSignUp(){
    window.location.href = 'signup.html';
}


function llevaHomeDoctor(){
    window.location.href = 'homedoctor.html';
}

// Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
  $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#myCarousel").carousel("prev");
});