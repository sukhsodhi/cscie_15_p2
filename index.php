<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)

//Start the php session
    session_start();
    require "constants.php";
    require "logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
  <title>XKCD style password genertor Assignment -2 for CSCIE-15 class</title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
<body role="document"  >
    <div class="container theme-showcase" role="main">
  	
    <div class="jumbotron">
        <h1>XKCD Style Password generator</h1>
        <p>This is a simple xkcd style password, it gives the options to  </p>
        <ul>
            <li>Select number of words</li>
            <li>Option to include numbers</li>
            <li>Option to include Special characters and the number of special characters</li>
            <li>Option to make the first character upper case</li>
            <li>Select seperator (space, camelcase or hypen(default))</li>
        </ul>
    </div>
    
    <form method="post">
        <div class="panel panel-primary">
            <div class="panel-heading">              
                <h3 class="panel-title">xkcd options</h3>
            </div>
            <div class="panel-body">
                <div class="row">
        	       <div class="col-sm-6">
                		Number of words :
                        <select class="form-control" name="no_of_words">
                            <option value="1" <?php echo NO_OF_WORDS==1?'Selected':'';?>>One</option>
                            <option value="2" <?php echo NO_OF_WORDS==2?'Selected':'';?>>Two</option>
                            <option value="3" <?php echo NO_OF_WORDS==3?'Selected':'';?>>Three</option>
                            <option value="4" <?php echo NO_OF_WORDS==4?'Selected':'';?>>Four</option>
                            <option value="5" <?php echo NO_OF_WORDS==5?'Selected':'';?>>Five</option>
                            <option value="6" <?php echo NO_OF_WORDS==6?'Selected':'';?>>Six</option>
                            <option value="7" <?php echo NO_OF_WORDS==7?'Selected':'';?>>Seven</option>
                            <option value="8" <?php echo NO_OF_WORDS==8?'Selected':'';?>>Eight</option>
                            <option value="9" <?php echo NO_OF_WORDS==9?'Selected':'';?>>Nine</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        
                        Number of Special Characters :
                        <select class="form-control" name="no_of_special_chars">
                            <option value="0" <?php echo NO_OF_SPECIAL_CHARS==0?'Selected':'';?>>Zero</option>
                            <option value="1" <?php echo NO_OF_SPECIAL_CHARS==1?'Selected':'';?>>One</option>
                            <option value="2" <?php echo NO_OF_SPECIAL_CHARS==2?'Selected':'';?>>Two</option>
                            <option value="3" <?php echo NO_OF_SPECIAL_CHARS==3?'Selected':'';?>>Three</option>
                            <option value="4" <?php echo NO_OF_SPECIAL_CHARS==4?'Selected':'';?>>Four</option>
                            <option value="5" <?php echo NO_OF_SPECIAL_CHARS==5?'Selected':'';?>>Five</option>
                           
                        </select>
            		</div>
            	</div>
                <div class="row"><div class="col-sm-12">&nbsp;</div></div>
                
                <div class="row">
                   <div class="col-sm-6">
                        Choose Seperator :
                        <select class="form-control" name="word_seperator">
                            <option value="-" <?php echo WORDS_SEPERATOR=='-'?'Selected':'';?>>Dash ("-")</option>
                            <option value=" " <?php echo WORDS_SEPERATOR==' '?'Selected':'';?>>Space (" ")</option>
                            <option value="" <?php echo WORDS_SEPERATOR==''?'Selected':'';?>>Empty String ("")</option>
                            <option value="~" <?php echo WORDS_SEPERATOR=='~'?'Selected':'';?>>Tilda ("~")</option>
                        </select>
                   </div>
                   <div class="col-sm-6">
                        Options :
                        <select class="form-control" name="options">
                            <option value="lower" <?php echo OPTIONS=='lower'?'Selected':'';?>>All Lower case</option>
                            <option value="upper" <?php echo OPTIONS=='upper'?'Selected':'';?>>All Upper case</option>
                            <option value="camel" <?php echo OPTIONS=='camel'?'Selected':'';?>>Camel Case</option>
                        </select>
                   </div>
                </div>
                <div class="row"><div class="col-sm-12">&nbsp;</div></div>
                
                <div class="row">
                   <div class="col-sm-6">
                        <label><input type="checkbox" name="include_number" <?php echo INC_NUMBER?'Checked':'';?>/> Inlude numbers</label>
                   </div>
                   <div class="col-sm-6">
                        <button class="btn btn-primary" type="submit">Generate Password</button>
                   </div>
                </div>
                <div class="row"><div class="col-sm-12">&nbsp;</div></div>
                <div class="row">
                   <div class="col-sm-6">

                   </div>
                   <div class="col-sm-6">

                   </div>
                </div>
            </div>

        </div>
    </form>
    
</div>

</body>
</html>