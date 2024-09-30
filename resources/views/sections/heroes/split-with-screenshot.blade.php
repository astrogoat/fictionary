<x-lego::section :section="$this">
    <div class="fic-relative fic-isolate fic-overflow-hidden">
        <svg
            class="fic-absolute fic-inset-0 fic--z-10 fic-h-full fic-w-full fic-stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1"
                         patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)"/>
        </svg>
        <div
            class="fic-mx-auto fic-max-w-7xl fic-px-6 fic-pb-24 fic-pt-10 lg:fic-flex lg:fic-px-8">
            <div class="fic-mx-auto fic-max-w-2xl lg:fic-mx-0 lg:fic-max-w-xl lg:fic-flex-shrink-0 lg:fic-pt-8">
                {!! $this->get('logo.media')->first()->removeWidth()->removeHeight()->class($this->get('logo.height')->key) !!}

                @if($this->get('update')->show->isChecked())
                    <div class="fic-mt-24 sm:fic-mt-32 lg:fic-mt-16">
                        <div class="fic-inline-flex fic-space-x-6">
                            <span
                                class="fic-rounded-full fic-bg-primary/10 fic-px-3 fic-py-1 fic-text-sm fic-font-semibold fic-leading-6 fic-text-primary fic-ring-1 fic-ring-inset fic-ring-primary/10">{{ $this->get('update')->badge }}</span>
                            <span
                                class="fic-inline-flex fic-items-center fic-space-x-2 fic-text-sm fic-font-medium fic-leading-6 fic-text-gray-600">
                                <span>{{ $this->get('update.update') }}</span>
                            </span>
                        </div>
                    </div>
                @endif

                <h1 class="font-headline fic-mt-10 fic-text-4xl fic-font-bold fic-tracking-tight fic-text-gray-900 sm:fic-text-6xl">{{ $this->get('heading') }}</h1>
                <p class="fic-mt-6 fic-text-lg fic-leading-8 fic-text-gray-600">{!! $this->get('subheading') !!}</p>

                @if(in_array($this->get('cta.mode')->getKey(), ['input', 'both']))
                    @unless($this->signUpSuccessful)
                        <form wire:submit.prevent="signUp">
                            <div class="fic-flex fic-gap-2 fic-mt-4">
                                {!! $this->get('cta.input')
                                    ->class('fic-block fic-w-full fic-rounded-md fic-border-0 fic-px-2 fic-py-1.5 fic-text-gray-900 fic-shadow-sm fic-ring-1 fic-ring-inset fic-ring-gray-300 placeholder:fic-text-gray-400 focus:fic-ring-2 focus:fic-ring-inset focus:fic-ring-primary sm:fic-text-sm sm:fic-leading-6')
                                    ->required()
                                !!}
                                {!! $this->get('cta.inputButton')->class('fic-rounded-md fic-bg-primary fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-primary/80 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-primary fic-whitespace-nowrap') !!}
                            </div>
                            @if($this->signUpSuccessful === false)
                                {{ $this->subscribedMessage }}
                            @endif
                        </form>
                    @else
                        <div class="fic-flex fic-mt-6 fic-mb-14 fic-font-bold">
                            {{ $this->subscribedMessage }}
                        </div>
                    @endunless
                @endif

                @if(in_array($this->get('cta.mode')->getKey(), ['buttons', 'both']))
                    <div class="fic-mt-10 fic-flex fic-items-center fic-gap-x-6">
                        {!! $this->get('cta.primaryCta')->class('fic-rounded-md fic-bg-primary fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-indigo-500 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-primary') !!}
                        {!! $this->get('cta.secondaryCta')->class('fic-text-sm fic-font-semibold fic-leading-6 fic-text-gray-900') !!}
                    </div>
                @endif
            </div>

            <div
                class="fic-mx-auto fic-mt-16 fic-flex fic-max-w-2xl sm:fic-mt-24 lg:fic-ml-10 lg:fic-mr-0 lg:fic-mt-0 lg:fic-max-w-none lg:fic-flex-none xl:fic-ml-32">
                <div class="fic-max-w-3xl fic-flex-none sm:fic-max-w-5xl lg:fic-max-w-none">
                    <div
                        class="fic--m-2 fic-rounded-xl fic-bg-gray-900/5 fic-p-2 fic-ring-1 fic-ring-inset fic-ring-gray-900/10 lg:fic--m-4 lg:fic-rounded-2xl lg:fic-p-4">
                        {!! $this->get('screenshot')->class('fic-w-[76rem] fic-rounded-md fic-shadow-2xl fic-ring-1 fic-ring-gray-900/10') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-lego::section>
