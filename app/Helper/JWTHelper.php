<?php

namespace App\Helper;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTHelper
{
 public static function createToken($userEmail , $useID){
     $key ="123-qwe-rty";
     $payload = [
         "iss" => "localhost",
         "iat" => time(),
         "exp" => time() + 60*60,
         "email" => $userEmail,
         "useID" => $useID
     ];

     return JWT::encode($payload, $key, 'HS256');
 }

    public static function DecodeToken($token){
        try {
            $key = "123-qwe-rty";
            return JWT::decode($token,new Key($key,'HS256'));

        } catch (Exception $exception) {
            return "Unauthorized";
        }



    }
}
