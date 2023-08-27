<?php

use App\Application\Enums\Permission\DashboardPermissionsEnum;

// FRONT
Route::name('module.' . ':package_slug' . '.')
    ->prefix('module/' . ':package_slug')
    ->group(function () {
        // Your front end routes here
    });

// BACK
Route::name('administration.module' . ':package_slug' . '.')
    ->prefix('administration/module/' . ':package_slug')
    ->middleware(['auth', 'verified', 'permission:' . DashboardPermissionsEnum::LookDashboard->value])
    ->group(function () {
        // Your back end routes here
    });
