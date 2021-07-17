<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<a><button class="btn btn-primary scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button></a>
<style>
	.scroll-top {
	border-radius: 5px;
	background-color: green;
    width: 40px;
    height: 40px;
    position: fixed;
    bottom: 25px;
    right: 20px;
    display: none;
  	border: none;
  	color: white;
  	padding: 10px 10px;
  	text-align: center;
  	font-size: 16px;
	}
	.scroll-top:hover{
		background-color: darkgreen;
	}
</style>

<script>
	$(document).ready(function() {

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.scroll-top').fadeIn();
    } else {
      $('.scroll-top').fadeOut();
    }
  });

  $('.scroll-top').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 100);
    return false;
  });

});

</script>