<?php

namespace webdefault\FilamentWebdefault;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentWebdefaultServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-webdefault';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-webdefault' => __DIR__.'/../resources/dist/filament-webdefault.css',
    ];

    protected array $scripts = [
        'plugin-filament-webdefault' => __DIR__.'/../resources/dist/filament-webdefault.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-webdefault' => __DIR__ . '/../resources/dist/filament-webdefault.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
