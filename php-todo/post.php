<?php ob_start(); include("db.php"); ?>
<html>
	<head>
		<title>TODO</title>
	</head>
	<body>
		<style type="text/css">
		body{
			background-image: url('background-im.jpg');
			background-size:100%;
			font-family:helvetica;
		}
		#main{
			width:500px;
			margin:0 auto;
		}
		#main .header{
			background-color:#f2f2f2;
			border-top-left-radius:10px;
			-moz-top-left-radius:10px;
			-webkit-top-left-radius:10px;
			border-top-right-radius:10px;
			-moz-top-right-radius:10px;
			-webkit-top-right-radius:10px;
			padding:20px;
		}
		#main .inner-main{
			background-color:#f2f2f2;
			padding:20px;
		}
		#main .footer{
			background-color:pink;
			border-bottom-left-radius:10px;
			-moz-bottom-left-radius:10px;
			-webkit-bottom-left-radius:10px;
			border-bottom-right-radius:10px;
			-moz-bottom-right-radius:10px;
			-webkit-bottom-right-radius:10px;
			padding:20px;
			cursor:pointer;
		}
		#main .footer:hover{
			background-color:pink;
		}
		#main .footer .inside-t{
			font-size:25px;
			color:white;
			font-weight:bold;
			
		}
		#main .inner-main .todo-text{
			font-size:23px;
		}
		.main2{
			padding:20px;
			background-color:rgba(242, 242, 242, .6);
			border-radius:10px;
			-moz-border-radius:10px;
			-webkit-border-radius:10px;
			width:515px;
			padding-bottom:30px;
			margin:0 auto;
		}
		</style>
		
		<center>
			<?php
				$item_text = $_POST['item_text'];
				$submit = $_POST['submit'];
				if(isset($submit)){
					//if(strlen($_POST['item_text']) > 0){
						$data2 = $db->prepare("INSERT INTO item (item_text) VALUES (?)");
						$data2->execute(array($item_text));
							
						header("Location: /todo");
					//}else{
					//	echo "You cannot have a blank TODO item."
					//}
				}
			?>
		</center>
		
		<div class="main2">
			<div id="main">
				<div class="header">
					<center><h2>Todoist, please acquire us!</h2></center>
				</div>
				<div class="inner-main">
					<form method="post" action="">
						<table border="0" width="100%;">
							<tr>
								<td width="75%">
									<input type="text" name="item_text" placeholder="What do you gotta do?" style="font-size:20px; height:30px; width:315px; padding:5px;" />
								</td>
								<td width="20%;">		
									<input type="submit" name="submit" value="Add" />
								</td>
							</tr>
						</table>
					</form>
				</div>
				<a href="post.php" style="text-decoration:none;">
					<div class="footer">
						<center>
							<span class="inside-t" style="text-decoration:none;">NEW ITEM</span>
						</center>
					</div>
				</a>
			</div>
		</div>
	</body>
</html>
