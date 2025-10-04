<?php

namespace Astrogoat\Fictionary;

use Closure;
use Astrogoat\Fictionary\Settings\FictionarySettings;
use Astrogoat\Fictionary\Settings\Peripherals\Theming;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class FictionaryServiceProvider extends AppPackageServiceProvider
{
    public static Closure|null $cssForShowingPerVariation = null;
    public static Closure|null $cssForHidingPerVariation = null;

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
                Sections\Blog\ThreeColumnWithBackgroundImages::class,
                Sections\Blog\ThreeColumnWithImages::class,
                Sections\BentoGrid\TwoRowBentoGridWithThreeColumnSecondRow::class,
                Sections\CallToAction\CenteredOnDarkPanel::class,
                Sections\CallToAction\DarkPanelWithImage::class,
                Sections\CallToAction\SimpleCentered::class,
                Sections\CallToAction\SimpleJustified::class,
                Sections\CallToAction\SplitWithImage::class,
                Sections\CloudLogo\SimpleWithHeading::class,
                Sections\Content\SimpleContent::class,
                Sections\Feature\OffsetWithFeatureList::class,
                Sections\Feature\SimpleThreeColumnWithLargeIcons::class,
                Sections\Feature\WithProductScreenshot::class,
                Sections\FrequentlyAskedQuestion\Accordion::class,
                Sections\Header\Centered::class,
                Sections\Header\WithCards::class,
                Sections\Hero\SimpleCenteredWithBackgroundImage::class,
                Sections\Hero\SplitWithScreenshot::class,
                Sections\Marketing\Pricing\SinglePriceWithDetails::class,
                Sections\Pricing\ThreeTiers::class,
                Sections\Pricing\TwoTiersWithEmphasizedTier::class,
                Sections\Pricing\TwoTiersWithExtraTier::class,
                Sections\Stats\Simple::class,
                Sections\Team\WithVerticalImages::class,
                Sections\Testimonial\Grid::class,
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
        Blade::componentNamespace('Astrogoat\\Fictionary\\Views\\Components', 'fic');

        Livewire::component('astrogoat.fictionary.sections.blog.three-column-with-background-images', Sections\Blog\ThreeColumnWithBackgroundImages::class);
        Livewire::component('astrogoat.fictionary.sections.blog.three-column-with-images', Sections\Blog\ThreeColumnWithImages::class);
        Livewire::component('astrogoat.fictionary.sections.bento-grid.two-row-bento-grid-with-three-column-second-row', Sections\BentoGrid\TwoRowBentoGridWithThreeColumnSecondRow::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.centered-on-dark-panel', Sections\CallToAction\CenteredOnDarkPanel::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.dark-panel-with-image', Sections\CallToAction\DarkPanelWithImage::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.simple-centered', Sections\CallToAction\SimpleCentered::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.simple-justified', Sections\CallToAction\SimpleJustified::class);
        Livewire::component('astrogoat.fictionary.sections.call-to-action.split-with-image', Sections\CallToAction\SplitWithImage::class);
        Livewire::component('astrogoat.fictionary.sections.cloud-logo.simple-with-heading', Sections\CloudLogo\SimpleWithHeading::class);
        Livewire::component('astrogoat.fictionary.sections.content.simple-content', Sections\Content\SimpleContent::class);
        Livewire::component('astrogoat.fictionary.sections.feature.offset-with-feature-list', Sections\Feature\OffsetWithFeatureList::class);
        Livewire::component('astrogoat.fictionary.sections.feature.simple-three-column-with-large-icons', Sections\Feature\SimpleThreeColumnWithLargeIcons::class);
        Livewire::component('astrogoat.fictionary.sections.feature.with-product-screenshot', Sections\Feature\WithProductScreenshot::class);
        Livewire::component('astrogoat.fictionary.sections.frequently-asked-question.accordion', Sections\FrequentlyAskedQuestion\Accordion::class);
        Livewire::component('astrogoat.fictionary.sections.header.centered', Sections\Header\Centered::class);
        Livewire::component('astrogoat.fictionary.sections.header.with-cards', Sections\Header\WithCards::class);
        Livewire::component('astrogoat.fictionary.sections.hero.simple-centered-with-background-image', Sections\Hero\SimpleCenteredWithBackgroundImage::class);
        Livewire::component('astrogoat.fictionary.sections.hero.split-with-screenshot', Sections\Hero\SplitWithScreenshot::class);
        Livewire::component('astrogoat.fictionary.sections.marketing.pricing.single-price-with-details', Sections\Marketing\Pricing\SinglePriceWithDetails::class);
        Livewire::component('astrogoat.fictionary.sections.pricing.three-tiers', Sections\Pricing\ThreeTiers::class);
        Livewire::component('astrogoat.fictionary.sections.pricing.two-tiers-with-emphasized-tier', Sections\Pricing\TwoTiersWithEmphasizedTier::class);
        Livewire::component('astrogoat.fictionary.sections.pricing.two-tiers-with-extra-tier', Sections\Pricing\TwoTiersWithExtraTier::class);
        Livewire::component('astrogoat.fictionary.sections.stats.simple', Sections\Stats\Simple::class);
        Livewire::component('astrogoat.fictionary.sections.team.with-vertical-images', Sections\Team\WithVerticalImages::class);
        Livewire::component('astrogoat.fictionary.sections.testimonial.grid', Sections\Testimonial\Grid::class);

        Livewire::component('astrogoat.fictionary.settings.peripherals.theming', Theming::class);
    }
}
