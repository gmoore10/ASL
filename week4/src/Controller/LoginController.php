<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        //phpinfo();
        $session = new Session();
        if($session->isStarted() === 0)
        {
            $session->start();
        }

        //set up session variables
        $session->set('appName', "School Github Client");
        $session->set('clientId', "955493671398-tfqdpdjqih875eucq609c1vnc28bpfui.apps.googleusercontent.com");
        $session->set('clientSecret', "F53CZXUy7LfzDIRY-rUZcv2n");
        $session->set('redirectUri', "http://localhost:8000/login/redirect");
        $session->set('scopes', array("email", "https://www.googleapis.com/auth/drive.readonly"));
        $session->set('hostedDomain', "http://localhost");

        //set up google client
        $client = new \Google_Client();
        $client->setApplicationName($session->get('appName'));
        $client->setClientId($session->get('clientId'));
        $client->setClientSecret($session->get('clientSecret'));
        $client->setRedirectUri($session->get('redirectUri'));
        $client->setScopes($session->get('scopes'));
        $client->setHostedDomain($session->get('hostedDomain'));

        $login = new LoginHandler();

        $url = $login->generateLoginUrl($session);
        return $this->render('login/index.html.twig',
                            array('loginUrl'=>$url));
    }

    /**
     * @Route("/login/redirect")
     */
    public function redirectTest()
    {
        $session = new Session();
        if($session->isStarted() === 0)
        {
            $session->start();
        }

        $request = Request::createFromGlobals();

        $client = new \Google_Client();
        $client->setApplicationName($session->get('appName'));
        $client->setClientId($session->get('clientId'));
        $client->setClientSecret($session->get('clientSecret'));
        $client->setRedirectUri($session->get('redirectUri'));
        $client->setScopes($session->get('scopes'));
        $client->setHostedDomain($session->get('hostedDomain'));

        $login = new LoginHandler();

        $service = $login->callbackFromGoogle($session, $request);

        $userDetails=$service->userinfo->get();

        return $this->redirectToRoute('account');
    }
}

class LoginHandler
{
    public function generateLoginUrl(SessionInterface $session)
    {
        $client = new \Google_Client();
        $client->setApplicationName($session->get('appName'));
        $client->setClientId($session->get('clientId'));
        $client->setClientSecret($session->get('clientSecret'));
        $client->setRedirectUri($session->get('redirectUri'));
        $client->setScopes($session->get('scopes'));
        $client->setHostedDomain($session->get('hostedDomain'));
        $url= $client->createAuthUrl();
        
        return $url;
    }
    /**
     * @return static
     */
    public function callbackFromGoogle(SessionInterface $session, $request)
    {
        $client = new \Google_Client();
        $client->setApplicationName($session->get('appName'));
        $client->setClientId($session->get('clientId'));
        $client->setClientSecret($session->get('clientSecret'));
        $client->setRedirectUri($session->get('redirectUri'));
        $client->setScopes($session->get('scopes'));
        $client->setHostedDomain($session->get('hostedDomain'));
        
        $service = new \Google_Service_Oauth2($client);

        $token = $client->fetchAccessTokenWithAuthCode($request->query->get('code'));

        $session->set('token', $token);

        $code=$client->authenticate($request->query->get('code'));
        
        $userDetails = $service->userinfo->get();

        $session->set('givenName', $userDetails->givenName);

        $session->set('loggedIn', true);

        return $service;
    }

    public function logout(SessionInterface $session, $request) 
    {
        $client = new \Google_Client();
        $client->setApplicationName($session->get('appName'));
        $client->setClientId($session->get('clientId'));
        $client->setClientSecret($session->get('clientSecret'));
        $client->setRedirectUri($session->get('redirectUri'));
        $client->setScopes($session->get('scopes'));
        $client->setHostedDomain($session->get('hostedDomain'));
        $client->setAccessToken($session->get('token'));

        $client->revokeToken();
        $session->invalidate();

        return true;
    }

    public function getUserDetails(SessionInterface $session, $request) 
    {        
        $client = new \Google_Client();
        $client->setApplicationName($session->get('appName'));
        $client->setClientId($session->get('clientId'));
        $client->setClientSecret($session->get('clientSecret'));
        $client->setRedirectUri($session->get('redirectUri'));
        $client->setScopes($session->get('scopes'));
        $client->setHostedDomain($session->get('hostedDomain'));
        $client->setAccessToken($session->get('token'));

        $service = new \Google_Service_Oauth2($client);

        $userDetails = $service->userinfo->get();

        return $userDetails;
    }

    public function getDriveInfo(SessionInterface $session, $request) 
    {        
        $client = new \Google_Client();
        $client->setApplicationName($session->get('appName'));
        $client->setClientId($session->get('clientId'));
        $client->setClientSecret($session->get('clientSecret'));
        $client->setRedirectUri($session->get('redirectUri'));
        $client->setScopes($session->get('scopes'));
        $client->setHostedDomain($session->get('hostedDomain'));
        $client->setAccessToken($session->get('token'));

        $service = new \Google_Service_Drive($client);

        $storageDetails = $service->about->get(array("fields"=>"storageQuota"));

        return $storageDetails;
    }
}

?>