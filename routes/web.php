<?php

use App\Domain\Domain\Permissions\Enums\DashboardPermissionsEnum;
use App\Domain\Module\Models\Module;

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
