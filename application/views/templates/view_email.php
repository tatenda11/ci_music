<!DOCTYPE html>
<html>
<head>
	<title>Cool Music Store</title>
	<style type="text/css">
		body{
			margin:0;
			padding: 0;
			max-width:100%;
		}
		#container{
			max-width:100%;
			min-height: 100vh;
			background-color: #f3f3f3;
		}
		#nav-strip{
			width: 100%;
			background-color: #083b66;
			float:left;
			padding:2%;
		}
		#nav-strip span{
			float: left;
			color:#fff;
			font-size: 29px;
		}
		#message-container{
			width: 70%;
			margin-left: 3%;
			background-color: #fff;
			padding: 2%;
			min-height: 30vh;
			margin-top: 40px;
			float: left;
			box-shadow: 5px 10px #888888;
		}
		#message-container p{
			width: 80%;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id='nav-strip'><span>Takada Convenience</span></div><br>
		<div id='message-container'>
			<h5><?= $greeting_text ?? "Greatings"?></h5>
			<p><?= $message ?></p>
			<h5>Invoice</h5>
			<table>
				<thead>
					<tr>
						<th>Item Name</th>
						<th>Quantity</th>
						<th>Unit Cost</th>
						<th>Total Cost</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= $item['title']?></td>
						<td>1</td>
						<td>$ <?= ($item['id'] / 100) ?></td>
						<td>$ <?= ($item['id'] / 100) ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>$ <?= ($item['id'] / 100) ?></td>
					</tr>
				</tbody>
			</table>	
			<h5>Regards</h5>
		</div>
	</div>
</body>
</html>