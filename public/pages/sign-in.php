<?php

######## SIGN UP form ##########
// with validation

if(isset($_GET['email']) && isset($_GET['password'])){
    if(!empty($_GET['email']) && !empty($_GET['password'])){        
       
        echo ' <div class="card-panel teal lighten-2">Subbed !</div>';          
        
    }
}

?>

<div class="container row signup">
    <form id="form-o" class="col s12" method="get" action="">

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
                <button class="btn waves-effect waves-light" type="submit" name="action" id="login">Submit
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