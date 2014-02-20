window.fbAsyncInit = function() {
	FB.init({
		appId : '502984029815829',
		channelUrl : '//www.fernslab.in/tabsite/channel.php', // Channel File
		status : true, // check login status
		cookie : true, // enable cookies to allow the server to access the session
		frictionlessRequests : true,
		xfbml : true // parse XFBML
	});

	// Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
	// for any authentication related change, such as login, logout or session refresh. This means that
	// whenever someone who was previously logged out tries to log in again, the correct case below
	// will be handled.
	FB.Event.subscribe('auth.authResponseChange', function(response) {
		// Here we specify what we do with the response anytime this event occurs.
		console.log('The status of the session changed to: ' + response.status);
		//alert(response.status);
	});
	// Session Change

	//Login
	FB.Event.subscribe('auth.login', function(response) {
		//alert('logged in');
	});

	//Logout
	FB.Event.subscribe('auth.logout', function(response) {
		//alert('logged out');
	});

	FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
			var uid = response.authResponse.userID;
			accessToken = response.authResponse.accessToken;
			$(".loggedin").css('display', 'block');
			$(".loggedoff").css('display', 'none');
			testAPI();
			postAPI();

		} else if (response.status === 'not_authorized') {
			//User is logged into Facebook, but not your App
			goLogin();
			//Go to function

		} else {
			//User is not logged into Facebook at all
			window.top.location = 'https://www.facebook.com/index.php';
		}
	});
	//End of Get Login Response

};
//FB init

// Load the SDK asynchronously
( function(d) {
		var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		if (d.getElementById(id)) {
			return;
		}
		js = d.createElement('script');
		js.id = id;
		js.async = true;
		js.src = "//connect.facebook.net/en_US/all.js";
		ref.parentNode.insertBefore(js, ref);
	}(document));

// Here we run a very simple test of the Graph API after login is successful.

function goLogin() {
	FB.login(function(response) {

		//	$('.loggedIn').css('display', 'block');
		//	$('.loggedOff').css('display', 'none');
		var oauth_url = 'https://www.facebook.com/dialog/oauth/';
		oauth_url += '?client_id=502984029815829';
		//Your Client ID
		oauth_url += '&redirect_uri=' + 'https://apps.facebook.com/technovation_page/';
		//Send them here if they're not logged in
		//oauth_url += '&scope=user_about_me,user_location,user_photos';
		//email,publish_actions,user_birthday,user_likes';

		window.top.location = oauth_url;

		if (response.authResponse) {
			// The person logged into your app

			console.log("ok");
		} else {
			// The person cancelled the login dialog
			window.top.location = 'https://facebook.com/technovation.12';
		}

	});
}

// This testAPI() function is only called in those cases.
function testAPI() {
	console.log('Welcome!  Fetching your information.... ');
	FB.api('/me', function(response) {
		//console.log(response);
		$('#welcome').html(response.name);
	});

	FB.api('/me/picture', function(response) {
		//console.log(response);
		//console.log('Good to see you, ' + response.name + '.');
		$('#images').html('<img src="' + response.data.url + '" class ="img-circle img-responsive " alt="photos" >');
	});
}

//Function
function postAPI() {
	FB.api('/technovation.12/albums', function(response) {

		//console.log(response.data);
		var info = response.data;

		var albumBigObj = new Array();
		var albumBigName = new Array();
		for (var i in info ) {

			//console.log(info[i].id + ' ' + info[i].name);

			var albumId = info[i].id;
			albumBigObj.push(albumId);
			var albumName = info[i].name;
			albumBigName.push(albumName);

		}

		var num = getRandomInt(0, 13);

		//if (albumId === "318158381589688") {
		FB.api('/' + albumBigObj[num] + '/photos', function(response) {
			//console.log(response.data);
			//Array of Objects
			//var albumObj = response.data;
			//albumBigObj = albumObj.join();
			//console.log(albumBigObj);
			var imgObj = response.data;
			var $photoSet = $('#photoSet');
			var $photoStore = '<p>' + albumBigName[num] + ' </p>';
			//$photoStore = '<div class="row col-lg-4 col-sm-4">';
			//length 10

			for (var i = 0; i < imgObj.length; i++) {
				//length = 8
				//for (var j = 0; j < imgObj[i].images.length; j++) {
				imgGot = imgObj[i].images[3].source;
				//$photoStore = '<div>';
				$photoStore += '<img src= "' + imgGot + '"   width="300px" height="300" alt="photos" >';
				//$photoStore = '</div>';
				//}

			}

			$photoSet.html($photoStore);
		});

		//}

		/*	FB.api('/' + albumId + '/photos', function(response) {
		 console.log(response.data);
		 //Array of Objects
		 //var albumObj = response.data;
		 //albumBigObj = albumObj.join();
		 //console.log(albumBigObj);

		 });*/

		/*var $photoSet = $('#photoSet');
		 var $photoStore;
		 var imgObj = response.data;
		 //$photoStore = '<div class="row col-lg-4 col-sm-4">';
		 for (var i = 0; i < imgObj.length; i++) {
		 for (var j = 0; j < imgObj[i].images.length; j++) {
		 $photoStore += '<img src="' + imgObj[i].images[j].source + '" class ="thumbnail img-responsive" alt="photos" >';
		 }
		 }
		 //	$photoStore = '</div>';
		 $photoSet.html($photoStore);
		 */
	});

}

function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}

function shareUI() {
	//var message= 'Please visit Technovation App';
	/*var requestSend = 'https://www.facebook.com/dialog/apprequests?';
	 requestSent += 'app_id=502984029815829';
	 requestSent += '&message=Facebook%20Dialogs%20are%20so%20easy!';
	 requestSent += '&redirect_uri=https://apps.facebook.com/technovation_page/';

	 window.top.location = requestSend;
	 */
	FB.ui({
		method : 'apprequests',
		message : 'Check out the Technovation Facebook application',
		title : 'Technovation Facebook Application ',
		redirect_uri : 'https://apps.facebook.com/technovation_page/',
		max_recipients : 25 
	},function requestCallback(response){
		console.log("test");
	} );
}
