<?php

include "database.php";
$movies = getMovieList();
$singlemovie = getSingleMovie(); 

// if(isset($_GET['page'])) {
// 	$page = $_GET['page'];
// } else {
// 	$page ="home";
// }

// ternary operator to get page information
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Switch to the page according to values in url
switch ($page) {
	case 'home':
	 	include "home.php";
		break;
	case 'movie':
	 	include "movie.php";
		break;
	case 'movieform':
		include "movieform.php";
		break;
	case 'edit':
		editMovie();
		break;
	case 'delete':
	 	deleteMovie();
		break;
	default:
	 	echo "Error 404! Page not found.";
		break;
}

?>
