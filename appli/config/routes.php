<?php

Router::addRule('/books/:id/:keyname',array('controller' => 'books', 'action' => 'view')); // add simple rule    
Router::addRule('/test/:id/:keyname',array('controller' => 'tagueule', 'action' => 'view')); // add simple rule 


?>