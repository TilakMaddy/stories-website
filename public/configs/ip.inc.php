<?php

/** 

 Ecports IP address ny chekcing for commn filters and stuff 

*/

function get_ip(){
    
    $ip = getenv('HTTP_CLIENT')?:
      getenv('HTTP_X_FORWARDED_FOR')?:
      getenv('REMOTE_ADDR');
    
    return $ip;

}
