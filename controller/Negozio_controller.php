<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestINterface as Request;
use Slim\Factory\AppFactory;

require_once 'Negozio.php';
require_once 'Ordine.php';
require_once 'OrdineFisico.php';
require_once 'OrdineOnline.php';
require_once 'Articolo.php';
require_once 'Articolo_venduto.php';

Class Negozio_controller {
    
    public function index(Request $request, Response $response, $args){
        $negozio = new Negozio ("Nike", "123456789", "Via Itis Meucci", "www.nike.com", "78");

        $response->getBody()->write(json_encode($negozio));
        return $response -> withHeader('Content-Type, application/json');
    }
}