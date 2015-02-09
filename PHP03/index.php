<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>String</title>
    <link href="css/united-bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="css/custom-style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    
    <div class="container" id="display">
    
    
    <?php 
        $paragraph_start = "<p>";
        $paragraph_end = "</p>";
        $str1 = "example hello world";
        $line_break = "<br>";
        echo $paragraph_start . $str1 . $paragraph_end ;
        echo "double quote dollar sign display : $paragraph_start . $str1 . $paragraph_end" ;
        echo 'single quote dollar sign display : $paragraph_start . $str1 . $paragraph_end' ;
        echo "<p class='green'>${str1}0</p>" ;
        
        $each_word_in_upper_case = ucwords($str1);
        echo "<p class='brown'>${str1}0</p>" ;
        $str2 = "   abcde    ";
        echo("<p> untrimed: ${str2}</p>");
        $trim_example = trim($str2) ;
        echo("<p>trimed: ${trim_example}</p>");
        
        echo $line_break;
        echo $line_break;
        echo "<h1>substring:</h1>";
        $sub_str_example = substr($trim_example,1,3) ;
        echo("<p> full-text: ${trim_example}</p>");
        echo("<p>substring(${trim_example},3,2): ${sub_str_example}</p>");
        
        echo $line_break;
        echo "<h1>subcount:</h1>";
        $count = strlen($trim_example) ;
        echo("<p> Count Example: strlen(${trim_example}) <br> strlen(${count})</p>");
        
        echo $line_break;
        echo "<h1>str_replace:</h1>";
        $str_replaced_example = str_replace("abc","Hello ", $trim_example) ;
        echo("<p> Replace Example: str_replace(${trim_example}, 'abc', 'Hello ') <br> str_replaced: $str_replaced_example</p>");
        
        
        
        
        
        
        
    ?>
    </div>
    
    

    <script defer="defer" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script defer="defer" src="js/bootstrap.min.js"></script>
    <script defer="defer" src="js/custom-script.js"></script>
</body>
</html>
