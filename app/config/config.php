<?php
    define($DS,DIRECTORY_SEPARATOR);
    define($APP,"app".$DS);
    
    define($CONFIG,array("CONTROLLER"=>$APP."controllers".$DS,
                        "VIEWS"=>$APP."views".$DS,
                        "MODEL"=>$APP."model".$DS,
                        "EXT_PHP"=>'.php'));
    define($CATEGORIES,array("books","electronics","halloween_items",
                                "home_accessories","mens_fashion","womens_fashion"));