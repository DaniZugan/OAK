<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAK</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.com/libraries/font-awesome/4.7.0">
    <script src="script.js" defer></script>
    <script src="weather.js" defer></script>
    <!--<link rel="stylesheet" href="../../public/css/styles.css">-->
    
</head>
<body>
	<?php include("includes/design-top.php");?>
	<?php include("includes/navigation.php");?>
<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0" nonce="WWs8l1ka"></script>
    <script> checkWeather()</script>

    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="home.html" class="logo">
                <img src="logo.png" alt="logo">
                <h2>OAK</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="about.html">About</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="#">Alpine school</a></li>
                <li><a href="#">Reports</a></li>
		<li><a href="members.html">Members</a></li>
		    
            </ul>
            <button class="login-btn">PRIJAVA</button>
        </nav>
    </header>

    @auth
    <p> Congrats you are logged in</p>
    <form action="/logout2" method = "POST">
        @csrf
        <button> Log out </button>
    </form>

    <div style="border: 3px solid black;">
        <h2>Create a New Post</h2>
        <form action="/create-post" method="POST">
          @csrf
          <input type="text" name="title" placeholder="post title">
          <textarea name="body" placeholder="body content..."></textarea>
          <button>Save Post</button>
        </form>
    </div>

    <div style="border: 3px solid black;"> 
        <h2>All posts</h2>
        @foreach($posts as $post)
        <div style="background-color: gray; padding: 11px;">
            <h3>{{$post['title']}}</h3>
            {{$post['body']}}
        </div>
        @endforeach
    </div>


    @else    
	<header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="home.html" class="logo">
                <img src="logo.png" alt="logo">
                <h2>OAK</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="about.html">About</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="#">Alpine school</a></li>
                <li><a href="#">Reports</a></li>
		<li><a href="members.html">Members</a></li>
		    
            </ul>
            <button class="login-btn">PRIJAVA</button>
        </nav>
    </header>
	<div class="blur-bg-overlay"></div>

	<div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            
            <div class="form-content">
                <h2>PRIJAVA</h2>
                <form action="/login2" method="POST">
                    <div class="input-field">
                        @csrf
            		<input name="name" type="text" placeholder="name">            
            		
                        <label>Username</label>
                    </div>
			
                    <div class="input-field">
                        <input name="password" type="password" placeholder="password">
                        <label>Password</label>
                    </div>
			@endauth
                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <button type="submit">Log In</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Registracija</a>
                </div>
            </div>
        </div>
<div class="form-box signup">
           
            <div class="form-content">
                <h2>Registracija</h2>
                <form action="/register2" method = "POST">
                    @csrf
			<div class="input-field">
			
                        <input name="name" type="text" placeholder="name" required>
                        <label>Enter your username</label>
                    </div>
			<div class="input-field">
				<input name="email" type="text" placeholder="email">
				<label>Enter your email</label>
			</div>
                    <div class="input-field">
                        <input name="password" type="password" placeholder="password">
                        <label>Create password</label>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" id="policy">
                        <label for="policy">
                            I agree the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit">Sign Up</button>
                </form>
		     @endauth
                <div class="bottom-link">
                    Already have an account? 
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div>
		
    <div class="row">
        <div class="col col1">
            <h1>Obalni Alpinistični Klub</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                 ridiculus mus. Donec quam felis, ultricies nec, 
                pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
                fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
            </p>
            
        </div>
        <div class="col col2">
            
            <div class="card card2">
                <div class="search">
                    <input type="text" placeholder="enter city name" spellcheck="false">
                    <button><img src="images/search.png"></button>
                </div>
<div class="weather">
                    <img src="images/rain.png" class="weather-icon">
                    <h1 class="temp"></h1>
                    <h2 class="city"></h2>
                    <div class="details">
                        <div class="col21">
                            <img src="images/humidity.png">
                            <div>
                                <p class="humidity">50%</p>
                                <p>Humidity</p>
                            </div> 
                        </div>
                        <div class="col21">
                            <img src="images/wind.png">
                            <div>
                                <p class="wind">15 km/h</p>
                                <p>Wind Speed</p>
                            </div> 
                        </div>
                    </div>
	</div>
                
                <!-- FB feed -->
                <!--<div class="fb-page" data-href="https://m.facebook.com/p/Obalni-alpinisti&#x10d;ni-klub-100086123649589/" data-tabs="timeline" data-width="350" data-height="350" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://m.facebook.com/p/Obalni-alpinisti&#x10d;ni-klub-100086123649589/" class="fb-xfbml-parse-ignore"><a href="https://m.facebook.com/p/Obalni-alpinisti&#x10d;ni-klub-100086123649589/"></a></blockquote></div> -->
            </div>
            <div class="card card3">
                     <div class="fb-page" data-href="https://m.facebook.com/p/Obalni-alpinisti&#x10d;ni-klub-100086123649589/" 
                data-tabs="timeline" data-width="290" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" 
                data-show-facepile="true"><blockquote cite="https://m.facebook.com/p/Obalni-alpinisti&#x10d;ni-klub-100086123649589/" class="fb-xfbml-parse-ignore">
                    <a href="https://m.facebook.com/p/Obalni-alpinisti&#x10d;ni-klub-100086123649589/"></a></blockquote></div> 
            

        </div>
       </div>
    <div class="linkss">
        <h3>Useful links:</h3>
        <div class="row2">
            <div class="weather">
                <h2>&mdash;°C</h2>
                <p>&mdash;</p>
                
            </div>
            <div class="l">
                <a href="https://ka.pzs.si">
                    <img src="ka-logo.png" alt="KA" />
                  </a>
		    </div>

            <div class="l">
                <a href="https://www.pzs.si">
                    <img src="pzs.jpeg" alt="PZS" />
                  </a>
                
            </div>
            <div class="l">
                <a href="http://www.slo-alp.com">
                    <img src="sloalp.jpeg" alt="SLO" />
                  </a>
                
            </div>


            </div>

    </div>
    
</body>
</html>
