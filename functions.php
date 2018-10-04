<?php
function updateAboutme($db, $about_me_text){
    $query = $db->prepare("UPDATE `about_me` SET `text`=:text WHERE `id`=1");

    $query->bindParam(':text' , $about_me_text);

    $query->execute();
}

function getAboutme($db){
    $query = $db->prepare("SELECT `text` FROM `about_me` WHERE `id`=1");
    $query->execute();
    return $query->fetch();
}

function getContentFromArrayWithKey($key, $array){
    if(array_key_exists($key, $array)){
        return $array[$key];
    }
    return 'error';
}