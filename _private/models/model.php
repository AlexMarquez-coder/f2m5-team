<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `users`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

// function getAllTopics(){
// 	$connection = dbConnect();
// 	$sql = 'SELECT * FROM `topics`';
// 	$statement = $connection->query($sql);
// 	$topics = $statement->fetchAll();
	
// 	return $topics;
// }

function addTopic($title, $description){

	$connection = dbConnect();
		$sql = "INSERT INTO `topics` (`id`, `title`, `description`) VALUES (NULL, :title, :description );";
		// echo $sql;
		$statement = $connection->prepare($sql);
		$result = $statement->execute([
			'title' => $title, 
			'description' => $description
		]);

		return $result;
}

function updateTopic($topicId,$newTitle,$newDescription){
		$connection = dbConnect();
		$sql = "UPDATE `topics` SET `title` = :new_title, `description` = :new_description WHERE `topics`.`id` = :topic_id;";
		$statement = $connection->prepare($sql);
		$result = $statement->execute([
			'new_title' => $newTitle,
			'new_description' => $newDescription,
			'topic_id' => $topicId
		]);
		
		return $result;
} 

function deleteTopic($topicToDelete){
		$connection = dbConnect();
		$sql = "DELETE FROM `topics` WHERE `topics`.`id` = :topic_id";
		$statement = $connection->prepare($sql);
		$statement->execute([
			'topic_id' => $topicToDelete
		]);
 
		return $statement->rowCount();
}

function getAllTopics(){

	$connection = dbConnect();
	$sql = "SELECT * FROM `topics`ORDER BY `title` ASC";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
 
}

function getAllBlogPosts(){

	$connection = dbConnect();
	$sql = "SELECT * FROM `blogs`ORDER BY `created_at`DESC";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
 
}

function getBlogPost($slug){

	$connection = dbConnect();

	$sql = "SELECT * FROM `blogs` WHERE slug = :slug";
	$statement = $connection->prepare($sql);
	$statement->execute(
		[
			'slug'=> $slug
		]
	);
	
	return $statement->fetch();
}