<?php

namespace Website\Controllers;


class TestController {

	public function queriesTesten() {

		// Alle topics ophalen
			// $topics = getAllTopics();
			// print_r($topics);


		// Nieuwe topic maken
			$title = "depressie2";
			$description = "Alles over neerslachtige gevoelens2";
			$result = addTopic($title, $description);

		// Topic aanpassen
			// $newTitle = 'Verandering2';
			// $newDescription = 'Verandering testen2';
			// $topicId = 10;

			// $result = updateTopic($topicId,$newTitle,$newDescription);
			// var_dump($result);

		//Topic verwijderen
		$topicToDelete = 14;
		$rowsDeleted = deleteTopic($topicToDelete);
		var_dump($rowsDeleted);

		// foreach($topics as $topic){
		// 	echo $topic ['id']. '<br>';
		// 	echo $topic ['title']. '<br>';
		// 	echo $topic ['description']. '<br>';
		// }
		// print_r($topics);
	}

	public function process(){

	}
}