<?php 

/*this section defines the constants used in the logic section
*/
define("DEFAULT_NO_OF_WORDS", 5);
define("DEFAULT_NO_OF_SPECIAL_CHARS", 0);
define("DEFAULT_WORDS_SEPERATOR", '-');
define("DEFAULT_OPTION", 'lower');
define("DEFAULT_INC_NUMBER", false);

/*Get value from Post of the Default value */
$no_of_words = isset($_POST['no_of_words'])?$_POST['no_of_words']:DEFAULT_NO_OF_WORDS;
$no_of_special_chars= isset($_POST['no_of_special_chars'])?$_POST['no_of_special_chars']:DEFAULT_NO_OF_SPECIAL_CHARS;
$word_seperator= isset($_POST['word_seperator'])?$_POST['word_seperator']:DEFAULT_WORDS_SEPERATOR;
$options= isset($_POST['options'])?$_POST['options']:DEFAULT_OPTION;
$include_number= isset($_POST['include_number'])?($_POST['include_number']=='Y'?true:false):DEFAULT_INC_NUMBER;

$pwd = generate_pwd();

function string generate_pwd()
{

}

?>