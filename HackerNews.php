<?php

/**
 * HN php api based on the official api. https://github.com/HackerNews/API
 *
 * forked from https://github.com/aligajani/hacker-news-api-guzzle
 **/

require 'vendor/autoload.php';


class HackerNews  {

        private $endpoint = "https://hacker-news.firebaseio.com/v0/";

	    /*
	     * Get Higest ID which is most recent created item.
	     * @return Array of IDs
	     */

		public function get_maxitem() {

			$client = new GuzzleHttp\Client();

			$res = $client->get($this->endpoint.'maxitem.json');

			$data =  $res->json();

			return $data;
		}
	    /*
	     * Get Up to 500 new stories
	     * @return Array of IDs
	     */

		public function get_new_stories_ids() {

			$client = new GuzzleHttp\Client();

			$res = $client->get($this->endpoint.'newstories.json');

			$data =  $res->json();

			return $data;
		}

	    /*
	     * Get Up to 500 best stories
	     * @return Array of IDs
	     */

		public function get_best_stories_ids() {

			$client = new GuzzleHttp\Client();

			$res = $client->get($this->endpoint.'beststories.json');

			$data =  $res->json();

			return $data;
		}

	    /*
	     * Get Up to 500 top stories
	     * @return Array of IDs
	     */

		public function get_top_stories_ids() {

			$client = new GuzzleHttp\Client();

			$res = $client->get($this->endpoint.'topstories.json');

			$data =  $res->json();

			return $data;
		}
	    /*
	     * Get Up to 200 of the latest Ask HN stories
	     * @return Array of IDs
	     */

		public function get_ask_stories_ids() {

			$client = new GuzzleHttp\Client();

			$res = $client->get($this->endpoint.'askstories.json');

			$data =  $res->json();

			return $data;
		}
 	    /*
	     * Get Up to 200 of the latest  Show HN stories
	     * @return Array of IDs
	     */

		public function get_show_stories_ids() {

			$client = new GuzzleHttp\Client();

			$res = $client->get($this->endpoint.'showstories.json');

			$data =  $res->json();

			return $data;
		}
	    /*
	     * Get Up to 200 of the latest Job stories
	     * @return Array of IDs
	     */

		public function get_job_stories_ids() {

			$client = new GuzzleHttp\Client();

			$res = $client->get($this->endpoint.'jobstories.json');

			$data =  $res->json();

			return $data;
		}
 	    /*
	     * Changed Items and Profiles
	     * @return Array of IDs
	     */

		public function get_updates() {

			$client = new GuzzleHttp\Client();

			$res = $client->get($this->endpoint.'updates.json');

			$data =  $res->json();

			return $data;
		}
 		/*
	     * Get Item Data for a Story using ID
	     * @return Array of Item Data
	     */

		public function get_item_data_by_id($item_id) {

			$client =  new GuzzleHttp\Client();

			$item_resource = $this->endpoint."item/{$item_id}.json";

			$res = $client->get($item_resource);

			$data = $res->json();

			return $data;

		}

		/*
	     * Get User data for a User using ID
	     * @return Array of User Data
	     */


		public function get_user_data_by_id($user_id) {

			$client =  new GuzzleHttp\Client();

			$user_resource = "https://hacker-news.firebaseio.com/v0/user/" . $user_id . ".json";

			$res = $client->get($user_resource);

			$data = $res->json();

			return $data;

		}

}
