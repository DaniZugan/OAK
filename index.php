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

            
            <div class="dropdown-list" id="drop">
                <a href="#events">Events</a>
                <a href="#gallery">Gallery</a>
                <a href="#novice">Novice</a>
                <a href="#articles">Articles</a>
                <a href="#about">About us</a>
            </div>
        </button>
            <button onclick="alert('prijava')">prijava</button>
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
</body>
</html>