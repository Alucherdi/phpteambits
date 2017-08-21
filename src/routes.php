<?php
// Routes

// $app->get('/[{name}]', function ($request, $response, $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });

$app->get("/", function ($req, $res) {
	return $this->renderer->render($res, "home.phtml");
});

$app->get("/about", function ($req, $res) {
	return $this->renderer->render($res, "about.phtml");
});

$app->get("/services", function ($req, $res) {
	return $this->renderer->render($res, "services.phtml");
});

$app->get("/products", function ($req, $res) {
	return $this->renderer->render($res, "products.phtml");
});

$app->get("/projects", function ($req, $res) {
	return $this->renderer->render($res, "projects.phtml");
});

$app->get("/board", function ($req, $res) {
	return $this->renderer->render($res, "board.phtml");
});