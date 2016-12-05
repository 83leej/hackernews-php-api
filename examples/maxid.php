<?php

require_once('../HackerNews.php');


//initialize our class
$api = new HackerNews();

//get the list of top 100 stories
$top_items_full= $api->get_maxitem();


var_dump($top_items_full);
