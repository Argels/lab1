<?php namespace Controller;
use Silex\Application;
use Silex\ControllerProviderInterface;

class MainController implements ControllerProviderInterface
{
	public function connect(Application $app)
	{

		$route = $app["controllers_factory"];

		// ruta para servir el index del proyecto
		$route
			->get("/", [$this, "index"])
			->bind("index");
		$route
		->get("/hello/{name}", [$this, "hello"])
		->bind("hello");


		return $route;
	}
	public function index(Application $app)
	{
		return "Hola Mundo!";
	}
	public function hello(Application $app, $name)
	{
		return "Hola! " .$name;
	}
}