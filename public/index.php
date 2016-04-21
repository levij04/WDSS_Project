<?php

require_once __DIR__ . '/../app/setup.php';
session_start();

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

$mainController = new \Library\MainController($twig);

switch ($action) {
    case 'register':
        $mainController->registerAction($twig);
        break;
    case 'login':
        $mainController->loginAction($twig);
        break;
    case 'borrow':
        $mainController->borrowAction($twig);
        break;
    case 'return':
        $mainController->returnAction($twig);
        break;
    case 'forgot':
        $mainController->forgotAction($twig);
        break;
    case 'processRegistration':
        $mainController->processRegistrationAction($twig);
        break;
    case 'processLogin':
        $mainController->Login($twig);
        break;
    case 'Logout';
        $mainController->Logout($twig);
        break;
    case 'takebook';
        $mainController->TakeBook($twig);
        break;
    case 'profile';
        $mainController->profileAction($twig);
        break;

    default:
        $mainController->homepageAction($twig);
        break;

}