<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Listings page</title>

	<style type="text/css">
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal; cursor: pointer;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		padding: 10px; text-align: center;
	}
	
	.items{display:inline-block;vertical-align:top;width:25%;border:1px solid #ccc;padding:10px;margin:0 10px 10px 0;text-align: left}
	.items p{height: 58px;overflow: hidden;}
	.items a{font-size:12px;float:right;background: #ccc;color:#fff;padding:5px;border-radius:4px;cursor: default;}
	.items a.add{background: #333;}
	
	</style>
</head>
<body>

<div id="container">
	<h1>Listing from Magazine Table</h1>

	<div id="body">
		
		<?php 
		
			foreach($data as $row){
				
				$class = ($row->item_id === null)?'add':'';

				$out[] = "<div class='items'>";
				$out[] = "<h3>".$row->magName."<a class='".$class."' data-id='".$row->magId."' data-type='magazine'>Add to itenary</a></h3>";
				$out[] = "<p>".$row->magDescription."</p>";
				$out[] = "</div>";

			}
			echo join('',$out);
		?>
	
			</div>

	
</div>

<script src='https://code.jquery.com/jquery-2.1.1.min.js' type="text/javascript"></script>
<script src='<?php echo asset_url();?>js/app.js' type="text/javascript"></script>
</body>
</html>