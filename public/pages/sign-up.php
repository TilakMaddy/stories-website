<?php

######## SIGN UP form ##########
// with validation

if(isset($_GET['first_name']) && isset($_GET['last_name']) && isset($_GET['email']) && isset($_GET['password'])){
    if(!empty($_GET['first_name']) && !empty($_GET['last_name']) && !empty($_GET['email']) && !empty($_GET['password'])){
        
        // We now have all the required details        
        echo ' <div class="card-panel teal lighten-2">You have signed up !</div>';        
        
    }
}

?>

<div class="container row signup">
    <form class="col s12" method="get" action="">

        <div class="row">
            <div class="input-field col s6">
                <input id="first_name" type="text" class="validate" name="first_name">
                <label for="first_name ">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate" name="last_name">
                <label for="last_name ">Last Name</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate" name="email">
                <label for="email white-text">Email</label>
            </div>
            <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password">
                <label for="password white-text">Password</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>

    </form>
</div>


<style type="text/css">
    body {
        background: white;
    }
    
    .input-field label {
        font-weight: bolder;
    }
</style>