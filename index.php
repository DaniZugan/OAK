<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAK</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<header>
        <div class="logo">
            <img src="logo.png">
        </div>
        <!--header menu-->
        <div class="header-buttons" onclick="cross(this)">
        <button id="dropdown">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>
        <div class="dropdown-list" id="drop">
            <a href="events.html">Events</a>
            <a href="gallery.html">Gallery</a>
            <a href="novice.html">Novice</a>
            <a href="articles.html">Articles</a>
            <a href="about.html">About us</a>
        </div>
        <button onclick="AuthenticationForm()">prijava</button>
    </div>
</header>

    
    <main>
        <section id="home">
            <h1>Obalni Alpinistični Klub</h1>
            
        </section>

        
    </main>


    <footer>
        <p>&copy; 2023 OAK</p>
    </footer>

    <script src="script.js"></script>
<script>
	function AuthenticationForm() {
  		document.getElementById("demo").innerHTML = "Hello World";
	}
</script>
</body>
</html>