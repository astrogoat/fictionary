<x-lego::section :section="$this" class="fic-bg-white dark:fic-bg-gray-900">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        <div class="fic-mx-auto fic-max-w-4xl fic-text-center fic-mb-16 sm:fic-mb-20">
            {!! $this->get('eyebrow.copy')->class('fic-text-base fic-leading-7 fic-font-semibold fic-text-accent-600 dark:fic-text-accent-400') !!}
            {!! $this->get('heading.copy')->class('fic-mt-2 fic-font-semibold fic-tracking-tight fic-text-gray-900 dark:fic-text-white ' . $this->getHeadingSizeCss()) !!}
            {!! $this->get('description.copy')->class('fic-mx-auto fic-mt-6 fic-max-w-2xl fic-text-center fic-text-lg fic-font-medium fic-text-gray-600 sm:fic-text-xl sm:fic-leading-8 dark:fic-text-gray-400') !!}
        </div>
        <div class="fic-isolate fic-mx-auto fic-grid fic-max-w-md fic-grid-cols-1 fic-gap-y-8 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-3">
            <div class="fic-mr-px fic-flex fic-flex-col fic-justify-between fic-rounded-3xl fic-bg-white fic-p-8 fic-ring-1 fic-ring-gray-200 lg:fic-mt-8 lg:fic-rounded-r-none xl:fic-p-10 dark:fic-bg-gray-800/50 dark:fic-ring-gray-700">
                <div>
                    <div class="fic-flex fic-items-center fic-justify-between fic-gap-x-4">
                        {!! $this->get('tiers.one.name')->class('fic-text-lg fic-leading-8 fic-font-semibold fic-text-gray-900 dark:fic-text-white') !!}
                        {!! $this->get('tiers.one.badge')->class('fic-rounded-full fic-bg-accent-600/10 fic-px-2.5 fic-py-1 fic-text-xs fic-leading-5 fic-font-semibold fic-text-accent-600 dark:fic-bg-accent-400/10 dark:fic-text-accent-400') !!}
                    </div>
                    {!! $this->get('tiers.one.description')->class('fic-mt-4 fic-text-sm fic-leading-6 fic-text-gray-600 dark:fic-text-gray-300') !!}
                    <p class="fic-mt-6 fic-flex fic-items-baseline fic-gap-x-1">
                        {!! $this->get('tiers.one.amount')->class('fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 dark:fic-text-white') !!}
                        {!! $this->get('tiers.one.interval')->class('fic-text-sm fic-leading-6 fic-font-semibold fic-text-gray-600 dark:fic-text-gray-400') !!}
                    </p>
                    @if($this->get('tiers.one.features')->isNotEmpty())
                        <ul role="list" class="fic-mt-8 fic-space-y-3 fic-text-sm fic-leading-6 fic-text-gray-600 dark:fic-text-gray-300">
                            @foreach($this->get('tiers.one.features') as  $feature)
                                <li class="fic-flex fic-gap-x-3">
                                    <x-fab::elements.icon :icon="$feature->icon->key" class="fic-h-6 fic-w-5 fic-flex-none fic-text-accent-600 dark:fic-text-accent-400" />
                                    {!! $feature->name !!}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                {!! $this->get('tiers.one.cta')->class('fic-mt-8 fic-block fic-rounded-md fic-px-3 fic-py-2 fic-text-center fic-text-sm fic-leading-6 fic-font-semibold fic-text-accent-600 fic-ring-1 fic-ring-inset fic-ring-accent-200 hover:fic-ring-accent-300 focus-visible:fic-outline fic-outline-2 fic-outline-offset-2 fic-outline-accent-600 dark:fic-bg-white/10 dark:fic-text-white dark:fic-ring-white/10 dark:hover:fic-bg-white/20 dark:focus-visible:fic-outline-white') !!}
            </div>
            <div class="fic-flex fic-flex-col fic-justify-between fic-rounded-3xl fic-bg-white fic-p-8 fic-ring-1 fic-ring-accent-600 lg:fic-z-10 lg:fic-rounded-b-none xl:fic-p-10 dark:fic-bg-gray-800/50 dark:fic-ring-gray-700">
                <div>
                    <div class="fic-flex fic-items-center fic-justify-between fic-gap-x-4 fic-mt-4">
                        {!! $this->get('tiers.two.name')->class('fic-text-lg fic-leading-8 fic-font-semibold fic-text-accent-600 dark:fic-text-accent-400') !!}
                        {!! $this->get('tiers.two.badge')->class('fic-rounded-full fic-bg-accent-600/10 fic-px-2.5 fic-py-1 fic-text-xs fic-leading-5 fic-font-semibold fic-text-accent-600 dark:fic-bg-accent-400/10 dark:fic-text-accent-400') !!}
                    </div>
                    {!! $this->get('tiers.two.description')->class('fic-mt-8 fic-text-sm fic-leading-6 fic-text-gray-600 dark:fic-text-gray-300') !!}
                    <p class="fic-mt-6 fic-flex fic-items-baseline fic-gap-x-1">
                        {!! $this->get('tiers.two.amount')->class('fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 dark:fic-text-white') !!}
                        {!! $this->get('tiers.two.interval')->class('fic-text-sm fic-leading-6 fic-font-semibold fic-text-gray-600 dark:fic-text-gray-400') !!}
                    </p>
                    @if($this->get('tiers.two.features')->isNotEmpty())
                        <ul role="list" class="fic-mt-8 fic-space-y-3 fic-text-sm fic-leading-6 fic-text-gray-600 dark:fic-text-gray-300">
                            @foreach($this->get('tiers.two.features') as  $feature)
                                <li class="fic-flex fic-gap-x-3">
                                    <x-fab::elements.icon :icon="$feature->icon->key" class="fic-h-6 fic-w-5 fic-flex-none fic-text-accent-600 dark:fic-text-accent-400" />
                                    {!! $feature->name !!}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                {!! $this->get('tiers.two.cta')->class('fic-mt-8 fic-block fic-rounded-md fic-bg-accent-600 fic-px-3 fic-py-2 fic-text-center fic-text-sm fic-leading-6 fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-accent-500 focus-visible:fic-outline fic-outline-2 fic-outline-offset-2 fic-outline-accent-600 dark:fic-bg-accent-500 dark:hover:fic-bg-accent-400') !!}
            </div>
            <div class="fic-ml-px fic-flex fic-flex-col fic-justify-between fic-rounded-3xl fic-bg-white fic-p-8 fic-ring-1 fic-ring-gray-200 lg:fic-mt-8 lg:fic-rounded-l-none xl:fic-p-10 dark:fic-bg-gray-800/50 dark:fic-ring-gray-700">
                <div>
                    <div class="fic-flex fic-items-center fic-justify-between fic-gap-x-4">
                        {!! $this->get('tiers.three.name')->class('fic-text-lg fic-leading-8 fic-font-semibold fic-text-gray-900 dark:fic-text-white') !!}
                        {!! $this->get('tiers.three.badge')->class('fic-rounded-full fic-bg-accent-600/10 fic-px-2.5 fic-py-1 fic-text-xs fic-leading-5 fic-font-semibold fic-text-accent-600 dark:fic-bg-accent-400/10 dark:fic-text-accent-400') !!}
                    </div>
                    {!! $this->get('tiers.three.description')->class('fic-mt-4 fic-text-sm fic-leading-6 fic-text-gray-600 dark:fic-text-gray-300') !!}
                    <p class="fic-mt-6 fic-flex fic-items-baseline fic-gap-x-1">
                        {!! $this->get('tiers.three.amount')->class('fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 dark:fic-text-white') !!}
                        {!! $this->get('tiers.three.interval')->class('fic-text-sm fic-leading-6 fic-font-semibold fic-text-gray-600 dark:fic-text-gray-400') !!}
                    </p>
                    @if($this->get('tiers.three.features')->isNotEmpty())
                        <ul role="list" class="fic-mt-8 fic-space-y-3 fic-text-sm fic-leading-6 fic-text-gray-600 dark:fic-text-gray-300">
                            @foreach($this->get('tiers.three.features') as  $feature)
                                <li class="fic-flex fic-gap-x-3">
                                    <x-fab::elements.icon :icon="$feature->icon->key" class="fic-h-6 fic-w-5 fic-flex-none fic-text-accent-600 dark:fic-text-accent-400" />
                                    {!! $feature->name !!}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                {!! $this->get('tiers.three.cta')->class('fic-mt-8 fic-block fic-rounded-md fic-px-3 fic-py-2 fic-text-center fic-text-sm fic-leading-6 fic-font-semibold fic-text-accent-600 fic-ring-1 fic-ring-inset fic-ring-accent-200 hover:fic-ring-accent-300 focus-visible:fic-outline fic-outline-2 fic-outline-offset-2 fic-outline-accent-600 dark:fic-bg-white/10 dark:fic-text-white dark:fic-ring-white/10 dark:hover:fic-bg-white/20 dark:focus-visible:fic-outline-white') !!}
            </div>
        </div>
    </div>
</x-lego::section>
