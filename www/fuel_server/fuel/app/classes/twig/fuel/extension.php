<?php

class Twig_Fuel_Extension extends \Parser\Twig_Fuel_Extension
{
    public function getFunctions()
    {
        return array_merge(
            parent::getFunctions(), [
                /*
                 * Define a new function Twig
                 * Example form button
                 */
                new Twig_SimpleFunction('checkisset', array('Twig_Classes_Extension', 'isset')),
                new Twig_SimpleFunction('is_active', function ($router) {
                    return isActive($router);
                }),
                new Twig_SimpleFunction('isset_error', function ($error) {
                    return issetError($error);
                }),
                new Twig_SimpleFunction('old_input', function ($input) {
                    return oldInput($input);
                }),
                new Twig_SimpleFunction('getUserInformation', function ($field) {
                    return Auth::get($field);
                }),
                new Twig_SimpleFunction('isAdmin', function ($role) {
                    return Model_User::isAdmin($role);
                }),
            ]
        );
    }
}