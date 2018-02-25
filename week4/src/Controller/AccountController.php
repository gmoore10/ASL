<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Controller\LoginHandler;

class AccountController extends Controller
{
    /**
     * @Route("/account", name="account")
     */
    public function index()
    {
        $session = new Session();
        if($session->isStarted() === 0)
        {
            $session->start();
        }

        $request = Request::createFromGlobals();

        if($session->get('loggedIn') !== null && $session->get('loggedIn') === true)
        {
            $givenName = $session->get('givenName');

            $login = new LoginHandler();
            $userDetails = $login->getUserDetails($session, $request);
            $driveInfo = $login->getDriveInfo($session, $request);

            return $this->render('account/index.html.twig', 
                                    array("givenName" => $givenName, 
                                          "email" => $userDetails->email, 
                                          "storageLimit" => $driveInfo->storageQuota->limit, 
                                          "storageUsage" => $driveInfo->storageQuota->usageInDrive));
        } 
        else
        {
            return $this->redirectToRoute('login');
        }
    }

    /**
     * @Route("/account/logout")
     */
    public function logout() 
    {
        $session = new Session();
        if($session->isStarted() === 0)
        {
            $session->start();
        }

        $request = Request::createFromGlobals();

        $login = new LoginHandler();
        $login->logout($session, $request);

        return $this->redirectToRoute('login');
    }
}

?>