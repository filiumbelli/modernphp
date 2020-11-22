<?php

$closure = function ($name) {
    echo "Hello $name";
};
$closure("Serhat");
echo "\n";
//whenever ( ) is used in php, php calls __invoke() magic method

$secondPow = array_map(function ($number) {
    echo $number ** 2, PHP_EOL;
}, [2, 4, 5]);

function encloseName($name)
{
    return function ($doCommand) use ($name) {
        return sprintf('%s , %s ', $name, $doCommand);
    };
}

$joshua = encloseName("joshua");
echo $joshua("What yoou want");
//Takes two argument seperatly.


class App
{
    protected $routes = array();
    protected $status = 200;
    protected $contentType = "text/html";
    protected $responseBody = "Hello baby";

    public function addRoute($routePath, $routeCallback)
    {
        $this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
    }

    public function dispatch($currentPath)
    {
        foreach ($this->routes as $routePath => $callback) {
            if ($routePath === $currentPath) {
                $callback();
            }
        }
        header("HTTP/1.1" . $this->status);
        header("Content-type: " . $this->contentType);
        header("Content-length: " . mb_strlen($this->responseBody));
        echo $this->responseBody;
    }
}

$app = new App();
$app->addRoute('/users/josh', function () {
    $this->contentType = "application/json;charset=utf8";
    $this->responseBody = '{"name":"Sayk"}';
});

$app->dispatch("/users/josh");