<?php require_once('admin/scripts/read.php'); 
if(isset($_GET['filter'])){
	$tbl = 'tbl_movies';
	$tbl2 = 'tbl_genre';
	$tbl3 = 'tbl_mov_genre';
	$col = 'movies_id';
	$col2 = 'genre_id';
	$col3 = 'genre_name';
	$filter = $_GET['filter'];
	$results = filterResults($tbl,$tbl2,$tbl3,$col,$col2,$col3,$filter);
}else{
	$results = getAll('tbl_movies');
}
?>

<!doctype html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Movie Reviews</title>
</head>
<body>
	<?php include('templates/header.html'); ?>
	<h1>This is the movie site</h1>
	<div>
<?php
	while($row = $results->fetch(PDO::FETCH_ASSOC)):?>
		<h2><?php echo $row ['movies_title'];?></h2>
		<h3><?php echo $row ['movies_year'];?></h3>
		<h3><?php echo $row ['movies_runtime'];?></h3>
		<h3><?php echo $row ['movies_release'];?></h3>
		<a href="details.php?id=<?php echo $row['movies_id'];?>">Read More</a>
		<div><img src="images/<?php echo $row['movies_cover'];?>" alt="<?php echo $row['movies_title'];?>"></div>
	<?php endwhile;?>
</div>

<?php include('templates/footer.html');?>
</body>
</html>