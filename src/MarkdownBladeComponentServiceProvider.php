<?php

namespace Spatie\MarkdownBladeComponent;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\MarkdownBladeComponent\Commands\LaravelMarkdownBladeComponentCommand;

class MarkdownBladeComponentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-markdown-blade-component')
            ->hasConfigFile()
            ->hasViews();
    }
}