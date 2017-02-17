<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/wordcount.php";

    $app = new Silex\Application();
        $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app) {
        return $app['twig']->render('search_form.html.twig');
    });

    $app->post("/display_result", function() use($app){
        $word = $_POST['word'];
        $sentence = $_POST['sentence'];
        $new_repeat = new RepeatCounter($word, $sentence);
        $result = $new_repeat->countRepeats($word, $sentence);
        return $app['twig']->render('display_result.html.twig' , array('result' => $result, 'word' => $word, 'sentence' => $sentence));
    });

    return $app;
?>
