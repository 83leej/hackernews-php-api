<?php

require_once('../HackerNews.php');


//initialize our class
$api = new HackerNews();

//get the list of top 100 stories
$top_items_full= $api->get_job_stories_ids();

//slice that down to 5
$top_items = array_slice($top_items_full, 0, 5);

var_dump($top_items_full);

foreach ($top_items as $item_id) {
    $item 	= $api->get_item_data_by_id($item_id);
  #  $user 	= $api->get_user_data_by_id($item['by']);

    echo ' <hr>
    <a target="_blank" href="'.$item['url'].'">'.
    $item['title'].'
        </a> By';
    echo $item['by'].'<br>';
    echo $item['score'].'<br>';
    echo $item['time']." hours ago <br>";
}
