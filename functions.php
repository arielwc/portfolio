<?php
function updateAboutme($db, $about_me_text){
    $query = $db->prepare("UPDATE `about_me` SET `text`=:text WHERE `id`=1");

    $query->bindParam(':text' , $about_me_text);

    $query->execute();
}

function getAboutme($db) {
    $query = $db->prepare("SELECT `text` FROM `about_me` WHERE `id`=1");
    $query->execute();
    return $query->fetch();
}

function getContentFromArrayWithKey($key, $array) {
    if (array_key_exists($key, $array)) {
        return $array[$key];
    }
    return 'error';
}

function createPortfolioproject($db, $project_title, $image, $url){
    $query = $db->prepare("INSERT INTO `portfolio` (`project_title`, `image`, `url`) VALUES (:project_title, :image, :url);");

    $query->bindParam(':project_title', $project_title);
    $query->bindParam(':image' , $image);
    $query->bindParam(':url' , $url);


    $query->execute();
}

function getProjects($db){
    $query = $db->prepare("SELECT `image` FROM `portfolio` WHERE `deleted`=0");
    $query->execute();
    return $query->fetchAll();
}

function deletePortfolioproject($db, $project_delete){
    $query = $db->prepare("UPDATE `portfolio` SET `deleted` = 1 WHERE `project_title` =:project_title;");

    $query->bindParam(':project_title', $project_delete);

    return $query->execute();
}