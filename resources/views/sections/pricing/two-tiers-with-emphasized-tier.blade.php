<x-lego::section :section="$this">
    <div class="fic-relative fic-isolate fic-px-6 fic-lg:px-8">
        <div class="fic-absolute fic-inset-x-0 fic--top-3 fic--z-10 fic-transform-gpu fic-overflow-hidden fic-px-36 fic-blur-3xl" aria-hidden="true">
            <div class="fic-mx-auto fic-aspect-[1155/678] fic-w-[72.1875rem] fic-bg-gradient-to-tr fic-from-[#ff80b5] fic-to-[#9089fc] fic-opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="fic-mx-auto fic-max-w-4xl fic-text-center">
            {!! $this->get('eyebrow.copy')->class('fic-text-base/7 fic-font-semibold fic-text-indigo-600') !!}
            {!! $this->get('heading.copy')->class('fic-mt-2 fic-text-balance fic-font-semibold fic-tracking-tight fic-text-gray-900 ' . $this->getHeadingSizeCss()) !!}
        </div>
        {!! $this->get('description.copy')->class('fic-mx-auto fic-mt-6 fic-max-w-2xl fic-text-pretty fic-text-center fic-text-lg fic-font-medium fic-text-gray-600 sm:fic-text-xl/8') !!}
        <div class="fic-mx-auto fic-mt-16 fic-grid fic-max-w-lg fic-grid-cols-1 fic-items-center fic-gap-y-6 sm:fic-mt-20 sm:fic-gap-y-0 lg:fic-max-w-4xl lg:fic-grid-cols-2">
            <div class="fic-rounded-3xl fic-rounded-t-3xl fic-bg-white/60 fic-p-8 fic-ring-1 fic-ring-gray-900/10 sm:fic-mx-8 sm:fic-rounded-b-none sm:fic-p-10 lg:fic-mx-0 lg:fic-rounded-bl-3xl lg:fic-rounded-tr-none">
                {!! $this->get('tiers.standard.name')->class('fic-text-base/7 fic-font-semibold fic-text-indigo-600') !!}
                <p class="fic-mt-4 fic-flex fic-items-baseline fic-gap-x-2">
                    {!! $this->get('tiers.standard.amount')->class('fic-text-5xl fic-font-semibold fic-tracking-tight fic-text-gray-900') !!}
                    {!! $this->get('tiers.standard.interval')->class('fic-text-base fic-text-gray-500') !!}
                </p>
                {!! $this->get('tiers.standard.description')->class('fic-mt-6 fic-text-base/7 fic-text-gray-600') !!}
                <ul role="list" class="fic-mt-8 fic-space-y-3 fic-text-sm/6 fic-text-gray-600 sm:fic-mt-10">
                    @foreach($this->get('tiers.standard.features') as $feature)
                        <li class="fic-flex fic-gap-x-3">
                            <x-fab::elements.icon :icon="$feature->icon->key" class="fic-h-6 fic-w-5 fic-flex-none fic-text-indigo-600" />
                            {!! $feature->name !!}
                        </li>
                    @endforeach
                </ul>
                {!! $this->get('tiers.standard.cta')->class('fic-mt-8 fic-block fic-rounded-md fic-px-3.5 fic-py-2.5 fic-text-center fic-text-sm fic-font-semibold fic-text-indigo-600 fic-ring-1 fic-ring-inset fic-ring-indigo-200 hover:fic-ring-indigo-300 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-indigo-600 sm:fic-mt-10') !!}
            </div>
            <div class="fic-relative fic-rounded-3xl fic-bg-gray-900 fic-p-8 fic-shadow-2xl fic-ring-1 fic-ring-gray-900/10 sm:fic-p-10">
                {!! $this->get('tiers.emphasized.name')->class('fic-text-base/7 fic-font-semibold fic-text-indigo-400') !!}
                <p class="fic-mt-4 fic-flex fic-items-baseline fic-gap-x-2">
                    {!! $this->get('tiers.emphasized.amount')->class('fic-text-5xl fic-font-semibold fic-tracking-tight fic-text-white') !!}
                    {!! $this->get('tiers.emphasized.interval')->class('fic-text-base fic-text-gray-400') !!}
                </p>
                {!! $this->get('tiers.emphasized.description')->class('fic-mt-6 fic-text-base/7 fic-text-gray-300') !!}
                <ul role="list" class="fic-mt-8 fic-space-y-3 fic-text-sm/6 fic-text-gray-300 sm:fic-mt-10">
                    @foreach($this->get('tiers.emphasized.features') as $feature)
                        <li class="fic-flex fic-gap-x-3">
                            <x-fab::elements.icon :icon="$feature->icon->key" class="fic-h-6 fic-w-5 fic-flex-none fic-text-indigo-400" />
                            {!! $feature->name !!}
                        </li>
                    @endforeach
                </ul>
                {!! $this->get('tiers.emphasized.cta')->class('fic-mt-8 block fic-rounded-md fic-bg-indigo-500 fic-px-3.5 fic-py-2.5 fic-text-center fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-indigo-400 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-indigo-500 sm:fic-mt-10') !!}
            </div>
        </div>
    </div>
</x-lego::section>
