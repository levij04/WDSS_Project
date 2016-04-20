<?php
/**
 * Created by PhpStorm.
 * User: College
 * Date: 07/04/2016
 * Time: 11:28
 */

namespace Library;


class MainController
{
    public function homepageAction($twig)
    {
        $args = array();
        $template = 'index.html.twig';
        echo $twig->render($template, $args);
    }

    public function registerAction($twig)
    {
        $args = array();
        $template = 'register.html.twig';
        echo $twig->render($template, $args);
    }

    public function loginAction($twig)
    {
        $args = array();
        $template = 'login.html.twig';
        echo $twig->render($template, $args);
    }

    public function borrowAction($twig)
    {
        $args = array();
        $template = 'borrow.html.twig';
        echo $twig->render($template, $args);
    }
    public function returnAction($twig)
    {
        $args = array();
        $template = 'return.html.twig';
        echo $twig->render($template, $args);
    }
    public function forgotAction($twig)
    {
        $args = array();
        $template = 'forgot.html.twig';
        echo $twig->render($template, $args);
    }
    public function processRegistrationAction($twig)
    {
        $args = array();
        $template = 'register.html.twig';

        $username = filter_input(INPUT_POST, "username");
        $firstName = filter_input(INPUT_POST, "firstName");
        $lastName = filter_input(INPUT_POST, "lastName");
        $email = filter_input(INPUT_POST, "email");
        $password1 = filter_input(INPUT_POST, "password1");
        $password2 = filter_input(INPUT_POST, "password2");

        if(strcmp($password1, $password2) < 0) {
            $args['message'] = 'passwords don\'t match';
            echo $twig->render($template, $args);
            return;
        }

        $db = new DBt();
        $table = 'user';
        $columns = array('Fname', 'Lname', 'Email', 'Username', 'Password', 'Timestamp');
        $values = array($firstName, $lastName, $email, $username, $password1, time());
        $result = $db->insert($table, $columns, $values);



        if($result) {
            $args['message'] = 'success';
        } else {
            $args['message'] = 'failure';
        }



        echo $twig->render($template, $args);
    }

}