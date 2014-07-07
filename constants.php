<?php 

/*this section defines the constants used in the logic section
*/
define("DEFAULT_NO_OF_WORDS", 5);
define("DEFAULT_NO_OF_SPECIAL_CHARS", 0);
define("DEFAULT_WORDS_SEPERATOR", '-');
define("DEFAULT_OPTIONS", 'lower');
define("DEFAULT_INC_NUMBER", false);

define ("SOURCE_WORD_DATA",'file');
/*URL constant*/
define("URL_TIMEOUT", 10);
define("URL_INC_HEADER", 1);
define("WORD_URL",'http://www.mieliestronk.com/corncob_lowercase.txt');

/*File Path */
define("FILE_PATH", 'data/words.txt');


define("NO_OF_WORDS",((!empty($_POST['no_of_words'])) ? $_POST['no_of_words'] : DEFAULT_NO_OF_WORDS));
define("NO_OF_SPECIAL_CHARS",((!empty($_POST['no_of_special_chars'])) ? $_POST['no_of_special_chars'] : DEFAULT_NO_OF_SPECIAL_CHARS));
define("WORDS_SEPERATOR",((!empty($_POST['word_seperator'])) ? $_POST['word_seperator'] : DEFAULT_WORDS_SEPERATOR));
define("OPTIONS",((!empty($_POST['options'])) ? $_POST['options'] : DEFAULT_OPTIONS));
define("INC_NUMBER",((!empty($_POST['include_number'])) ? ($_POST['include_number']=='Y'?true:false) : DEFAULT_INC_NUMBER));

/*constant for Sessionm*/
define("SESSION_ARRAY_NAME",'word_session_name1');
