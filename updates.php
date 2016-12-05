<?php

require_once('HackerNews.php');


//initialize our class
$api = new HackerNews();

//get the list of top 100 stories
$top_items_full= $api->get_updates();

//slice that down to 5
$top_items_full['items'] = array_slice($top_items_full['items'], 0, 5);

var_dump($top_items_full['items']);

foreach ($top_items_full['items'] as $item_id) {
    $item 	= $api->get_item_data_by_id($item_id);



    echo ' <hr>
    <a target="_blank" href="https://news.ycombinator.com/item?id='.$item['id'].'">'.
    $item['text'].'
        </a> By';
    echo $item['by'].'<br>';

    echo $item['time']." hours ago <br>";
}
