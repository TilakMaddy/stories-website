<!DOCTYPE html>
<html>

<head>
   
    <!--Google Material Icon Font hacked and stored in local library-->
    
    <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../public/assets/css/materialize.min.css" media="screen,projection" />

    <link type="text/css" rel="stylesheet" href="../../public/assets/css/my.css"/>
   
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   
    <title><?php echo $title; ?></title>

</head>

<body>

<!-- Site navigation bar from header file-->
<div class="site-nav">
    <nav>
        <div class="nav-wrapper">

            <a href="#!" class="brand-logo center">LOGO</a>

            <a href="#" data-activates="mobile-demo" class="button-collapse">
                <i class="material-icons">menu</i></a>

            <ul class="left hide-on-med-and-down">
                <li><a href="sass.html">Best Places</a></li>
                <li><a href="mobile.html">#Trending Stories</a></li>
            </ul>

            <ul class="right hide-on-med-and-down">
                <li><a href="/public/sign-up">Sign Up</a></li>
                <li><a href="/public/sign-in">Sign In</a></li>
                <li><a href="/public/share-mine">Share Mine</a></li>
            </ul>

            <ul class="side-nav" id="mobile-demo">
               <li><a href="sass.html">Best Places</a></li>
                <li><a href="mobile.html">#Trending Stories</a></li>
                <li><a href="/public/sign-up">Sign Up</a></li>
                <li><a href="/public/sign-in">Sign In</a></li>
                <li><a href="/public/share-mine">Share Mine</a></li>
            </ul>


        </div>
    </nav>
</div>


<!-- End of Site navigation bar -->
