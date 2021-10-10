<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
// class RegistrationController {

// 	public function home() {

// 		// $template_engine = get_template_engine();
// 		// echo $template_engine->render('homepage');

// 	}

// 	public function registrationIndex(){
// 		// $articles = getBlogUsers();
// 		echo "Registration";

// 		// $template_engine = get_template_engine();
// 		// echo $template_engine->render('blog', ['articles' => $users]);
// 	}
// }

class RegistrationController {

	public function registrationForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form');

	}

	public function handleRegistrationForm(){
		// Hier wordt zo het form afgehandeld

		$errors = [];

		// Checks: valideren of email  echt geldig email is
		$email = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL);
		$wachtwoord = trim( $_POST['wachtwoord']);

		if ( $email === false ) {
			$errors['email'] = 'Geen geldig email ingevuld';
		}

		// Checks: wachtwoord minimaal 6 tekens bevat
		if (strlen( $wachtwoord ) <6){
			$errors['wachtwoord'] = 'Geen geldig wachtwoord, (minimaal 6 tekens)';
		}

		if ( count( $errors ) === 0) {
			// Opslaan van de gebruiker

			//Checken of de gebruiker al bestaat
			$connection = dbConnect();
			$sql = "SELECT * FROM `gebruikers` WHERE `email` = :email";
			$statement = $connection->prepare ( $sql );
			$statement->execute( ['email' => $email ] );

			if ( $statement->rowCount() === 0) {
				//Als die er niet is, dan verder met opslaan
				$sql = "INSERT INTO `gebruikers` (`email`, `wachtwoord`) VALUEs (:email, :wachtwoord)";
				$statement = $connection->prepare( $sql );
				$safe_password = password_hash( $wachtwoord, PASSWORD_DEFAULT );
				$params = [
					'email' => $email,
					"wachtwoord" => $safe_password
				];
				$statement->execute( $params );
				
				// Doorsturen naar de bedankt pagina
				$bedanktUrl = url('register.ThankYou');
				redirect($bedanktUrl);
				// Alles hierna wordt niet meer uitgevoerd

			} else {
				//Anders foutmelding tonen
				$errors[`email`] = `Dit account bestaat al`;
			}

		}

		$template_engine = get_template_engine();
		echo $template_engine->render( 'register_form', ['errors' => $errors]);

	}

	public function registrationThankYou(){

		$template_engine = get_template_engine();
		echo $template_engine->render("register_thankyou");

	}

}

