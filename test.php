<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function checkAlert(evt){
			if (evt.target.value==="Say Hello") {
				alert('Hello');
			}
		}
	</script>
</head>
<body>
	<select onchange="checkAlert(event)">
		<option>Test</option>
		<option>Say Hello</option>
	</select>
</body>
</html>