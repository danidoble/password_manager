<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptController extends Controller
{
    //
    public static function crypt($data,$key_first,$key_second): string
    {
        $first_key = base64_decode($key_first);
        $second_key = base64_decode($key_second);

        $method = "aes-256-cbc";
        $iv_length = openssl_cipher_iv_length($method);
        $iv = openssl_random_pseudo_bytes($iv_length);

        $first_encrypted = openssl_encrypt($data,$method,$first_key, OPENSSL_RAW_DATA ,$iv);
        $second_encrypted = hash_hmac('sha3-512', $first_encrypted, $second_key, true);

        return base64_encode($iv.$second_encrypted.$first_encrypted);
    }

    //
    public static function decrypt($input,$key_first,$key_second){
        $first_key = base64_decode($key_first);
        $second_key = base64_decode($key_second);
        $mix = base64_decode($input);

        $method = "aes-256-cbc";
        $iv_length = openssl_cipher_iv_length($method);

        $iv = substr($mix,0,$iv_length);
        $second_encrypted = substr($mix,$iv_length,64);
        $first_encrypted = substr($mix,$iv_length+64);

        $data = openssl_decrypt($first_encrypted,$method,$first_key,OPENSSL_RAW_DATA,$iv);
        $second_encrypted_new = hash_hmac('sha3-512', $first_encrypted, $second_key, true);

        if (hash_equals($second_encrypted,$second_encrypted_new)) {
            return $data;
        }
        return false;
    }

}
