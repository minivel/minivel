<?php

use Illuminate\Support\Facades\Route;

Route::get('healthcheck', function () {
    return ['status' => 'ok'];
});