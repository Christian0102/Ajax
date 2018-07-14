<html>
<head>
<title> Ajax Test</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<script>
	function funcBefore(){
		$("#inf").text("Wait Data...");
		
	}
	function funcsuccess(data){
		$("#inf").text(data);
		
	}
	
	
	$(document).ready(function (){
		$("#load").bind("click",function(){
			$.ajax({
				var admin = "admin";
					url:"content.php",
					type:"POST",
					data:({name: admin,number: 5}),
					dataType:"html",
					beforeSend:funcBefore,
					success:funcSuccess,
				
				});
				
			});
		});
</script>
<body>
	<p id="load" style="cursor:pointer">Load Data
	</p>
	<div id="inf">
	</div>
</body>	
</html
