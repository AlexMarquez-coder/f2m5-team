<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `users`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getUsersByEmail($email){
	$connection = dbConnect();
 	$sql        = "SELECT * FROM `gebruikers` WHERE `email` = :email";
 	$statement  = $connection->query( $sql );
	$statement->execute( ['email' => $email ] );

	if($statement->rowCount() === 1){
		return $statement->fetch();
	}

	return false;
}

function userNotRegistered($email) {
 
	// Checken of de gebruiker al bestaat
	 
	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE `email` = :email";
	$statement = $connection->prepare($sql);
	$statement->execute(['email' => $email]);
	 
	$num_rows = $statement->rowCount();
	 
	return ($num_rows === 0); // True of false
	 
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
	function createBlog($title, $desc){
		$connection = dbConnect();
		$slug = strtolower($title);
		$slug = str_replace(' ', '-', $slug);
		$sql 		= "INSERT INTO `blogs` (`title`, `description`, `slug` ) VALUES (:title, :description, :slug )";
		$statement  = $connection->prepare( $sql );

		$params = 
		[
			'title' => $title,
			'description' => $desc,
			'slug'=> $slug
		];
		$statement->execute($params);
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