<!DOCTYPE html>
<html>
<head>
<title>jQuery Dialog Form Example</title>
<link href="css/dialog.css" rel="stylesheet"> <!-- Including CSS File Here-->
<!-- Including CSS & jQuery Dialog UI Here-->
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script src="dialog.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
<div class="main">
<div id="dialog" title="Dialog Form">
<form action="" method="post">
<label>Name:</label>
<input id="name" name="name" type="text">
<label>Email:</label>
<input id="email" name="email" type="text">
<input id="submit" type="submit" value="Submit">
</form>
</div>
<h2>jQuery Dialog Form Example</h2>
<p>Click below button to see jQuery dialog form.</p>
<input id="button" type="button" value="Open Dialog Form">
</div>
</div>
</body>
</html>

<div id="inputDsCode" title="Dialog Form">
    <form action="#" method="post">
        <label>Add Design code name:</label><br/>
        <input name="inputDsCode" type="text">
        <input id="submit" type="submit" value="Add">
    </form>
</div>
<div id="inputSite" title="Dialog Form">
    <form action="#" method="post">
        <label>Add Site:</label><br/>
        <input name="inputSite" type="text">
        <input id="submit" type="submit" value="Add">
    </form>
</div>
<div id="inputFacility" title="Dialog Form">
    <form action="#" method="post">
        <label>Add Facility:</label><br/>
        <input name="inputFacility" type="text">
        <input id="submit" type="submit" value="Add">
    </form>
</div>
<div id="inputManu" title="Dialog Form">
    <form action="#" method="post">
        <label>Add Manufacturer:</label><br/>
        <input name="inputManu" type="text">
        <input id="submit" type="submit" value="Add">
    </form>
</div>
