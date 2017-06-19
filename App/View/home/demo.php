<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>test</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui-1.8.23.custom.css"/>

</head>

<body>

<p>First open a modal <a href="http://ibm.com" class="example"> dialog</a></p>

</body>

<!--jQuery-->
<script src="http://code.jquery.com/jquery-latest.pack.js"></script>
<script src="js/jquery-ui-1.8.23.custom.min.js"></script>

<script type="text/javascript">
function showDialog(){
    $(".example").dialog({
    height: 400,
            width: 500,
            modal: true 
return false;   
}
 </script>

</html>