<?php
class Misc {
  // Properties
  private static $encrypt_method = "AES-256-CBC";
  private static $secret_key     = 'Delecious';
  private static $secret_iv      = '54a6Ade8f76';

  // Methods

  public static function dec_enc($type, $string) 
  {
    $output = false;
    $encrypt_method=self::$encrypt_method;
    $secret_key=self::$secret_key;
    $secret_iv=self::$secret_iv;
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $type == 'encrypt' ) {
    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = substr(base64_encode($output), 0, -2);
    }
    else if( $type == 'decrypt' ){
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
    }
  function get_name() {
    return $this->name;
  }
}
?>