<?php 

/*
This function generates the xkcd password, since all the options are member variables
they are not passed in as paramters
It returns the xkcd password
*/
function  generate_pwd()
{
	/* Get the Array of words */
	$words_array =get_words();
	/* number of words in the array*/
	$words_count = count($words_array);
	/* create a new array */
	$pwd_array =  array();
	$index = 0;

	//echo $words_count;
	
	/*loop thru the number of words required*/
	for ($i =0; $i < NO_OF_WORDS; $i++)
	{
		$index=rand(0, $words_count); 
		
		array_push($pwd_array, $words_array[$index]);
		
		//echo "$words_array[$index] <br/>";
		//echo "- $index <br/>";
	}

	return create_pwd_string($pwd_array);
}

/*
Create the password string based on the password.
the Array passed is the words that was randomly se;ected
*/
function create_pwd_string($pwd_array)
{
	$pwd="";

	$first = true;
	foreach ($pwd_array as $key => $value) 
	{
		/*Based on the options add the seperator and word to appropriate case*/
		switch (OPTIONS)
		{
			case "upper":
				$pwd .= ($first?'':WORDS_SEPERATOR) . strtoupper($value) ;
				break;
			case "camel":
				$pwd .= ($first?'':WORDS_SEPERATOR) . ucwords($value) ;
				break;
			default:
				$pwd .= ($first?'':WORDS_SEPERATOR) . strtolower($value) ;
				break;
		}
		$first=false;

    	//echo "pwd $pwd <br />\n";
	}
	//Now check to see if the special characters
	//Logic is to randomly select the special character from teh constant
	//and randomly add it to the password
	if (NO_OF_SPECIAL_CHARS>0)
	{
		$index_special_chars = 0;
		$special_char ='';
		$index_to_place_char =0;
		for ($i=0; $i<NO_OF_SPECIAL_CHARS; $i++)
		{
			//get the Random Special character
			$index_special_chars= rand(0,strlen(SPECIAL_CHARS)-1);
			$special_char = substr(SPECIAL_CHARS,$index_special_chars,1);
			echo "special_char $special_char  $index_special_chars<br />\n";
			//get the Random index where the special character will be placed
			$index_to_place_char = rand(0, strlen($pwd));
			$pwd = substr($pwd, 0,$index_to_place_char) . $special_char . substr($pwd, $index_to_place_char);
		}
	}

	if (INC_NUMBER)
	{
		$pwd = $pwd . rand(0,9);
	}
	return $pwd;
	
}

/*
This functions gets the words and returns an Array of words
These words are used in the password generation process
*/
function get_words()
{
	if (isset($_SESSION[SESSION_ARRAY_NAME])) 
	{
		if (!is_null($_SESSION[SESSION_ARRAY_NAME]) && is_array($_SESSION[SESSION_ARRAY_NAME]) && count($_SESSION[SESSION_ARRAY_NAME]) >0)
		{
			return $_SESSION[SESSION_ARRAY_NAME];
		}
	}

	if (SOURCE_WORD_DATA =='url') 
	{
		$_SESSION[SESSION_ARRAY_NAME] =get_words_by_url();
	}
	else 
	{
		$_SESSION[SESSION_ARRAY_NAME] =get_words_by_file();
	}
	
	return $_SESSION[SESSION_ARRAY_NAME];

}
/*
This function gets the words from a files and eturns an Array of words
These words are used in the password generation process
*/
function get_words_by_file()
{
	$file = fopen(FILE_PATH,"r");
	$data = array();

	// while we have not reached the end of the csv file
	while(!feof($file)) {
		// move the data to the array
		array_push($data,trim(fgets($file)));
		//echo fgets($file);
	}
	fclose($file);
	return $data;
}
/*
This functions gets the words from web site and returns an Array of words
These words are used in the password generation process
*/
function get_words_by_url()
{
	//get the Array from URL
	$url = curl_init();
	curl_setopt ($url, CURLOPT_URL, WORD_URL);

	// Include header in result? (0 = yes, 1 = no)
    curl_setopt($url, CURLOPT_HEADER, URL_INC_HEADER);
 
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
 
    // Timeout in seconds
    curl_setopt($url, CURLOPT_TIMEOUT, URL_TIMEOUT);

	$urlData = curl_exec ($url);
	curl_close ($url);

	$data = array();

	$data  = explode(' ',$urlData);
	return $data;
}
?>