<html>
<head>
	<title> LOGIN PAGE.. </title>
	<link rel="stylesheet" href="./CSS/css.css">
</head>
	<style>
		table, th, td {
		border:0px solid black;
		}
	</style>
	
	<body>
			<table width="100%" >
			
				<tr height="100px">
					<td colspan="3"> </td>
				</tr>
				
				<tr height="250px">
					<td width ="30%"></td>
					
					<td width ="40%" >

					<form action="xyz.php" method="POST">
                            <div class="form-element">
							<label for="LOGIN PAGE"><p class="outset"><h1>LOGIN PAGE</h1></p></label>
							<input  type="text" placeholder="User Name" name="user name" required><br><br>
							</div>
                            <div class="form-element">
							<input  type="password" placeholder="User Password" name="password" required><br><br>
							</div>
							<button onclick="clickMe()"> LOGIN </button>
							<script>
								function clickMe(){
								var result ="<?php php_func(); ?>"
								document.write(login sucsess fully);
								}
								</script>
						</form>
                    
					</td>

					<td width ="30%"></td>
				</tr>
				
				<tr height="100px">
					<td colspan="3"> </td>
				</tr>

			</table>
           
           
	</body>

</html>