<?php

use SergeyBruhin\DynamicRobots\Http\Controllers\RobotsController;

Route::get('robots.txt', RobotsController::class)
    ->name('dynamic-robots');
