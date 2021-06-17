<?php
//awebthgj_yt
session_start();
?>
<html>
	<head>
		    <meta charset="UTF-8">
	    <title>Logged In</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
	    <div
    style="padding: 16px; background: linear-gradient(0.25turn, rgb(140, 53, 144), rgb(44, 73, 130)); color: rgb(251, 180, 74);">
    <div
      style="display: flex; justify-content: flex-start; align-items: center; font-size: 1.25rem; font-weight: 400; max-width: 1024px; margin: auto;">
      <img src="logo.77e93b0b.png" alt="Logo" style="height: 42px; margin-right: 16px;"><span>Pi Network third-party Pi
        App on the Pi Testnet</span>
    </div>
  </div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Here we Go</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tetris.html">Games</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Profile Setting</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Security Setup</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    </nav>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '511361903622174',
		  cookie     : true,
		  xfbml      : true,
		  version    : 'v10.0'
		});
		FB.AppEvents.logPageView();   
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	   
	   function fbLogin(){
			FB.login(function(response){
				if(response.authResponse){
					fbAfterLogin();
				}
			});
	   }
	   
	   function fbAfterLogin(){
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {   
				FB.api('/me', function(response) {
				  jQuery.ajax({
					url:'check_login.php',
					type:'post',
					data:'name='+response.name+'&id='+response.id,
					success:function(result){
						window.location.href='index.php';
					}
				  });
				});
			}
		});
	   }
</script>
<?php
if(isset($_SESSION['FB_ID']) && $_SESSION['FB_ID']!=''){
	echo 'Welcome '.$_SESSION['FB_NAME'];
	echo "<br/>";
	?>
	<a href="logout.php">Logout</a>
	<?php
}else{
?>
<br><a id="puff" href="javascript:void(0)" onclick="fbLogin()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>  login with Facebook</a>
<?php } ?>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	</body>
</html>