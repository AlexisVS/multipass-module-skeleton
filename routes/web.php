<?php

use App\Application\Enums\Permission\DashboardPermissionsEnum;
use App\Infrastructure\Laravel\Models\Module\Module;

$module = Module::where('name', ':package_slug')->first();

// FRONT
Route::name('module.'.$module->name.'.')
    ->prefix('module/'.$module->name)
    ->group(function () {
        // Your front end routes here
    });

// BACK
Route::name('administration.module'.$module->name.'.')
    ->prefix('administration/module/'.$module->name)
    ->middleware(['auth', 'verified', 'permission:'.DashboardPermissionsEnum::LookDashboard->value])
    ->group(function () {
        // Your back end routes here
    });
