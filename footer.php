<!-- footer -->
<div class="footer-content">
    Hotline: +84899999999
    <br>
    Address: Trịnh Văn Bô - Nam Từ Liên - Hà Nội
    <br>
    Mail: Xshop@gmail.com
    <br>
    Twitter: Xshop@twitter.com
    <br>
    <div class="logof"><a href="index.php"><img src="img/xshop.png" alt="logo"></a></div>
    CopyRight©™2022
</div>
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
</body>

</html>