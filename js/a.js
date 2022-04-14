$(document).ready(function ()
            {
        "use strict";
        
        //============ start slide show ===============
        
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
            var i,
                slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i = i + 1) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 6000); // Change image every 6 seconds
        }
        
    });

