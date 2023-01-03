<?php

namespace SergeyBruhin\DynamicRobots\Http\Controllers;

use Config;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class RobotsController extends Controller
{
    public function __invoke(): Response
    {

        if (Config::get('dynamic-robots.directory') !== null) {
            $view = View::first(
                [
                    Config::get('dynamic-robots.directory') . '.' . App::environment(),
                    Config::get('dynamic-robots.directory') . '.' . 'default'
                ]
            );
        } else {
            $view = View::first(
                [
                    'dynamic-robots::' . App::environment(),
                    'dynamic-robots::default'
                ]
            );
        }


        return response($view)
            ->header('Content-Type', 'text/plain');
    }
}
