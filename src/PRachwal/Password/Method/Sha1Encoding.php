<?php
/**
 * This file is part of the "PasswordEncoder" project.
 * @author Jakub Kanclerz <kuba.kanclerz@creativestyle.pl>
 * Feel free to contact me
 */

namespace PRachwal\Password\Method;


use PRachwal\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod
{

    public function encode($plainText)
    {
    	$sha1 = sha1($plainText);
        return $sha1;
    }
}