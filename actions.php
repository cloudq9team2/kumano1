<?php
   $m = new MongoClient('mongodb://localhost:1234');
   $cursor = $m->tem->users->find(array('name' => 'kumano'));
   $result = $cursor->getNext();
   echo json_encode($result);
?>
