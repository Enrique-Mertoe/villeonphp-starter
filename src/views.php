<?php

namespace App\Views;
;

use Villeon\Core\Facade\Route;
use Villeon\Http\Request;

/**
 * This file defines the routes for your application.
 * Each route maps a specific URL pattern to a callback function or controller
 * that handles the incoming request and generates a response.
 */

/**
 * Define a route for the root URL ("/").
 *
 * This route listens for GET requests on the root URL and executes a callback
 * function that returns a simple "Hello World!" response.
 *
 * @rout_name hello_world
 * The route is given a name, "hello_world", which can be used to generate
 * URLs programmatically elsewhere in the application.
 */
Route::get("/hello_world", function () {
    return view("home.twig");
})->name("hello_world");

/**
 * Additional views and routes can be defined here by following the same pattern.
 * Use Route::get(), Route::post(), or other HTTP methods to create routes as needed.
 */
