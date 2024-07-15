<?php

namespace Astrogoat\Fictionary;

use Astrogoat\Fictionary\Settings\FictionarySettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class FictionaryServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('fictionary')
            ->settings(FictionarySettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->sections([
                Sections\Stats\Simple::class,
                Sections\Heroes\SplitWithScreenshot::class,
                Sections\CloudLogos\SimpleWithHeading::class,
                Sections\Headers\Index::class,
                Sections\FAQs\Accordion::class,
                Sections\Features\WithProductScreenshot::class,
                Sections\CTAs\SimpleJustified::class,

            ])
            ->publishOnInstall(['public'])
            ->backendRoutes(__DIR__.'/../routes/backend.php')
            ->frontendRoutes(__DIR__.'/../routes/frontend.php');
    }

    public function configurePackage(Package $package): void
    {
        $package->name('fictionary')->hasConfigFile()->hasViews();

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/fictionary'),
        ], 'public');
    }

    public function bootingPackage()
    {
        Livewire::component('astrogoat.fictionary.sections.stats-simple', Simple::class);
        Livewire::component('astrogoat.fictionary.sections.heroes.split-with-screenshot', Sections\Heroes\SplitWithScreenshot::class);
        Livewire::component('astrogoat.fictionary.sections.cloud-logos.simple-with-heading', Sections\CloudLogos\SimpleWithHeading::class);
        Livewire::component('astrogoat.fictionary.sections.headers.index', Sections\Headers\Index::class);
        Livewire::component('astrogoat.fictionary.sections.f-a-qs.accordion', Sections\FAQs\Accordion::class);
        Livewire::component('astrogoat.fictionary.sections.features.with-product-screenshot', Sections\Features\WithProductScreenshot::class);
        Livewire::component('astrogoat.fictionary.sections.c-t-as.simple-justified', Sections\CTAs\SimpleJustified::class);
        Livewire::component('astrogoat.fictionary.sections.stats.simple', Sections\Stats\Simple::class);
    }
}
