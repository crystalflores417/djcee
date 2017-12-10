<?php include 'partials/header.php'; ?>

<div id="services">





  
	

  <div class="container justify-content-center mt-5 ">
    <h1 class="text-center mb-5">Services</h1>
  <div class="row">
    <div class="col-sm  text-center mb-5">
      
      <img src="http://res.cloudinary.com/dx6e0lwrp/image/upload/c_thumb,e_grayscale,h_400,w_400/v1512870478/people-2595851_1920_hsqorb.jpg" alt="wedding dance" class=" img-fluid img-thumbnail rounded-circle">
      <h2 class="m-3" >Weddings</h2>

      <p>
      	Ceremonies <br>
      	Cocktail Hours<br>
      	Receptions<br>
      	Bachelorette Parties<br>
      	Bachelor Parties
      	</p>
      
    </div>
    <div class="col-sm text-center mb-5">
      <img src="http://res.cloudinary.com/dx6e0lwrp/image/upload/c_thumb,e_grayscale,h_400,w_400/v1512871311/graduation_cdthwl.jpg" alt="wedding dance" class=" img-fluid img-thumbnail rounded-circle">

      <h2 class="m-3 ">Celebrations</h2>
		<p >
      	Anniversaries <br>
      	Birthdays<br>
      	Sweet 16<br>
      	Quiceniera<br>
      	Bar &  Bat Mitzvahs<br>
      	Grand Openings<br>
      	Graduations
      	</p>
    </div>
    <div class="col-sm text-center mb-5">
       <img src="http://res.cloudinary.com/dx6e0lwrp/image/upload/c_thumb,h_400,w_400/v1512871003/cocktails_ml3wd9.jpg" alt="wedding dance" class=" img-fluid img-thumbnail rounded-circle">
    	<h2 class="m-3"> Misc Events</h2>
		<p>
    	Corporate parties<br>
      	Banquets<br>
      	Holidays<br>
      	Bars<br>
      	Clubs<br>
      	Fund Raisers<br>
      	Schools
      	</p>
      
    </div>
  </div>
</div>






</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 9000); // Change image every 2 seconds
}
</script>







<?php include 'partials/footer.php'; ?>