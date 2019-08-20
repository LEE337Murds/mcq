<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MCQ Project</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <style> 
    .answers {
        border: solid black 1px;
        text-align: center;
        padding: 10px;
        margin: 0 auto;
        width: 500px;


    }

    .answers :hover {cursor: pointer}

    h1 {
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        text-decoration: underline;

    }

    
    h2 {
        text-align: center;
        font-family: 'Montserrat', sans-serif;

    }

    .tally {
        border: solid purple 5px;
        margin: 0 auto;
        width: 150px;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
    }

    .submit_box {
        border: solid purple 5px;
        width: 150px;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        margin: 0 auto;
        padding: 10px 0px;
    }
    
    
    </style>
</head>
<body>
        <h1> Goodluck attempting the IMPOSSIBLE QUIZ ! ! ! ! </h1>

<?php
  
    $answers = array('a', 'b', 'c', 'd', 'd', 'c', 'b', 'a', 'a', 'b', 'c', 'd', 'd', 'c', 'b', 'a', 'b', 'c', 'a', 'a');
    $points  = 0;
    
    for($i=0; $i < count($answers); $i++) {
        if (isset($_REQUEST['question_'.($i+1)]) && $_REQUEST['question_'.($i+1)] == $answers[$i]) 
            $points++;
    }
    
    echo "<div class=\"tally\">Total: $points/20 </div> <br>";

    if ($points <=5){echo "<div class=\"tally\">try harder next time noob</div>";
    } else {echo "<div class=\"tally\">good job!</div>";}

?>

    <form role="form" action= <?PHP echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post"> <!-- role for blind people. action for location of post. method to say what do do with the data, create the superglobal -->
        <h2> What is the first letter of the alphabet? </h2>
        <div class="answers">
               <input type="radio" name="question_1" value="a"> A
                <input type="radio" name="question_1" value="b"> B
                <input type="radio" name="question_1" value="c"> G
                <input type="radio" name="question_1" value="d"> P      
        </div>
      
<br>
        <h2> What is the second letter of the alphabet? </h2> 
        <div class="answers"> 
                <input type="radio" name="question_2" value="a"> R
                <input type="radio" name="question_2" value="b"> B
                <input type="radio" name="question_2" value="c"> C
                <input type="radio" name="question_2" value="d"> F       
        </div>
       
<br>
        <h2> What is the third letter of the alphabet? </h2> 
        <div class="answers">
                <input type="radio" name="question_3" value="a"> T
                <input type="radio" name="question_3" value="b"> L
                <input type="radio" name="question_3" value="c"> C
                <input type="radio" name="question_3" value="d"> R
                </div>
        
<br>
        <h2> What is the fourth letter of the alphabet? </h2>
        <div class="answers"> 
                <input type="radio" name="question_4" value="a"> R
                <input type="radio" name="question_4" value="b"> S
                <input type="radio" name="question_4" value="c"> C
                <input type="radio" name="question_4" value="d"> D
                </div>
       
<br>
        <h2>Which of these is a hot drink:</h2> 
        <div class="answers"> 
                <input type="radio" name="question_5" value="a"> juice
                <input type="radio" name="question_5" value="b"> cola
                <input type="radio" name="question_5" value="c"> iced tea
                <input type="radio" name="question_5" value="d"> coffee
        </div>
       
<br>
        <h2>Which of these is a cold drink:</h2> 
        <div class="answers">  
                <input type="radio" name="question_6" value="a"> tea
                <input type="radio" name="question_6" value="b"> hot chocolate
                <input type="radio" name="question_6" value="c"> creme soda
                <input type="radio" name="question_6" value="d"> coffee
        </div>
      
<br>
        <h2>What is the capital of england?</h2> 
        <div class="answers">   
                <input type="radio" name="question_7" value="a"> hong kong
                <input type="radio" name="question_7" value="b"> london
                <input type="radio" name="question_7" value="c"> spain
                <input type="radio" name="question_7" value="d"> jeruselam
        </div>
     
<br>
        <h2>What is the capital of france?</h2> 
        <div class="answers">        
                <input type="radio" name="question_8" value="a"> paris
                <input type="radio" name="question_8" value="b"> lille
                <input type="radio" name="question_8" value="c"> bordeux
                <input type="radio" name="question_8" value="d"> egypt
        </div>

