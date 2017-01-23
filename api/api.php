<?php
//FRONT CONTROLLER
require_once('../doctrine/AutoLoad.php');

$bootstrap = new Bootstrap();
$gestor = $bootstrap->getEntityManager();

switch($_GET["api"]){
    case "artist":
        
        $artist = new Artist();
        
        $query = $gestor->createQuery('SELECT r FROM artist r');
        $artists = $query->getResult();
        $data_to_json=array();
        foreach($artists as $item){
            $data_to_json[] = $item->getArray();
        }
        header('Content-Type: application/json');
        echo json_encode($data_to_json);
        
        break;
        
    case "disk":
        
        $disk = new Disk();
        
        $query = $gestor->createQuery('SELECT r FROM disk r');
        $disks = $query->getResult();
        $data_to_json=array();
        foreach($disks as $item){
            $data_to_json[] = $item->getArray();
        }
        header('Content-Type: application/json');
        echo json_encode($data_to_json);
        
        break;
        
    case "song":
        
        $song = new Song();
        
        $query = $gestor->createQuery('SELECT r FROM song r');
        $songs = $query->getResult();
        $data_to_json=array();
        foreach($songs as $item){
            $data_to_json[] = $item->getArray();
        }
        header('Content-Type: application/json');
        echo json_encode($data_to_json);
        
        break;
        
    case "diskSong":

        $diskSong = new DiskSong();
        
        $query = $gestor->createQuery('SELECT r FROM diskSong r');
        $diskSongs = $query->getResult();
        $data_to_json=array();
        foreach($diskSongs as $item){
            $data_to_json[] = $item->getArray();
        }
        header('Content-Type: application/json');
        echo json_encode($data_to_json);
        
        break;
}
