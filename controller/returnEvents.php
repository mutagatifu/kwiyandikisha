<?php
/**
 * Created by PhpStorm.
 * User: Hview
 * Date: 03/12/2018
 * Time: 17:04
 */
include '../include/event.php';

$events = new Event();
 $query = $events->fetchAllEvents();
 $allevents = array();
  foreach ($query as $rows){

      $allevents[]=$rows;
  }
  //$returnJS=array('status'=>1,'message'=>"successfull",'data'=>$allevents);

  echo json_encode($allevents);

?>