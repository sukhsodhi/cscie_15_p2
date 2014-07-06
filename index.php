<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
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
<?php require "logic.php" ?>
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
                            <option value="1" <?php echo $no_of_words==1?'Selected':'';?>>One</option>
                            <option value="2" <?php echo $no_of_words==2?'Selected':'';?>>Two</option>
                            <option value="3" <?php echo $no_of_words==3?'Selected':'';?>>Three</option>
                            <option value="4" <?php echo $no_of_words==4?'Selected':'';?>>Four</option>
                            <option value="5" <?php echo $no_of_words==5?'Selected':'';?>>Five</option>
                            <option value="6" <?php echo $no_of_words==6?'Selected':'';?>>Six</option>
                            <option value="7" <?php echo $no_of_words==7?'Selected':'';?>>Seven</option>
                            <option value="8" <?php echo $no_of_words==8?'Selected':'';?>>Eight</option>
                            <option value="9" <?php echo $no_of_words==9?'Selected':'';?>>Nine</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        
                        Number of Special Characters :
                        <select class="form-control" name="no_of_special_chars">
                            <option value="0" <?php echo $no_of_special_chars==0?'Selected':'';?>>Zero</option>
                            <option value="1" <?php echo $no_of_special_chars==1?'Selected':'';?>>One</option>
                            <option value="2" <?php echo $no_of_special_chars==2?'Selected':'';?>>Two</option>
                            <option value="3" <?php echo $no_of_special_chars==3?'Selected':'';?>>Three</option>
                            <option value="4" <?php echo $no_of_special_chars==4?'Selected':'';?>>Four</option>
                            <option value="5" <?php echo $no_of_special_chars==5?'Selected':'';?>>Five</option>
                           
                        </select>
            		</div>
            	</div>
                <div class="row"><div class="col-sm-12">&nbsp;</div></div>
                
                <div class="row">
                   <div class="col-sm-6">
                        Choose Seperator :
                        <select class="form-control" name="word_seperator">
                            <option value="-" <?php echo $word_seperator=='-'?'Selected':'';?>>Dash ("-")</option>
                            <option value=" " <?php echo $word_seperator==' '?'Selected':'';?>>Space (" ")</option>
                            <option value="" <?php echo $word_seperator==''?'Selected':'';?>>Empty String ("")</option>
                            <option value="~" <?php echo $word_seperator=='~'?'Selected':'';?>>Tilda ("~")</option>
                        </select>
                   </div>
                   <div class="col-sm-6">
                        Options :
                        <select class="form-control" name="options">
                            <option value="lower" <?php echo $options=='lower'?'Selected':'';?>>All Lower case</option>
                            <option value="upper" <?php echo $options=='upper'?'Selected':'';?>>All Upper case</option>
                            <option value="camel" <?php echo $options=='camel'?'Selected':'';?>>Camel Case</option>
                        </select>
                   </div>
                </div>
                <div class="row"><div class="col-sm-12">&nbsp;</div></div>
                
                <div class="row">
                   <div class="col-sm-6">
                        <label><input type="checkbox" name="include_number" <?php echo $include_number?'Checked':'';?>/> Inlude numbers</label>
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