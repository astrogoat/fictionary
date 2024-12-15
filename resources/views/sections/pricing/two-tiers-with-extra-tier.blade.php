<x-lego::section :section="$this">
    <div class="fic-isolate fic-overflow-hidden fic-bg-gray-900">
        <div class="fic-mx-auto fic-max-w-7xl fic-px-6 fic-pb-96 fic-pt-24 fic-text-center sm:fic-pt-32 lg:fic-px-8">
            <div class="fic-mx-auto fic-max-w-4xl">
                {!! $this->get('eyebrow.copy')->class('fic-text-base/7 fic-font-semibold fic-text-accent-400') !!}
                {!! $this->get('heading.copy')->class('fic-mt-2 fic-text-balance fic-font-semibold fic-tracking-tight fic-text-white ' . $this->getHeadingSizeCss()) !!}
            </div>
            <div class="fic-relative fic-mt-6">
                {!! $this->get('description.copy')->class('fic-mx-auto fic-max-w-2xl fic-text-pretty fic-text-lg fic-font-medium fic-text-gray-400 sm:fic-text-xl/8') !!}
                <svg viewBox="0 0 1208 1024" class="fic-absolute fic--top-10 fic-left-1/2 fic--z-10 h-[64rem] fic--translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:fic--top-12 md:fic--top-20 lg:fic--top-12 xl:fic-top-0">
                    <ellipse cx="604" cy="512" fill="url(#6d1bd035-0dd1-437e-93fa-59d316231eb0)" rx="604" ry="512" />
                    <defs>
                        <radialGradient id="6d1bd035-0dd1-437e-93fa-59d316231eb0">
                            <stop stop-color="#7775D6" />
                            <stop offset="1" stop-color="#E935C1" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
        </div>
        <div class="fic-flow-root fic-bg-white fic-pb-24 sm:fic-pb-32">
            <div class="fic--mt-80">
                <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
                    <div class="fic-mx-auto fic-grid fic-max-w-md fic-grid-cols-1 fic-gap-8 lg:fic-max-w-4xl lg:fic-grid-cols-2">
                        <div class="fic-flex fic-flex-col fic-justify-between fic-rounded-3xl fic-bg-white fic-p-8 fic-shadow-xl fic-ring-1 fic-ring-gray-900/10 sm:fic-p-10">
                            <div>
                                {!! $this->get('tiers.one.name')->class('fic-text-base/7 fic-font-semibold fic-text-accent-600') !!}
                                <div class="fic-mt-4 fic-flex fic-items-baseline fic-gap-x-2">
                                    {!! $this->get('tiers.one.amount')->class('fic-text-5xl fic-font-semibold fic-tracking-tight fic-text-gray-900') !!}
                                    {!! $this->get('tiers.one.interval')->class('fic-text-base/7 fic-font-semibold fic-text-gray-600') !!}
                                </div>
                                {!! $this->get('tiers.one.description')->class('fic-mt-6 fic-text-base/7 fic-text-gray-600') !!}
                                <ul role="list" class="fic-mt-10 fic-space-y-4 fic-text-sm/6 fic-text-gray-600">
                                    @foreach($this->get('tiers.one.features') as  $feature)
                                        <li class="fic-flex fic-gap-x-3">
                                            <x-fab::elements.icon :icon="$feature->icon->key" class="fic-h-6 fic-w-5 fic-flex-none fic-text-accent-600" />
                                            {!! $feature->name !!}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            {!! $this->get('tiers.one.cta')->class('fic-mt-8 fic-block fic-rounded-md fic-bg-accent-600 fic-px-3.5 fic-py-2 fic-text-center fic-text-sm/6 fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-accent-500 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-accent-600') !!}
                        </div>
                        <div class="fic-flex fic-flex-col fic-justify-between fic-rounded-3xl fic-bg-white fic-p-8 fic-shadow-xl fic-ring-1 fic-ring-gray-900/10 sm:fic-p-10">
                            <div>
                                {!! $this->get('tiers.two.name')->class('fic-text-base/7 fic-font-semibold fic-text-accent-600') !!}
                                <div class="fic-mt-4 fic-flex fic-items-baseline fic-gap-x-2">
                                    {!! $this->get('tiers.two.amount')->class('fic-text-5xl fic-font-semibold fic-tracking-tight fic-text-gray-900') !!}
                                    {!! $this->get('tiers.two.interval')->class('fic-text-base/7 fic-font-semibold fic-text-gray-600') !!}
                                </div>
                                {!! $this->get('tiers.two.description')->class('fic-mt-6 fic-text-base/7 fic-text-gray-600') !!}
                                <ul role="list" class="fic-mt-10 fic-space-y-4 fic-text-sm/6 fic-text-gray-600">
                                    @foreach($this->get('tiers.two.features') as  $feature)
                                        <li class="fic-flex fic-gap-x-3">
                                            <x-fab::elements.icon :icon="$feature->icon->key" class="fic-h-6 fic-w-5 fic-flex-none fic-text-accent-600" />
                                            {!! $feature->name !!}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            {!! $this->get('tiers.two.cta')->class('fic-mt-8 fic-block fic-rounded-md fic-bg-accent-600 fic-px-3.5 fic-py-2 fic-text-center fic-text-sm/6 fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-accent-500 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-accent-600') !!}
                        </div>

                        @if($this->get('tiers.extra.name')->hasContent())
                            <div class="fic-flex fic-flex-col fic-items-start fic-gap-x-8 fic-gap-y-6 fic-rounded-3xl fic-p-8 fic-ring-1 fic-ring-gray-900/10 sm:fic-gap-y-10 sm:fic-p-10 lg:fic-col-span-2 lg:fic-flex-row lg:fic-items-center">
                                <div class="lg:fic-min-w-0 lg:fic-flex-1">
                                    {!! $this->get('tiers.extra.name')->class('fic-text-base/7 fic-font-semibold fic-text-accent-600') !!}
                                    {!! $this->get('tiers.extra.description')->class('fic-mt-1 fic-text-base/7 fic-text-gray-600') !!}
                                </div>
                                {!! $this->get('tiers.extra.cta')->class('fic-rounded-md fic-px-3.5 fic-py-2 fic-text-sm/6 fic-font-semibold fic-text-accent-600 fic-ring-1 fic-ring-inset fic-ring-accent-200 hover:fic-ring-accent-300 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-accent-600') !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-lego::section>
