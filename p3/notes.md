
forms and validation
* html5 frontend validation - types, required, pattern, ..  
  https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/Data_form_validation
  http://www.w3schools.com/html/html_form_attributes.asp

* backend filters  
  http://php.net/manual/en/filter.examples.validation.php
  http://www.w3schools.com/php/php_filter.asp

session, login
* remember me - session time   
  http://php.net/manual/en/function.session-set-cookie-params.php
* promijeniti gdje je session sacuvan  
  http://php.net/manual/en/function.session-save-path.php

example app
* forma za prijavu na php akademiju
* naslovnica, forma, success page
* prijave se pisu u fajl
* blokiranje nove prijave na razini sessiona ("Vec ste se prijavili!")

zadaca
* bootstrap na formu
  http://getbootstrap.com/
* admin vidi sve prijave uz autentikaciju


?iza upitnika kveri string
html5 input typeovi
post kod lozinki itd
get kod mjenjanja stranica itd.
unset cooki-a se radi postavljanjem expajera u proslost 
session na serveru...unset ubija sessiju (sve krece ispocetka xD) session unset, session destroy


Here are two ways:

(1) Write a JSON representation of the array object to the file.

$arr = array( [...] );
file_put_contents( 'data.txt', json_encode( $arr ) );
Then later...

$data = file_get_contents( 'data.txt' );
$arr = json_decode( $data );
(2) Write a serialized representation of the array object to the file.

$arr = array( [...] );
file_put_contents( 'data.txt', serialize( $arr ) );
Then later...

$data = file_get_contents( 'data.txt' );
$arr = unserialize( $data );
I prefer JSON method, because it doesn't corrupt as easily as serialize. You can open up the data file and make edits to the contents, and it will encode/decode back without big headaches. Serialized data cannot be changed or corrupted, or unserialize() won't work.
