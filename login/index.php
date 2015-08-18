<html>
<head>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="488760853472-4c9pq8gr8h4n0ab2neidmahth2pjh7t5.apps.googleusercontent.com">

</head>
<body>
	<div class="g-signin2" data-onsuccess="onSignIn"></div>
	</br>
	<a href="#" onclick="signOut();">Sign out</a>
	<p id="welcome"></p>

	<script>
		function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		  console.log('Name: ' + profile.getName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail());

		  document.getElementById("welcome").innerHTML = 
			"Welcome " + profile.getName();
		}

		function signOut() {
		    var auth2 = gapi.auth2.getAuthInstance();
		    auth2.signOut().then(function () {
		      console.log('User signed out.');
		    });
		  }
		

	</script>

</body>
</html>