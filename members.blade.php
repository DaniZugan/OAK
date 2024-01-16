<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAK Members</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/mem.css')}}">    
    


    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="{{ url('/') }}" class="logo">
                <img src="{{url('/Images/logo.png')}}" alt="logo">
                <h2>OAK</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="#">About</a></li>
                <li><a href="{{ url('/posts') }}">Events</a></li>
                <li><a href="{{ url('/alpineschool') }}">Alpine school</a></li>
                <li><a href="#">Reports</a></li>
		        <li><a href="{{ url('/clani') }}">Members</a></li>
            </ul>
            <button class="profile-btn">
                <img src="{{url('/Images/user.png')}}" alt="buttonpng">

            </button>
        </nav>
    </header>
    <body>
        <div class="blur-bg-overlay"></div>
        <div class="user-popup">
            <span class="close-btn material-symbols-rounded">close</span>
            <div class="user-box">
                <div class="user-info">
                    <h2>Alpinist name</h2>
                    <h5>Member since 2017</h5>
                    <div class="personal">
                        <div class="details">
                            
                            <div class="info">
                                <div class="email">Email: email@gmail.com</div>
                                <div class="p">Phone: +38649930202</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    At volutpat diam ut venenatis tellus in. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae
                                   . Hac habitasse platea dictumst quisque sagittis purus.
                                </p>
                                
                                <div class="routes"><a href="#">Routes</a></div>
                            </div>
                        </div>
                        <div class="profile-image">
                            <img src="{{url('/Images/alpinist.webp')}}" alt="Alpinist Image"/>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        



    <div class="headline"> Our Members </div>
    <div class="members">
        
        <button class="circle">
            
            <div class="mm">Name of alpinist</div>
           

        </button>
        <button class="circle">
            <div class="mm">Name of alpinist</div>

        </button>
        <button class="circle">
            <div class="mm">Name of alpinist</div>

        </button>
        <button class="circle">
            <div class="mm">Name of alpinist</div>

        </button>
        <button class="circle">
            <div class="mm">Name of alpinist</div>

        </button>
        <button class="circle">
            <div class="mm">Name of alpinist</div>

        </button>
    </div> 
    <script src="mem.js" defer></script>

</body>
</html>