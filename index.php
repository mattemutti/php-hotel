<?php


 $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

// foreach ($hotels as $hotelArray) {
// 	foreach ($hotelArray as $key => $hotel) {
// 		echo ("$key $hotel <br>");
// 	}	
// };	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>PhP_Hotel</title>
</head>
<style>

/* *{
	border: 1px dashed black;
} */

</style>
<body>

<div class="container text-center p-4 text-uppercase">
	<h1>Hotels</h1>
</div>


<div class="container">
	<div class="row justify-content-center">
		<?php foreach ($hotels as $key => $hotel) : ?>
			<div class="card col-4 p-4" style="">
				<img src="https://picsum.photos/200" class="card-img-top" alt="...">
				<div class="card-body">
				
					<h5 class="card-title"> <?= $hotel['name'] ?> </h5>
					<p class="card-text"> <?= $hotel['description'] ?> </p>
					<p class="card-text">Voto: <?= $hotel['vote'] ?> </p>
					<p class="card-text">Distanza dal Centro: <?= $hotel['distance_to_center'] ?> km</p>

					<?php if ($hotel['parking'] === true) : ?>
						<p><i class="fa-solid fa-check"></i> Yes c'è il parcheggio</p>
					<?php else : ?>
						<p><i class="fa-solid fa-x"></i> Mi spiace, non c'è il parcheggio </p>
				<?php endif; ?>
    		
					<a href="#" class="btn btn-primary">Prenota</a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>