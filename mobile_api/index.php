        <?php
            require_once 'connectdb.php';
            //require 'categories.php';
            //require 'products.php';
            //require 'images.php';
            require 'user.php';
            echo 'boogaga';
            if($_GET!=null){
                /*if($_GET['action']=="categories"){
                    echo get_categories();            
                }
                else if($_GET['action']=="products"&&$_GET['category']!=null){
                    $products = get_products($_GET['category']);
                    echo json_encode($products, JSON_UNESCAPED_UNICODE);
                }
                else if($_GET['action']=="featured"){
                    $products = get_features();
                    echo $products;
                }
                else if($_GET['action']=="actions"){
                    echo get_actions();
                }
                else if($_GET['action']=="news"){                
                    echo json_encode(get_new_items(), JSON_UNESCAPED_UNICODE);
                }
                else */
                    if($_GET['action']=='user'&&$_GET['id']!=null){
                    echo get_user($_GET['id']);
                }
            }
        ?>

