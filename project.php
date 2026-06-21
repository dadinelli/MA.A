<?php
$projectTitle = $_POST["projectTitle"]
$coverImg = $_POST["coverImg"]
$importance = $_POST["importance"]
$position = $_POST["position"]

$projetList = file_get_contents("projectList.html")

#prendi da db la lista dei progetti e fai operazioni per modificarla

function add_project(){

}

function modify_list(position, projectTitle, importance, coverImg){

}

function delete_project(){
    
}

?>