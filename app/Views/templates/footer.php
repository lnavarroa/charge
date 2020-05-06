

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
<div class="container">
	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> Charge. Sitio web desarrollado por <a href="https://ylit.cl">YLIT</a>.</p>

	</div>
</div>
</footer>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  <script>
  	function validateForm() {
  	var name =  document.getElementById('name').value;
  	if (name == "") {
      	document.querySelector('.status').innerHTML = "Debe rellenar este campo";
      	return false;
  	}
  	var email =  document.getElementById('email').value;
  	if (email == "") {
      document.querySelector('.status').innerHTML = "Debe rellenar este campo";
      return false;
  	} else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.querySelector('.status').innerHTML = "Formato de email invalido";
          return false;
      }
  	}
  	var subject =  document.getElementById('subject').value;
  	if (subject == "") {
      document.querySelector('.status').innerHTML = "Debe rellenar este campo";
      return false;
  	}
  	var message =  document.getElementById('message').value;
  	if (message == "") {
      document.querySelector('.status').innerHTML = "Debe rellenar este campo";
      return false;
  	}
  	document.querySelector('.status').innerHTML = "Enviando...";
	}
</script>
</body>
</html>
