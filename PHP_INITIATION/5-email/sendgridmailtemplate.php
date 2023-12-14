<?php
// A VOIR AVEC PLUS DE TARD
require 'vendor/autoload.php'; // If you're using Composer (recommended)
define('MA_CLER_API', 'SG.8Q9Z3ZQ9QZq');

$email = new \SendGrid\Mail\Mail();
$email->setFrom("test@example.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("test@example.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html",
    "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));

try {
    $response = $sendgrid->send($email);
    
} catch (Exception $e) {
    echo 'Caught exception: ' . $e->getMessage() . "\n";
}