<br>
        <h2>What is the capital of USA?</h2> 
        <div class="answers">    
                <input type="radio" name="question_9" value="a"> washington DC
                <input type="radio" name="question_9" value="b"> hawaii
                <input type="radio" name="question_9" value="c"> boston
                <input type="radio" name="question_9" value="d"> new york
        </div>
    
<br>
        <h2>What is the capital of namibia?</h2> 
        <div class="answers">       
                <input type="radio" name="question_10" value="a"> swellendam
                <input type="radio" name="question_10" value="b"> windhoek
                <input type="radio" name="question_10" value="c"> boksburg
                <input type="radio" name="question_10" value="d"> cape town
        </div>
        
<br>
        <h2>Which continent is Zimbabwe in?</h2> 
        <div class="answers">      
                <input type="radio" name="question_11" value="a"> europe
                <input type="radio" name="question_11" value="b"> asia
                <input type="radio" name="question_11" value="c"> africa
                <input type="radio" name="question_11" value="d"> north america
                </div>
  
<br>
        <h2>Which continent is India in?</h2> 
        <div class="answers">  
                <input type="radio" name="question_12" value="a"> europe
                <input type="radio" name="question_12" value="b"> oceania
                <input type="radio" name="question_12" value="c"> south america
                <input type="radio" name="question_12" value="d"> asia
                </div>
        
<br>
        <h2>Which continent is Canada in?</h2> 
        <div class="answers">   
                <input type="radio" name="question_13" value="a"> europe
                <input type="radio" name="question_13" value="b"> africa
                <input type="radio" name="question_13" value="c"> asia
                <input type="radio" name="question_13" value="d"> north america
        </div>
    
<br>
        <h2>Which continent is Brazil in?</h2> 
        <div class="answers">        
                <input type="radio" name="question_14" value="a"> asia
                <input type="radio" name="question_14" value="b"> europe
                <input type="radio" name="question_14" value="c"> south america
                <input type="radio" name="question_14" value="d"> africa
        </div>

<br>
        <h2>Which continent is Netherlands in?</h2> 
        <div class="answers"> 
                <input type="radio" name="question_15" value="a"> south america
                <input type="radio" name="question_15" value="b"> europe
                <input type="radio" name="question_15" value="c"> africa
                <input type="radio" name="question_15" value="d"> asia
        </div>
       
<br>
        <h2>What sport do the Houston Rockets play?</h2> 
        <div class="answers">        
                <input type="radio" name="question_16" value="a"> basketball
                <input type="radio" name="question_16" value="b"> rugby
                <input type="radio" name="question_16" value="c"> soccer
                <input type="radio" name="question_16" value="d"> racing
        </div>

<br>
        <h2>What sport do the Stormers play?</h2> 
        <div class="answers">     
                <input type="radio" name="question_17" value="a"> basketball
                <input type="radio" name="question_17" value="b"> rugby
                <input type="radio" name="question_17" value="c"> soccer
                <input type="radio" name="question_17" value="d"> racing
        </div>
   
<br>
        <h2>What sport does Liverpool Football Club play?</h2> 
        <div class="answers">        
                <input type="radio" name="question_18" value="a"> basketball
                <input type="radio" name="question_18" value="b"> rugby
                <input type="radio" name="question_18" value="c"> soccer
                <input type="radio" name="question_18" value="d"> racing
        </div>

<br>
        <h2>what is the opposite of left?</h2> 
        <div class="answers">
                <input type="radio" name="question_19" value="a"> right
                <input type="radio" name="question_19" value="b"> wrong
                <input type="radio" name="question_19" value="c"> up
                <input type="radio" name="question_19" value="d"> down
        </div>
<br>
        <h2>what is the opposite of down?</h2> 
        <div class="answers"> 
                <input type="radio" name="question_20" value="a"> up
                <input type="radio" name="question_20" value="b"> left
                <input type="radio" name="question_20" value="c"> right
                <input type="radio" name="question_20" value="d"> backwards
        </div>
       
<br>
<div class="submit_box">
        
        <button type="submit">Submit</button>
</div>

</form>





    
</body>
</html>