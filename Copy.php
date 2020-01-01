<html>
    <head>
        <title>Log in Page</title>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <script>
            //saves default values of hr, min and secs to initiales countdown
            document.cookie = 'hr =' + 0;
            document.cookie = 'min =' + 29;
            document.cookie = 'secs =' + 59;
        </script>
    </head>
    <body>
        <div id="header">
            <div id="logo"><img src="image/kplogo.jpg" alt="kwaraploy logo"/></div>
            <div id="banner">
                <pre style="vertical-align: central;">
                    <h1>KWARA STATE POLYTECHNIC ILORIN</h1>
                    <h3>P.M.B 1375, ILORIN </h3>
                </pre>
            </div>
        </div>
        <div id="body-content">
            <p id="error"> INVALID PASSWORD OR USERNAME </p>
            <h2>WELCOME TO KWARA STATE POLYTECHNIC
                CBT LOGIN PAGE</h2>
            <h4 style="color: white;">TYPE IN YOUR LOGIN DETAILS BELOW....</h4>
            <div id="form-content">
                <form action="loggedin.php" method="post" name="form">
                    <div id="studentID">
                        <label>Student ID:</label><br/>
                        <input type="text" name="studentID" placeholder="Sudent ID" required/>
                    </div>
                    <div id="studentPassword">
                         <label>Student Password:</label><br/> 
                         <input type="password" placeholder="Password" name="studentPassword" required/> <br/>
                    </div>
                    <button id="submit" type="submit" value="SUBMIT" name="submit" onclick="">SUBMIT</button>
                    <div style="margin-left: 20px; text-align: left">
                        <h5 style="font-size: 9; margin-top: 0px; color: red;">NOTE That:</h5>
                        <i>
                            <ul>
                                <li><font color="red">Do not refresh page at any point during examination</font></li>
                                <li> Options will be submitted immediately the time is up</li>
                                <li> Student password required here is the same as the password used to log in to the school portal.</li>
                                <li> Choose either A,B,C or D among the options</li>
                                <li> when you are through before time is up, click on the submit button, and click YES to submit or NO id otherwise</li>
                            </ul>
                        </i>
                    </div>
                </form>
            </div>
        </div>
        <div id="footer">
                <div id="left-footer">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                        <li><a href="#">Link 8</a></li>
                        <li><a href="#">Link 9</a></li>
                        <li><a href="#">Link 5</a></li>
                        <li><a href="#">Link 6</a></li>
                        <li><a href="#">Link 7</a></li>
                        <li><a href="#">Link 8</a></li>
                        <li><a href="#">Link 9</a></li>
                    </ul>
                </div>
                <center><div id="right-footer">
                    <ul>
                        <li><a href="index.html">Contact US</a></li>
                        <li><a href="#">About our company</a></li>
                        <li><a href="#">Product and services</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <p>
                        &copy copyright SoladoyeOla Web Samples 2017
                    </p>
                </div></center>
            </div>
    </body>
<?php
    //$_PHP_SELF
    //pop-up action if no match found
    if($_COOKIE['error'] === 'yes'){
        echo 'error';
        echo '<style>
                #error{
                    left: -10%;
                    width: 35%; 
                    background-color: #FF5555; 
                    padding: 3%; 
                    position: relative; 
                    border-radius: 20%;
                    display: inline-block;
                    -webkit-animation-name: errorTime;
                    -webkit-animation-delay: 1s;
                    -webkit-animation-direction: alternate;
                    -webkit-animation-iteration-count: infinite;
                    -webkit-animation-duration: 1s;
                    animation-name: errorTime;
                    animation-delay: 0s;
                    animation-direction: alternate;
                    animation-iteration-count: infinite;
                    animation-duration: 5s;
                }@-webkit-keyframes errorTime{
                    0%{
                        opacity: 1;
                    }
                    50%{
                        opacity: 0.5;
                    }
                    100%{
                        opacity: 0.3;
                    }
                }
                @keyframes errorTime{
                    0%{
                        opacity: 1;
                    }
                    50%{
                        opacity: 0.5;
                    }
                    100%{
                        opacity: 0.3;
                    }
                }
                </style>';
        
    }