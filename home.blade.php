<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="../../public/css/styles.css">-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

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
    <div style="border: 3px solid black;">
        <h2> Register </h2>
        <form action="/register2" method = "POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button> Register </button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h2> Login </h2>
        <form action="/login2" method = "POST">
            @csrf
            <input name="name" type="text" placeholder="name">            
            <input name="password" type="password" placeholder="password">
            <button> Log in </button>
        </form>
    </div>
    @endauth
    
</body>
</html>