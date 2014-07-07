<?php 

$pwd = generate_pwd();

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

echo $words_count;
	
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
*/
function create_pwd_string($pwd_array)
{
	$pwd="";

	$first = true;
	foreach ($pwd_array as $key => $value) 
	{
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

    	echo "pwd $pwd <br />\n";
	}

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