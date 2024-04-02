<?php
    $pattern = '/[a-z]/' ; //cocokan huruf kecil
    $text ='This is a Sample Text.';
    if (preg_match($pattern, $text)){
        echo "Huruf kecil ditemukan!";
    } else{
        echo "Tidak ada huruf kecil";
    }

    $pattern = '/[0-9]+/'; //Cocokkan satu atau lebih digit
    $text ='There are 123 apples.';
    if(preg_match($pattern, $text, $matches)){
        echo "<br>";
        echo "cocokan : " .$matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

    $pattern ='/apple/';
    $replacement ='banana';
    $text ='I Like apple pie.';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo "<br>";
    echo $new_text; //output : "I like banana pie"

    $pattern = '/{n,m}/'; //cocokkan "god, "good" , "gooood", dll
    $text ='god is good';

    if(preg_match($pattern, $text, $matches)){
        echo "<br>";
        echo "Cocokkan : ".$matches[0];
    } else {
        echo "<br>";
        echo "Tidak ada yang cocok!";
    }
?>