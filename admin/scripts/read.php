<?php 

function getAll($tbl){
	include('connect.php');

	//TODO: fill the following variable with a SQL query
	// that fetching all info from the given table $tbl
	$queryAll = 'SELECT * FROM '.$tbl;

	$runAll = $pdo->query($queryAll);

	if($runAll){
		return $runAll;
	}else{
		$error = 'There was a problem accessing this info';
		return $error;
	}
}
function getSingle($tbl,$col,$value){
	include('connect.php');
	//TODO: fill the following line with the SQL
	// Query where pull everything from the $tbl
	//when $col = $value
	$querySingle = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$value;

	$runSingle = $pdo->query($querySingle);
	if($runSingle){
		return $runSingle;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}
function filterResults($tbl,$tbl2,$tbl3,$col,$col2,$col3,$filter){
	include('connect.php');
	$filterQuery = 'SELECT * FROM '.$tbl.' as a, '.$tbl2.' as b, '.$tbl3.' as c WHERE a.'.$col.' = c.'.$col.' AND b.'.$col2.' = c.'.$col2.' AND b.'.$col3.' = "'.$filter.'"';

	$runFilter = $pdo->query($filterQuery);
	if($filterQuery){
		return $runFilter;
	}else{
		$error = 'There was a problem';
		return $error;
	}
}
