<?php

$i = 0;
foreach($_GET as $key => $value){
    echo $key." with a value of ".$value." <br/>";
    $i++;    
}

echo $i." values received ";


?>

    <div class="container share-o">
        <form id="shareForm" action="" method="get">

            <!-- Page Layout here -->
            <div class="row">

                <!-- Small left section -->
                <div class="col s12 m4 l4">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="card">
                                <div class="card-image">
                                    <img src="assets/img/autumn.jpg">
                                    <span class="card-title"></span>

                                    <div class="file-field input-field">
                                        <div class="btn-floating halfway-fab waves-effect waves-light red">
                                            <i class="material-icons">add</i>
                                            <input type="file" name="user_photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content input-field">
                                    
                                    <textarea type="text" id="er" class="materialize-textarea" placeholder="A short bio .. funny - weird - awesome - ridiculous - interesting and yeah .. any one liner that best describes your experience"></textarea>

                                </div>
                            </div>

                        </div>


                    </div>

                </div>

                <!-- Right big section -->
                <div class="col s12 m8 l8">


                    <div class="container">
                        
                        <!-- your_name, spouse_name-->
                        <div class="row">

                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="your_name" type="text" class="validate" name="your_name">
                                <label for="your_name">Your Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="spouse_name" type="text" class="validate" name="spouse_name">
                                <label for="spouse_name">Spouse's Name</label>
                            </div>

                        </div>

                       <!-- brief_desc  -->
                        <div class="row">

                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea form="shareForm"name="brief_desc" id="icon_prefix2" class="materialize-textarea"></textarea>
                                <label for="icon_prefix2">Describe your experience in a brief ...</label>
                            </div>

                        </div>

                       <!-- radio_*{loved_it|not_cool|moderate} -->
                        <div class="row">

                            <p class="input-field range-field col s12 m6 inline">
                                <i class="material-icons prefix">grade</i>

                                <input name="radio_loved_it" type="radio" id="test1" />
                                <label for="test1">Loved it !</label>

                                <input name="radio_moderate" type="radio" id="test2" />
                                <label for="test2">Moderate</label>

                                <input name="radio_not_cool" type="radio" id="test3" />
                                <label for="test3">Not cool</label>

                            </p>

                        </div>

                       <!-- the_date -->
                        <div class="row">

                            <p class="input-field range-field col s12">
                                <i class="material-icons prefix">av_timer</i>
                                <input type="date" class="datepicker" name="the_date">
                            </p>

                        </div>

                       <!-- the_place -->
                        <div class="row">

                            <div class="input-field col s12">

                                <i class="material-icons prefix">add_location</i>
                                <input type="text" id="autocomplete-input" class="autocomplete" name="the_place">
                                <label for="autocomplete-input">Where did you celebrate ?</label>

                            </div>

                        </div>

                        <div class="row">

                            <button class="btn waves-effect waves-light col s12 m6 offset-md-3" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                          </button>

                        </div>
                        
                    </div>


                </div>

            </div>
            
        </form>

    </div>


    <style type="text/css">
        body {
            background: white;
        }
        
        .share-o {
            margin-top: 34px;
        }
        
        .input-field label {
            font-weight: bolder;
        }

    </style>
