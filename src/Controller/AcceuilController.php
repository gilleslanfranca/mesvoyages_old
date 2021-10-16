<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Description of AcceuilController
 *
 * @author lanfr
 */
class AcceuilController {
    //put your code here
    
    /**
     * @return Response
     */
    public function index(): Response{
        return new Response('Hello world !');
        
    }
}
