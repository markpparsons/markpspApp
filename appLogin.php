<!DOCTYPE html>
<html>
	<head>
	<title>&nbsp;</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
	<script>
		$(document).on("swiperight",function(event,ui){
			$("#myPanelLeft").panel("open");
		});
	</script>
	<script>	
		#(document).bind('pageinit')
			function Iagree()
			{
				$("#ToA").innerHTML("Welcome");
				//alert("I'm in");
			}
		});
	</script>
	<style>
		#welcome{
			border: 2px solid gray;
			box-shadow: 10px 10px 10px;
			width:98%;
		}
		#welcomeMessage{
			height:100%;
		}
	</style>
	</head>
	<body>
<!-- page page Begin -->
		<div data-role="page" id="page" class="ui-responsive-panel">
		<!-- panel Begin -->
			<div data-role="panel" id="myPanelLeft" data-theme="b" data-display="push">
				<div class="ui-panel-inner">
					<ul data-role="listview">
						<li data-role="list-divider">Follow Me</li>
						<li><a href="#loginPage" data-transition="flow">
						<img src="images/icons/logo.png">
						<h2>Sign in</h2>
						<p>continue to markpsp.com social site</p>
						</a></li>
						<li><a href="#twitterFeed" data-transition="flow">
						<img src="images/icons/twitter.png">
						<h2>Twitter</h2>
						<p>Follow me on twitter</p>
						</a></li>
						<li><a href="mailto:mark.p.parsons@gmail.com">
						<img src="images/icons/email_icon.jpg">
						<h2>mark.p.parsons@gmail.com</h2>
						</a></li>
					</ul>
				</div>
			</div>
		<!-- panel End -->
			<div data-role="header" id="myHeader" data-position="fixed">
				<h2>markpsp.com 2.0</h2>
			</div>
			<div data-role="content" >
				<img id="welcome" src="images/welcome.png"></img>
				<div id="welcomeMessage">
					<p>   Welcome to the markpsp.com web app and launching pad for the site and for all the mobile apps.</p><br/>
					<p>   This app is the start of something very exciting for me and the future of my work.</p>
					<p>   Lot's of <3 to my wife Natalie!  I know I spend way to much time infront of the computer.</p>
				</div>
			</div>
			<div data-role="footer" data-id="myFooter" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="top">Back</a></li>
						<li><a href="#myPanelLeft" data-role="button" data-icon="grid" data-iconpos="top">Sign in</a></li>
						<li><a href="#page" class="ui-btn-active ui-state-persist" data-role="button" data-icon="home" data-iconpos="top" data-transition="flow">Home</a></li>
						<li><a href="#pageAbout" data-role="button" data-icon="star" data-iconpos="top" data-transition="flow">About Mark</a></li>
					</ul>	
				</div>
			</div>
		</div>
