<!-- Footer -->
<footer class="footer padding-three" id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-brand "><a class="logo" href="#"><img src="img/logo.png" alt="logo"></a></div>
            <p>contact us on social media</p>
            <ul class="social-nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-hacker-news"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="footer-author">
    <div class="container">
        <div class="copyright-footer">
            <p>© 2017  All Rights Reserved , By Themesity </p>
            <p>Made with <i class="fa fa-heart"></i> From India.</p>
        </div>
    </div>
</div>
<!--/ Footer -->
<!-- SCRIPTS -->
<script  src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage'], .overlay-detail a").on('click', function(event) {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        });
    })
</script>
</body>
</html>