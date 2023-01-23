<?php
    $sepCounter = 0;
    echo '<h2 style="margin:15px 0 4px 0;">Main site</h2>';
    foreach(scandir('./') as $file){
        if(strpos($file, '.php')!==false && !in_array($file, ['index.php', 'grids.php'])){
            if($sepCounter==0 && strpos($file, 'footer-')!==false){
                $sepCounter++; echo '<br>';
                echo '<h2 style="margin:5px 0 4px 0;">Footer</h2>';
            }else if($sepCounter==1 && strpos($file, 'minisite-')!==false){
                $sepCounter++; echo '<br>';
                echo '<h2 style="margin:5px 0 4px 0;">Mini site</h2>';
            }else if($sepCounter==2 && strpos($file, 'topnav-')!==false){
                $sepCounter++; echo '<br>';
                echo '<h2 style="margin:5px 0 4px 0;">Top Navigation</h2>';
            }
            echo '<a href="'.$file.'" target="_blank">'.$file.'</a><br>';
        }
    }
    echo '<br>';
?>
