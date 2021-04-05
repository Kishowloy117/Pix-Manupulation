<?php


require __DIR__.'/vendor/autoload.php';


use Kreait\Firebase\Factory;
use Google\Cloud\Firestore\FirestoreClient;
use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;

$guzzleClient = new Client(['verify' => false]);
// $firestore = new FirestoreClient([
//     'authHttpHandler' => function (RequestInterface $request, array $options = []) use ($guzzleClient) {
//         return $guzzleClient->send($request, $options);
//     }
// ]);

$factory = (new Factory)
    ->withServiceAccount('imagemanu104117-firebase-adminsdk-8l242-de7e694627.json')
    ->withDatabaseUri('https://imagemanu104117-default-rtdb.firebaseio.com/');

    
    $auth = $factory->createAuth();
  //  $database = $factory->createDatabase();
    
?>