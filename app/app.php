<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPong.php";

    $app = new Silex\Application();

    $app["debug"] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app){
        return $app["twig"]->render('number_input.html.twig');
    });

    $app->get("/results", function() use ($app){
        $myPingPong = new PingPongGenerator;
        $results = $myPingPong->generatePingPongArray($_GET["number"]);
        return $app["twig"]->render('results.html.twig', array("results" => $results));
    });
    return $app;
 ?>
