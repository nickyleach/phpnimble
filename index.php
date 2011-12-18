<?

include 'library/bootstrap.php';

try {
	$controller = Controller::create(array(
		'controller' => Routing::controllerName()
	));
} catch (Exception $e){
	Util::redirect('404.html');
}

$controller->beforeFilter();
$controller->filter(Routing::action(), Routing::args());
$controller->afterFilter();

?>