<!-- page page End -->
<!-- pageAbout page Begin -->
		<div data-role="page" data-title="Mark P. Parsons" id="pageAbout" class="ui-responsive-panel" >
			<div data-role="header" id="myHeader" data-position="fixed">
				<h2>markpsp.com</h2>
			</div>
			<div data-role="content">
			
				<ul data-role="listview">
					<li data-role="list-divider">Skill Summary<span class="ui-li-count">7</span></li>
					<li>
						<h2>Detailed List of Activities</h2>
						<ul data-role="listview">
								<li data-icon="back" data-theme="e"><a href="#" data-type="button" data-rel="back">Back</a></li>
								<li>Developed and Deployed web solutions including my own web-site deployment using the latest open source technologies including HTML5, CSS3, Javascript, JQuery, Ajax, PHP and MySQL
								</li>
								<li>Developed, tested, deployed in 4 months markpsp.com which maintains over 10 live members, 3 databases and 1 live golf browser based application
								</li>
								<li><a data-type="button" href="http://markpsp.com/social_site/root">markpsp.com</a></li>
								<li>Utilize and employ an Agile method and approach to my personal development of projects and solutions
								</li>
								<li>Develop, test and debug in a variety of programming, scripting, and markup languages including: ASP.Net MVC 4, C# .NET, HTML5, CSS3, Javascript, JQuery, Ajax, PHP, MySQL, Visual Basic Applications</li>
								<li>Apply object oriented programming (OOP) techniques to web, and application based development</li>
								<li>Developed with multiple integrated development environments (IDE) MS Visual Studio 2010, MS Visual Studio 2012, Notepad ++,  MySQL workbench, MS Access</li>
								<li>Exceptional communication and customer service skills with a punctual, committed approach to work and standards.</li>
						</ul>
					</li>
					<li data-role="list-divider">Web-Development Skills<span class="ui-li-count">7</span></li>
					<li>
						<h2>Web-Development Skills</h2>
						<ul>
							<li data-icon="back" data-theme="e"><a href="#" data-type="button" data-rel="back">Back</a></li>
							<li><a href="#">
								<img src="images/icons/HTML5_Logo.png">
								<h2>HTML5</h2>
								<p>Developed/Deployed/Debugged</p>
								<p class="ui-li-aside"><strong></strong></p>
							</a></li>
							<li><a href="#">
								<img src="images/icons/css3_Logo.png">
								<h2>CSS3</h2>
								<p>Developed/Deployed/Debugged</p>
								<p class="ui-li-aside"><strong></strong></p>
							</a></li>
							<li><a href="#">
								<img src="images/icons/js_Logo.png">
								<h2>Javascript</h2>
								<p>Developed/Deployed/Debugged</p>
								<p class="ui-li-aside"><strong></strong></p>
							</a></li>
							<li><a href="#">
								<img src="images/icons/jquery_Logo.png">
								<h2>jQuery</h2>
								<p>Developed/Deployed/Debugged</p>
								<p class="ui-li-aside"><strong></strong></p>
							</a></li>
							<li><a href="#">
								<img src="images/icons/jqueryM_logo.png">
								<h2>jQuery Mobile</h2>
								<p>Developed/Deployed/Debugged</p>
								<p class="ui-li-aside"><strong></strong></p>
							</a></li>
							<li><a href="#">
								<img src="images/icons/ajax_Logo.png">
								<h2>Ajax</h2>
								<p>Developed/Deployed/Debugged</p>
								<p class="ui-li-aside"><strong></strong></p>
							</a></li>
							<li><a href="#">
								<img src="images/icons/php_Logo.png">
								<h2>PHP</h2>
								<p>Developed/Deployed/Debugged</p>
								<p class="ui-li-aside"><strong></strong></p>
							</a></li>
							<li><a href="#">
								<img src="images/icons/mysql_Logo.png">
								<h2>MySQL</h2>
								<p>Developed/Deployed/Debugged</p>
								<p class="ui-li-aside"><strong></strong></p>
							</a></li>
						</ul>
					</li>
				</ul>			
			</div>		
			<div data-role="footer" data-id="myFooter" data-position="fixed">
				<div data-role="navbar">
					<ul>
						<li><a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="top">Back</a></li>
						<li><a href="#myPanelLeft" data-role="button" data-icon="grid" data-iconpos="top">Sign in</a></li>
						<li><a href="#page" data-role="button" data-icon="home" data-iconpos="top" data-transition="flow">Home</a></li>
						<li><a href="#pageAbout" class="ui-btn-active ui-state-persist" data-role="button" data-icon="star" data-iconpos="top" data-transition="flow">About Mark</a></li>
					</ul>	
				</div>
			</div>
		</div>
<!-- pageAbout page End -->
<!-- LoginPage page Begin -->
			<div data-role="page" id="loginPage" data-theme="b" data-display="flow">
				<div data-role="header" id="myHeader" data-position="fixed">
					<h2>markpsp.com</h2>
				</div>
				<div data-role="content">
					<h3>Login</h3>
					<form id="myForm" method="post" action="http://markpsp.com/markpspApp/appLogin.php" data-transition="flow" data-direction="reverse">
					<fieldset data-role="fieldcontain">
					<div data-role = "fieldcontain" id="login">
						<label for="email">Email Address:</label><br/>
						<input type="text" name="email" /><br/>
						<label for="password">Password:</label><br/>
						<input type="password" name="password" /><br/><br/>
						<button type="submit" value="Log In">Login</button>
					</div>
					</fieldset>
					</form><br/><br/>
					<div style="text-align: center">
						<a href="#signUpPage" data-transition="turn">Sign Up for markpsp.com</a>
					</div>
				</div>
				<div data-role="footer" data-id="myFooter" data-position="fixed">
					<div data-role="navbar">
						<ul>
							<li><a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="top">Back</a></li>
							<li><a href="#myPanelLeft" data-role="button" data-icon="grid" data-iconpos="top">Sign in</a></li>
							<li><a href="#page" data-role="button" data-icon="home" data-iconpos="top" data-transition="flow">Home</a></li>
							<li><a href="#pageAbout" data-role="button" data-icon="star" data-iconpos="top" data-transition="flow">About Mark</a></li>
						</ul>	
					</div>
				</div>
			</div>
