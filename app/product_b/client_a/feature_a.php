<?php

function feature_a(){
    $q = "It's from feature a";
    return "it's feature a";
}

function change_from_feature_b(){
    return "here";
}

function current_feature($param){
    echo "current feature is $param";
}

function update_from_feature_a() {
    return "here";
}