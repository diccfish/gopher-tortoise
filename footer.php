<script>
	$("main").onepage_scroll({
	   sectionContainer: "article", // sectionContainer accepts any kind of selector in case you don't want to use section
	   easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in", "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
	   animationTime: 1000, // AnimationTime let you define how long each section takes to animate
	   pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
	   updateURL: false // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
	});
	$('#hole-entrance').on( 'click', function(e) {
		e.preventDefault();
		$('main').moveDown();
		$(this).addClass('entering');
	})
	$('#hole-entrance').on( 'touchstart', function(e) {
		e.preventDefault();
		$('main').moveDown();
		$(this).addClass('entering');
	})
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46531809-1', 'floriduh.org');
  ga('send', 'pageview');

</script>
</body>
</html>