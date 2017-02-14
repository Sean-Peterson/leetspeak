<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/LeetspeakTranslator.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider, array('twig.path' => __DIR__."/../views"));

    $app->get('/', function() use ($app) {

        return $app['twig']->render('index.html.twig');
    });

    $app->post('/leet', function() use ($app) {
        $new_leet = new LeetspeakTranslator;
        $new_leetspeek = $new_leet->translator($_POST['word']);
        return $app['twig']->render('leet.html.twig', array('phrases' => $new_leetspeek));
    });

    return $app;
?>
