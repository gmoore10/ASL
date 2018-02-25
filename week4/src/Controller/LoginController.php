<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login")
     */
    public function index()
    {
        //phpinfo();
        $client= new \Google_Client();
        $client->setApplicationName('School Github Client');// to set app name
        $client->setClientId('955493671398-tfqdpdjqih875eucq609c1vnc28bpfui.apps.googleusercontent.com');// to set app id or client id
        $client->setClientSecret('F53CZXUy7LfzDIRY-rUZcv2n');// to set app secret or client secret
        $client->setRedirectUri('http://localhost:8000/login/redirect');// to set redirect uri
        $client->setScopes('email');
        $client->setHostedDomain('http://localhost');// to set hosted domain (optional)
        $url= $client->createAuthUrl();// to get login url
        echo '<a href="' . $url . '">Log in with Google!</a>';die;
        //return $this->render('login/index.html.twig');
    }

    /**
     * @Route("/login/redirect")
     */
    public function redirectTest()
    {
        $request = Request::createFromGlobals();

        $client= new \Google_Client();
        $client->setApplicationName('School Github Client');// to set app name
        $client->setClientId('955493671398-tfqdpdjqih875eucq609c1vnc28bpfui.apps.googleusercontent.com');// to set app id or client id
        $client->setClientSecret('F53CZXUy7LfzDIRY-rUZcv2n');// to set app secret or client secret
        $client->setRedirectUri('http://localhost:8000/login/redirect');// to set redirect uri
        //$client->setHostedDomain('your hosted domain');// to set hosted domain (optional)
        $service = new \Google_Service_Oauth2($client);
        $code=$client->authenticate($request->query->get('code'));// to get code
        $client->setAccessToken($code);// to get access token by setting of $code
        $userDetails=$service->userinfo->get();// to get user detail by using access token
        var_dump($userDetails);die;
    }
}

?>