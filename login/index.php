<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");

echo "
<body>
<div id='wrapper'>
<div id='top'><div id='logo'></div></div>
<div id='content'>
<h1>Content</h1>
<h2>V0.01</h2>
<div id='left-nav'>";
include("left-nav.php");

echo "
</div>
<div id='main'>
<h4>Welcome to our work in progress. Please feel free to make an account and log in.</h4>
</div>
<div id='bottom'></div>
</div>
</body>
</html>";

?>
