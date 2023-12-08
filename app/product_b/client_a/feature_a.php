<?php

function feature_a(){
    $q = "It's from feature a";
    return "it's feature a";
}

function current_feature($param){
    echo "current feature is $param";
}