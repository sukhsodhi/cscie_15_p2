## Readme for the Second Assignment - CSCIE-15

# Assignment -2

The link for pagoda is http://p2-sukhsodhi.gopagoda.com

This project is part of the CSCIE015 summer course at Harvard University.
The P2 uses the bootstrap framework. The bootstrap frame is reterived from the CDN.

The XCKD password generator supports the following
	Ability to select the number of words from a drop down
	Option to include number or not, this is added to the end of the password
	Ability to add Special character and specify the number of speical characters. These characters are randomly placed in the password.
	Ability to make the work lower, upper or camel case.
	Ability to select the seperator as space, hypen etc.

The words in the password are randomly selected from a list of words. This list of words are in a file. The system supports the ability to read from a web site. Due to performance issue the file was downloaded.

The system uses SESSION to store the words array in memory for faster performance. 
