<?php

namespace SergeyBruhin\DynamicRobots\Http\Controllers;

use Config;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use InvalidArgumentException;
use SergeyBruhin\DynamicRobots\Exceptions\DynamicRobotsException;

class RobotsController extends Controller
{
    /**
     * @throws DynamicRobotsException
     */
    public function __invoke(): Response
    {
        if (Config::get('dynamic-robots.directory') !== null) {
            try {
                $view = View::first(
                    [
                        Config::get('dynamic-robots.directory') . '.' . App::environment(),
                        Config::get('dynamic-robots.directory') . '.' . 'default',
                    ]
                )
                    ->with('sitemap', Config::get('dynamic-robots.sitemap'))
                    ->with('appendDirectives', Config::get('dynamic-robots.appendDirectives'));

            } catch (InvalidArgumentException $ex) {
                throw new DynamicRobotsException(
                    'Robots views directory specified in config file, but default robots file or for current environment not found', 500, $ex,
                );
            }


        } else {
            $view = View::first(
                [
                    'dynamic-robots::' . App::environment(),
                    'dynamic-robots::default'
                ]
            )
                ->with('sitemap', Config::get('dynamic-robots.sitemap'))
                ->with('appendDirectives', Config::get('dynamic-robots.appendDirectives'));
        }


        return response($view)
            ->header('Content-Type', 'text/plain');
    }
}
