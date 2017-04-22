
<?php

$sharePage = "#"; // When clicked on GO , what to do ?where to go
$discoverPlaces = "#"; 

?>


<!--  Welcome to stoories-->

<div class="parallax-container" style="min-height:100vh;">
   <div class="section no-pad-bot">
        <div class="container"> <br>
            <br>
            <br>
            <br>
            <br>
            <h1 class="header center white-text" id="greet">Welcome to Stories !</h1>
            <div class="row center">
                <h5 class="header col s12 white-text">Share your experience</h5>
            </div>
            <br>
            <br>
            <div class="row center">
                <a href="#shareNow" class="waves-effect waves-light btn-floating">&darr;</a>
            </div>

        </div>
    </div>
    <div class="parallax">
        <img src="assets/img/Wallpaper.jpg">
    </div>
</div>

<!-- Options available -->

<div class="container infoer">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons">search</i></h2>
            <h5 class="center white-text flow-text"><b>Discover Places</b></h5>

            <p class="light white-text flow-text">What is it like when you know the best place to spend your most enjoyable days of your life. See what people say about it and ask them how they felt ! Do make the right decision cuz you have only <b>one</b> oppurtunity.
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center white-text"><i class="material-icons">library_books</i></h2>
            <h5 class="center white-text flow-text"><b>Read Experiences</b></h5>

              <p class="light white-text flow-text">By reading the stories of other people on how they spent their honeymoon find out what's <i>interesting</i> for you to do and get the best out of it. Discuss more in the comments   <span style="color:red;"> ♥ </span> and be more open.</p> 
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block"><br><br>
            <h2 class="center white-text flow-text"><i class="material-icons">mode_edit</i></h2>            
            <h5 class="center white-text flow-text"><b>Share Your Story</b></h5>
            <p class="light white-text flow-text"> Share your own experince and sit back to wait for a 5 star becuase I'm sure profiles have given you an awesome idea on celebrating honeymoon </p>
          </div>
        </div>
      </div>

    </div>
  </div>

<!-- Discover places  -->

<div class="parallax-container">
   <div class="section no-pad-bot">
        <div class="container"> <br>
            <br>
            <br>
            <br>
            <br>
            <h1 class="header center white-text" id="para-discover">Discover beautiful places</h1>
            <div class="row center">
                <h5 class="header col s12 white-text">Plan your honeymoon with delight !</h5>
            </div>
            <br>
            <br>
            <div class="row center">
                <a href="<?php echo $discoverPlaces; ?>" class="waves-effect waves-light btn-small btn-floating">&darr;</a>
            </div>

        </div>
    </div>
    <div class="parallax">
        <img src="assets/img/landscape-georgia.jpg">
    </div>
</div>

<!-- Read experiences [fake shit ]-->

<div class="container">
   
   <div class="row">       
       <div class="col s12 m12"><h3 class="white-text cursive">Read some of the experiences</h3></div>
  </div>
    
  <div class="row">
   
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/beach-side.jpg">
          <span class="card-title">Luke &amp; Christey</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias laborum quo molestias commodi fugit tempora, sint id nihil odio vel tempore quibusdam qui. Quam, dolorum eos ipsum voluptate temporibus placeat.</p>
        </div>
      </div>
    </div>
    
     <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/autumn.jpg">
          <span class="card-title">Abrhaim &amp; Sara </span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, doloribus molestias nesciunt nisi voluptatum autem debitis quas tempore. Error aperiam voluptatem iure impedit fugit nemo neque fuga voluptatibus ratione sint.</p>
        </div>
      </div>
    </div>
    
     <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/lake.jpg">
          <span class="card-title">Alex &amp; Abby</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa explicabo inventore dignissimos qui harum ea tenetur, iusto repellat cupiditate quasi nobis placeat hic ut minus blanditiis impedit similique vero aliquid?</p>
        </div>
      </div>
    </div>
  </div>
    
</div>

<!-- Share experiences section !-->

<div class="parallax-container" id="shareNow">
   <div class="section no-pad-bot">
        <div class="container"> <br>
            <br>
            <br>
            <br>
            <br><br>
            <h1 class="header center text-success cursive">Share your experience !</h1>
            <div class="row center">
                <a href="<?php echo $sharePage; ?>" class="waves-effect waves-light btn-floating btn-large" style="background-color: red;">GO</a>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="assets/img/heart_image.jpg">
    </div>
</div>

<!--  End of main section  -->
