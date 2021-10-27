<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>	
</head>
<body>

<?php
$db = mysqli_connect('localhost', 'root', 'Alumno_2021') or die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
 
$query = 'INSERT INTO reviews (review_movie_id, review_date, reviewer_name, review_comment, review_rating) 
VALUES (6, "2012-04-12","Pepe", "Joel",4)';
$result = mysqli_query($db,$query) or die(mysqli_error($db));
$query = 'INSERT INTO reviews (review_movie_id, review_date, reviewer_name, review_comment, review_rating) 
VALUES (7, "2008-09-08","Jorge", "Paolo",3)';
$result = mysqli_query($db,$query) or die(mysqli_error($db));
$query = 'INSERT INTO reviews (review_movie_id, review_date, reviewer_name, review_comment, review_rating) 
VALUES (8, "2019-10-09","Manuel", "Joel",2)';
$result = mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'SELECT review_movie_id, review_rating from reviews';
$result = mysqli_query($db,$query) or die(mysqli_error($db));
// show the results

while ($row = mysqli_fetch_assoc($result)) {
	extract($row);	
	$review_movie_id = $row['review_movie_id'];	
	$review_rating = $row['review_rating'];	
	echo 'Id de pelicula es ' . $review_movie_id . ' y su valor de rating es ' . $review_rating . ' <br/>';
}
?>
</body>
</html>