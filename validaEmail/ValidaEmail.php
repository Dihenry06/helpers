<?php


namespace ValidaEmail;

/**
 * Class ValidaEmail
 * @package ValidaEmail
 * @author Diogo Henrique Soares Santos
 */
class ValidaEmail
{

    public function __construct()
    {
    }

    /**
     * @param string $email
     * @return string se valido retorna o proprio email, se invalido retorna "invalid"
     */
    public function validaEmail(string $email) : string
    {
        if (filter_var($email,FILTER_VALIDATE_EMAIL)) return $email;

        return "invalid";

    }
}