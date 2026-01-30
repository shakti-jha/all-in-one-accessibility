<?php

namespace Skynettechnologies\AllinOneAccessibility;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\View;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AllinOneAccessibilityServiceProvider extends PackageServiceProvider
{
    public static string $name = 'all-in-one-accessibility';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasViews()
            ->hasAssets();
    }
    public function packageRegistered(): void
    {
        if (! config('all-in-one-accessibility.enable_admin')) {
            return;
        }
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_START,
            fn () => view('all-in-one-accessibility::frontend-widget')
        );
    }
}
