<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn" id="hide">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo"> <img src="f/Group 16264.png" alt=""></label>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="partner.php">Partner</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="latest.php">Latest News</a></li>
      <li class="logout"><a href="logout.php">Log out</a></li>
                <li class="uname"><a href="#"><?php echo $_SESSION['uname']; ?></a></li>
    </ul>
    <ul class="btn">
      <li class="btn"><a href="donation-form.php">Donate</a></li>
    </ul>
    
  </nav>
  <!-- --------google translater----- -->
  <div class="main-p-translate">
        <div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en'
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
    <!-- -------------------------- -->

