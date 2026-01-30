<?php

namespace Skynettechnologies\AllinOneAccessibility;

use BackedEnum;
use Skynettechnologies\AllinOneAccessibility\Pages\AllinOneAccessibility;
use Skynettechnologies\AllinOneAccessibility\Traits\AuthorizesPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Icons\Heroicon;
use Filament\Support\Facades\FilamentIcon;

class AllinOneAccessibilityPlugin implements Plugin
{
    use AuthorizesPlugin;

    private array $cacheKeys = [];

    private int $columns = 2;

    public $canFlushCache = true;

    public $canForgetKey = true;

    protected static ?string $navigationIcon = 'accessibility';

    public ?string $navigationGroup = 'Settings';

    public string $navigationLabel = 'All in One Accessibility®';

    public function canForgetKey(callable | bool $canForgetKey): static
    {
        $this->canForgetKey = $canForgetKey;

        return $this;
    }


    public function canFlushCache(callable | bool $canFlushCache): static
    {
        $this->canFlushCache = $canFlushCache;

        return $this;
    }

    public function navigationLabel(string $navigationLabel): static
    {
        $this->navigationLabel = $navigationLabel;

        return $this;
    }

    public function navigationGroup(string | UnitEnum | null $navigationGroup): static
    {
        $this->navigationGroup = $navigationGroup;

        return $this;
    }

    public function navigationIcon(string | BackedEnum | null $navigationIcon): static
    {
        $this->navigationIcon = $navigationIcon;

        return $this;
    }

    public function getId(): string
    {
        return 'all-in-one-accessibility';
    }

    public function addCacheKey(string $cacheKey, string $title, string $description = '', string $color = 'primary'): static
    {
        $this->cacheKeys[] = [
            'cacheKey' => $cacheKey,
            'title' => $title,
            'description' => $description,
            'color' => $color,
        ];

        return $this;
    }

    public function columns(int $columns): static
    {
        $this->columns = $columns;

        return $this;
    }

    public function getColumns(): int
    {
        return $this->columns;
    }

    public function getCacheKeys(): array
    {
        return $this->cacheKeys;
    }

    public function registerIfAuthorized(Panel $panel): void
    {
        $panel->pages([
            AllinOneAccessibility::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        FilamentIcon::register(
            [
            'accessibility' => __DIR__ . '/../resources/svg/accessibility.svg',
            ]
        );
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
