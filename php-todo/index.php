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
		
		<div class="main2">
			<div id="main">
				<div class="header">
					<center><h2>Todoist, please acquire us!</h2></center>
				</div>
				<div class="inner-main">
					<table border="0" width="100%" cellpadding="10">
					  <tbody>
						  <?php
						    $data = $db->prepare("SELECT * FROM item;");
							$data->execute();
							$datap = $data->fetchAll(PDO::FETCH_ASSOC);
							
							foreach($datap as $r){
								echo "<tr>
										<td width='25px;'>
											<a href='delete.php?id=".$r['id']."'>
												<img src='check.png' style='width:20px; height:20px; padding-top:2px;'/>
											</a>
										</td>
										<td><span class='todo-text'>".$r['item_text']."</span></td>
								      </tr>";
							}
						  ?>
					  </tbody>
					</table>
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
