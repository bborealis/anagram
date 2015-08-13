<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramGenerator.php";

    session_start();

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("anagram.twig");
    });

    $app->get("/results", function() use ($app) {
        $anagram = new AnagramGenerator;
        $this_anagram = $anagram->checkAnagram($_GET["$input_single"], $_GET["$input_list"]);
        retun $app["twig"]->render("results.twig", array("answers" => $this_anagram));
    });

    return $app;

?>
