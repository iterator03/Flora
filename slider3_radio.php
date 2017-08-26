<html>
	<head>
		<style>
			#slide{
				height:400px;
				width:500px;
				background:black;
				margin:0 auto;
			}	
			#sld_rad{
			width:300px;
			margin:-20px auto;
			}
			input[type="radio"]
			{
				margin:0px 10px;
			}
		</style>
		<script>
			var len=8;
			var counter=0;
			var items=Array();
			function ini()
			{
			for(i=0;i<len;i++)
			{
	items[i]="<img src=pics/f"+(i+1)+".jpg height='400px' width='500px' alt='image cant be display'>";		
			}
			
			}
			var rad;
			function slider()
			{
	 rad=document.getElementsByName("ch");
	var d=document.getElementById("slide");
	
			d.innerHTML=items[counter];
			rad[counter].checked=true;
	counter++;
	if(counter>=len)
	counter=0;
	
			}
			setInterval("slider()",2000);
		</script>
	</head>
	<body onload="ini()">
			<div id="slide">
			
			</div>
		
		<div id="sld_rad">
			<form>
	<input type="radio" name="ch"/>
	<input type="radio" name="ch"/>
	<input type="radio" name="ch"/>
	<input type="radio" name="ch"/>
	<input type="radio" name="ch"/>
	<input type="radio" name="ch"/>
	<input type="radio" name="ch"/>
	<input type="radio" name="ch"/>
			</form>
		</div>
	</body>
</html>