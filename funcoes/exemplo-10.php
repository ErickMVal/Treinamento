<?php


function anon($callback){

    //Processo Lento

    $callback();

}


anon(function(){
    echo "Terminou!";
});





