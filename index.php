<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Welcome to HiChat Community</title>
        <style>
            body{
                
            }
            header{
                text-align: center;
            }
            #upper-level{
                background-color: #88FF99;
                padding: 1%;
            }
            #login{
                
            }
            label{
                margin: 4px;
            }
            #login input{
                width: 100%;
            }
            #signup{
                //background-color: #88FF99;
                border-top: 1px solid grey;
            }
            #registration{
                //background-color: #88FF99;//white;
                border-left: 1px solid grey;
            }
            #registration input[type="radio"]{
                width: 40%;
            }
            footer{
                background-color: #88FF99;
                border-top:  1px solid grey;
                text-align: center;
            }
            footer #foot{
                width: 70%;
                margin: auto;
            }
        </style>
    </head>
    <body lang="en">
        <?php
        // put your code here
        
        ?>
        <div class="container-fluid">
            <header class="row">
                <h2>
                    Welcome to 
                    <font  color="yellowgreen">Hi</font><small><font  color="red"><span class="glyphicon glyphicon-copyright-mark"></span></font>hat</small> Community
                </h2>
            </header>
            <div class="row" id="upper-level">
                <div class="col-xs-7"></div>
                <div class="col-xs-5" id="login">
                    <form action="#" method="POST" role="form" class="form-inline">
                        <div class="form-group row">
                            <div class="col-xs-2">
                                <label for="username" class="control-label">USERNAME</label>
                            </div>
                            <div class="col-xs-3">
                                <input id="username" type="text" placeholder="Enter your Username" class="form-control input-sm"/>
                            </div>
                            <div class="col-xs-2">
                                <label for="username" class="control-label">PASSWORD</label>
                            </div>
                            <div class="col-xs-3">
                                <input id="username" type="password" placeholder="Enter your Password" class="form-control input-sm"/>
                            </div>
                            <div class="col-xs-2">
                                <input type="submit" name="submit" value="SUBMIT" class="btn btn-sm btn-success"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9"></div>
                            <div class="col-xs-3"><a href="#">forget password?</a></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row" id="signup">
                <div class="col-xs-7">
                    null
                </div>
                <div class="col-xs-5" id="registration">
                    <form action="#" method="POST" role="form" class="form-horizontal">
                        <h3>Register here!!!</h3>
                        <div class="form-group row">
                            <div class="col-xs-3"><label for="first_name">First Name:</label></div>
                            <div class="col-xs-9"><input type="tetx" name="first_name" id="first_name" class="form-control" placeholder="First Name"/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3"><label for="last_name">Last Name:</label></div>
                            <div class="col-xs-9"><input type="tetx" name="last_name" id="last_name" class="form-control" placeholder="Last Name"/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3"><label for="other_name">Other Name:</label></div>
                            <div class="col-xs-9"><input type="tetx" name="other_name" id="other_name" class="form-control" placeholder="Other Name"/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3"><label for="emai">E-mail Address:</label></div>
                            <div class="col-xs-9"><input type="email" name="email" id="other_name" class="form-control" placeholder="E-mail Address"/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3"><label for="mobile_number">Mobile Number:</label></div>
                            <div class="col-xs-9"><input type="tel" name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number"/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-2"><label for="mobile_number">Sex:</label></div>
                            <div class="col-xs-2"><input type="radio" name="gender" id="sex" class="form-control" value="M"/>Male</div>
                            <div class="col-xs-2"><input type="radio" name="gender" id="sex" class="form-control" value="F"/>Female</div>
                        <!--/div>
                        <div class="form-group row"-->
                            <div class="col-xs-2"><label for="date_of_birth">Date Of Birth:</label></div>
                            <div class="col-xs-4"><input type="date" name="date_of_birth" id="date_of_birth" class="form-control"/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3"><label for="password">Password:</label></div>
                            <div class="col-xs-9"><input type="password" name="password" id="password" class="form-control" placeholder="Password"/></div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3"><label for="verify_password">Verify Password:</label></div>
                            <div class="col-xs-9"><input type="password" name="verify_password" id="verify_password" class="form-control" placeholder="Verify Password"/></div>
                        </div>
                        <div class="form-group row">
                            <input type="submit" value="Register Now" name="submit" class="btn btn-success" style="margin-left:45%;"/>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="row">
                <div class="row" id="foot">
                    <ul class="nav navbar-nav">
                        <li><a href="#">ABOUT <font  color="yellowgreen">Hi</font><small><font  color="red"><span class="glyphicon glyphicon-copyright-mark"></span></font>hat</small> COMMUNITY</a></li>
                        <li><a href="#">CONTACT <font  color="yellowgreen">Hi</font><small><font  color="red"><span class="glyphicon glyphicon-copyright-mark"></span></font>hat</small></a></li>
                        <li><a href="#">LIKE <font  color="yellowgreen">Hi</font><small><font  color="red"><span class="glyphicon glyphicon-copyright-mark"></span></font>hat</small> Community</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">SUGGEST ON IMPROVING <font  color="yellowgreen">Hi</font><small><font  color="red"><span class="glyphicon glyphicon-copyright-mark"></span></font>hat</small> COMMUNITY</a></li>
                    </ul>
                </div>
                <div class="row">&copy;SoladoyeolaOS</div>
            </footer>
        </div>
    </body>
</html>