<!-- LoginPage page End -->
<!-- signUp page Begin -->
			<div data-role="page" id="signUpPage" data-display="flow">
				<div data-role="header" id="myHeader" data-position="fixed">
					<h2>markpsp.com</h2>
				</div>
				<div data-role="content"  data-theme="b">
					<h3>Sign Up</h3>
					<form id="signUpForm" method="post" action="http://markpsp.com/markpspApp/appSignUp.php" data-transition="flow" data-direction="reverse">
					<fieldset data-role="fieldcontain">
					<div data-role = "fieldcontain" id="login">
						<label for="email">Email Address:</label><br/>
						<input type="text" name="email" /><br/>
						<label for="password">Password:</label><br/>
						<input type="password" name="password" /><br/>
						<label for="confirmPassword">Confirm Password:</label><br/>
						<input type="password" name="confirmPassword" /><br/>
						<br/>
						<a href="#agree" data-rel="dialog" data-role="button" data-icon="alert" data-iconpos="right" data-theme="e" id="ToA">Terms of Agreement</a>
						<button type="submit" value="Sign up">Sign up</button>
					</div>
					</fieldset>
					</form><br/>
					<div style="text-align: center">
						<a href="#loginPage" data-transition="turn">I already have a login</a>
					</div>
				</div>
				<div data-role="footer" data-id="myFooter" data-position="fixed">
					<div data-role="navbar">
						<ul>
							<li><a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="top">Back</a></li>
							<li><a href="#myPanelLeft" data-role="button" data-icon="grid" data-iconpos="top">Sign in</a></li>
							<li><a href="#page" data-role="button" data-icon="home" data-iconpos="top" data-transition="flow">Home</a></li>
							<li><a href="#pageAbout" data-role="button" data-icon="star" data-iconpos="top" data-transition="flow">About Mark</a></li>
						</ul>	
					</div>
				</div>
			</div>
	<!-- dialog start -->
				<div id="agree" data-role="dialog"  data-theme= "c">
					<div data-role="header">
						<h1>Terms of Agreement</h1>
					</div>
					<div data-role="content">
						<ul data-role="listview">
							<li data-role="list-divider">Terms of Agreement</li>
							<li>Respect other members</li>
							<li>Spamming other members may result in your removal and ban from the app and markpsp.com's websites.</li>
							<li>Take a bath before showing up</li>
							<li>Understand that this is my personal site and app and I get the last say as to if someone will be banned</li>
							<li>I reserve the right to change and modify all information whenever I feel it is nessesary</li>
							<li>I do not care about your passwords.  I will NOT and DO NOT have the ability to see them</li>
							<li>HAVE FUN!!</li>
							<li data-theme="e">
								<a href="#signUpPage" data-type="button" id="Iagree" onclick="Iagree()">Sounds Good</a>
							</li>
						</ul>	
					</div>
				</div>
	<!-- dialog end -->
<!-- signUp page end -->
<!-- twitterFeed page Begin -->				
			<div data-role="page" id="twitterFeed" data-display="flow">
				<div data-role="header" id="myHeader" data-position="fixed">
					<h2>markpsp.com</h2>
				</div>
				<div data-role="content">
					<div id="twitter">
						<a class="twitter-timeline" href="https://twitter.com/markCPA1981" data-widget-id="337882339612954624">Tweets by @markCPA1981</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				</div>
				<div data-role="footer" data-id="myFooter" data-position="fixed">
					<div data-role="navbar">
						<ul>
							<li><a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="top">Back</a></li>
							<li><a href="#myPanelLeft" data-role="button" data-icon="grid" data-iconpos="top">Sign in</a></li>
							<li><a href="#page" data-role="button" data-icon="home" data-iconpos="top" data-transition="flow">Home</a></li>
							<li><a href="#pageAbout" data-role="button" data-icon="star" data-iconpos="top" data-transition="flow">About Mark</a></li>
						</ul>	
					</div>
				</div>
			</div>
<!-- twitterFeed page End -->
	</body>
</html>
