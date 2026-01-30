<?php

namespace Skynettechnologies\AllinOneAccessibility\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;
use Skynettechnologies\AllinOneAccessibility\AllinOneAccessibilityPlugin;
use UnitEnum;

class AllinOneAccessibility extends Page
{
    protected string $view = 'all-in-one-accessibility::pages.all-in-one-accessibility';
    protected static ?Htmlable $icon = null;

    public static function getNavigationLabel(): string
    {
        return AllinOneAccessibilityPlugin::get()->navigationLabel;
    }

    public static function getNavigationGroup(): string | UnitEnum | null
    {
        return AllinOneAccessibilityPlugin::get()->navigationGroup;
    }

    public static function getNavigationIcon(): string | Htmlable | null
    {
        return static::$icon ??= new HtmlString(
            file_get_contents(__DIR__ . '/../../resources/svg/accessibility.svg')
        );
    }

    public function getHeading(): string | Htmlable
    {
        return AllinOneAccessibilityPlugin::get()->navigationLabel;
    }
}
