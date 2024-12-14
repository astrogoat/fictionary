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
                Sections\FrequentlyAskedQuestion\Accordion::class,
                Sections\Stats\Simple::class,
                Sections\Hero\SplitWithScreenshot::class,
                Sections\Hero\SimpleCenteredWithBackgroundImage::class,
                Sections\CloudLogo\SimpleWithHeading::class,
                Sections\Header\Centered::class,
                Sections\Header\WithCards::class,
                Sections\Feature\WithProductScreenshot::class,
                Sections\Feature\OffsetWithFeatureList::class,
                Sections\CallToAction\SimpleCentered::class,
                Sections\CallToAction\SimpleJustified::class,
                Sections\CallToAction\CenteredOnDarkPanel::class,
                Sections\CallToAction\DarkPanelWithImage::class,
                Sections\Pricing\TwoTiersWithExtraTier::class,
                Sections\Pricing\TwoTiersWithEmphasizedTier::class,
                Sections\Marketing\Pricing\SinglePriceWithDetails::class,

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
        Livewire::component('astrogoat.fictionary.sections.hero.split-with-screenshot', Sections\Hero\SplitWithScreenshot::class);
        Livewire::component('astrogoat.fictionary.sections.hero.simple-centered-with-background-image', Sections\Hero\SimpleCenteredWithBackgroundImage::class);
        Livewire::component('astrogoat.fictionary.sections.cloud-logo.simple-with-heading', Sections\CloudLogo\SimpleWithHeading::class);
        Livewire::component('astrogoat.fictionary.sections.header.centered', Sections\Header\Centered::class);
        Livewire::component('astrogoat.fictionary.sections.header.with-cards', Sections\Header\WithCards::class);
        Livewire::component('astrogoat.fictionary.sections.frequently-asked-question.accordion', Sections\FrequentlyAskedQuestion\Accordion::class);
        Livewire::component('astrogoat.fictionary.sections.feature.with-product-screenshot', Sections\Feature\WithProductScreenshot::class);
        Livewire::component('astrogoat.fictionary.sections.feature.offset-with-feature-list', Sections\Feature\OffsetWithFeatureList::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.simple-centered', Sections\CallToAction\SimpleCentered::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.simple-justified', Sections\CallToAction\SimpleJustified::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.centered-on-dark-panel', Sections\CallToAction\CenteredOnDarkPanel::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.dark-panel-with-image', Sections\CallToAction\DarkPanelWithImage::class);
        Livewire::component('astrogoat.fictionary.sections.stats.simple', Sections\Stats\Simple::class);
        Livewire::component('astrogoat.fictionary.sections.pricing.two-tiers-with-extra-tier', Sections\Pricing\TwoTiersWithExtraTier::class);
        Livewire::component('astrogoat.fictionary.sections.pricing.two-tiers-with-emphasized-tier', Sections\Pricing\TwoTiersWithEmphasizedTier::class);
        Livewire::component('astrogoat.fictionary.sections.marketing.pricing.single-price-with-details', Sections\Marketing\Pricing\SinglePriceWithDetails::class);
    }
}
