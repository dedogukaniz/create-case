<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.cheapshark.com/api/1.0/games?title=batman&limit=60&exact=0",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
curl_close($curl);
$response =json_decode($response);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css" >
	<title>Document</title>
</head>
<body>
<div class="container">
    <div class="content"  style="margin-top:30px;">
    	<?php foreach ((array) $response as $item) { ?>
		<div class="card m-2" style="width: 110px; text-align: center; height: 350px; float:left; width: calc(100%/5);">
		  <img src="<?php echo $item->thumb; ?>" style="width: 258px; height: 150px;" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $item->external;?></h5>
		    <p class="card-text"><b>En uygun fiyat: </b><?php echo $item->cheapest; ?> $</p>
		  </div>
		  <div class="card-body">
		  	<div class="btn btn-group">
		    	<a class="btn btn-primary" href="https://www.cheapshark.com/api/1.0/games?id=<?php echo $item->gameID; ?>" data-toggle="modal" data-target="ornekModal" role="button">Fiyat Bilgisi</a>
		    	<a class="btn btn-outline-primary" href="https://www.cheapshark.com/api/1.0/deals?id=<?php echo $item->cheapestDealID; ?>" role="button">Detay</a>
			</div>
		  </div>
		</div>
		<?php }	?>
	</div>
</div>
</body>
</html>
