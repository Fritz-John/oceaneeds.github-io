</div>
</div>
<div class="footer-bottom">
    <footer class="bg-dark text-center text-lg-start ">
      <!-- Grid container -->
      <div class="container p-4 pb-0 footer_simple">
        <form action="">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-auto mb-4 mb-md-0">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12 mb-4 mb-md-0">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form5Example25" class="form-control" />
                <label class="form-label" for="form5Example25">Email address</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto mb-4 mb-md-0">
              <!-- Submit button -->
              <button type="submit" class="btn">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-light" href="https://mdbootstrap.com/">Oceaneeds.com</a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>
  <!-- JavaScript Bundle with Popper -->
  
  <script>
  //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>    
</body>
</html>