<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jenny Chau's Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <a name="top"></a>
    <div class="container">
        <div class="header">
            <a href="/"><img class="logo" src="/img/logo.png"></a>
        </div>

        <div class="nav">
            <a class="nav-item currentlink" href="/">Work</a>
            <a class="nav-item" href="/about">About</a>
            <a class="nav-item" href="/contact">Contact</a>
        </div>

        <div class="main">
            <h2>Designs</h2>
            <div class="gallery">
                <div><a href="/designs/logos/karls/"> <img class="small" src="img/designs/logos/karls.jpeg"></a></div>
                <div><a href="/designs/lychee-letters"> <img class="small" src="img/designs/lychee-letters/lychee-letters-1.png"></a></div>
                <div><a href="/designs/logos/cheesesteak/"> <img class="small" src="/img/designs/logos/cheeseteak-logo.png"></a></div>
                <div><a href="/designs/packaging/perfect-pills/"> <img class="small" src="/img/designs/packaging/perfect-pills.jpg"></a></div>
            </div>

            <h2>Illustrations</h2>
            <div class="gallery">
                <!-- <div><a href="/illustrations/blonde/"> <img class="small" src="img/illustrations/retro-barbie-1.png"></a></div>
                <div><a href="/illustrations/clown/"> <img class="small" src="/img/illustrations/clown.png"></a></div>
                <div><a href="/illustrations/love-bird/"> <img class="small" src="/img/illustrations/love-bird.png"></a></div>
                <div><a href="/illustrations/roomies-series/"> <img class="small" src="/img/illustrations/watermelon-treats.png"></a></div>
                <div><a href="/illustrations/witch/"> <img class="small" src="/img/illustrations/witch.png"></a></div>
                <div><a href="/illustrations/plants-pattern/"> <img class="small" src="/img/illustrations/pattern-1.png"></a></div>
                <div><a href="/illustrations/flowers-pattern/"> <img class="small" src="/img/illustrations/flowers-pattern.png"></a></div> -->

                <?php
$dirname = "img/illustrations/";
$images = glob($dirname."*.png");

foreach($images as $image) {
    echo '<div><img class="small" src="'.$image.'" /></div>';
}
       ?>

            </div>


        </div>



        <div class="footer">
            <p>&copy; Copyright Jenny Chau 2020</p>
        </div>
    </div>
    <a href="#top" class="top"><i class="fas fa-arrow-circle-up"></i></a>
</body>

</html>
