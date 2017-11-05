<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/classes/Autoload.php';

spl_autoload_register('Traintrack\Autoload::loader');

/**
 * Register a Silex application
 * Silex provides the routing system for the app
 * @link http://silex.sensiolabs.org
 */
$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__.'/views',
]);

/**
 * Add a Twig SimpleFilter to create md5 hashes
 */
$md5Filter = new Twig_SimpleFilter('md5', function($string) {
    return md5($string);
});

$app['twig']->addFilter($md5Filter);

/**
 * Tidy up the Twig syntax with a Lexer
 */
$lexer = new Twig_Lexer($app['twig'], [
    'tag_block'    => ['{', '}'],
    'tag_variable' => ['{{', '}}']
]);

$app['twig']->setLexer($lexer);

require __DIR__ . '/routes.php';