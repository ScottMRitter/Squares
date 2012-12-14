<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead{
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: inherit;
	font-family:georgia,sans-serif;
}

body{
	width: 1000px;
	margin-left: auto;
	margin-right: auto;
}

a:hover{
	opacity:0.6;
	filter:alpha(opacity=60);
}

#menubar{
	height: 44px;
	background-color: #003050;
	color: white;
	margin-top: 4px;
	line-height: 44px;
	padding-left: 30px;
}

#outermenu{
	position: relative;
	float: left;
	margin-top: 79px;
	height: 52px;
	border-top: 2px solid grey;
	border-bottom: 2px solid grey;
	background-color: #FFFFFF;
	width: 550px;
}

#menubutton{
	float: left;
	height: 44px;
	width: 100px;
	background-color: #003050;
	color: #EBD700;
	text-align: center;
	text-decoration: none;
}

#menubutton:hover{
	border-bottom: 3px solid #EBD700;
	height: 41px;
	cursor: pointer;
	opacity:1;
	filter:alpha(opacity=100);
}

#menubutton .about{
	
}

#menubar div {
    float:left;
}

#menubar div ul {
    display: none;
    position: absolute;
    list-style-type:none;
    background-color: #000000;
	top: 45px;
    padding: 0px;
}

#menubar div:hover ul {
    display: block;
    font-size:12px;
	width: 100px;
	border-top: 3px solid #EBD700;
}

#menubar div ul li a {
    display: block;
    width: 150px;
	height: 40px;
    background: #000000;
    text-decoration: none;
    color:#FFFFFF;
	border-left: 3px solid #003050;
	padding-left: 15px;
	padding-right: 5px;
}

#menubar div ul li a:hover {
	border-left: 3px solid #EBD700;
	color: #EBD700;
	opacity:1;
	filter:alpha(opacity=100);
}

#menubar div ul li ul {
    display: none;
    position: absolute;
    list-style-type:none;
    background-color: #000000;
	top: 45px;
    padding: 0px;
}

#menubar div ul li:hover ul {
    display: block;
    font-size:12px;
	width: 100px;
}


</style>

<div id="header">
<img src="http://balfourltw.sigmachi.org/webfm_send/45" width=400px style="float: left;"></img>
<div id="outermenu">
<div id="menubar">
	<div><a href="./" id="menubutton">HOME</a></div>
	<div>
	<a href="./about" id="menubutton">ABOUT</a>
	<ul>
		<li><a href="#">Balfour LTW</a></li>
		<li><a href="#">Purdue University</a></li>
		<li><a href="#">The BLOB</a></li>
		<li><a href="#">SigFest</a></li>
		<li><a href="#">Sponsors</a></li>
	</ul>
	</div>
	<div><a href="./register" id="menubutton">REGISTER</a>
	<ul>
		<li><a href="#">Conference</a></li>
		<li><a href="#">Travel</a></li>
		<li><a href="#">Expenses</a></li>
		<li><a href="#">Attendees</a></li>
	</ul>
	</div>
	<div><a href="./login" id="menubutton">LOGIN</a></div>
</div>
</div>
</div>