<x-lego::section :section="$this">
    <div class="fic-relative fic-isolate fic-overflow-hidden fic-pt-14">
        {!! $this->getBackgroundImage() !!}
        <div class="fic-absolute fic-inset-x-0 fic--top-40 fic--z-10 fic-transform-gpu fic-overflow-hidden fic-blur-3xl sm:fic--top-80" aria-hidden="true">
            <div class="fic-relative fic-left-[calc(50%-11rem)] fic-aspect-[1155/678] fic-w-[36.125rem] fic--translate-x-1/2 fic-rotate-[30deg] fic-bg-gradient-to-tr from-[#ff80b5] fic-to-[#9089fc] fic-opacity-20 sm:fic-left-[calc(50%-30rem)] sm:fic-w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
            <div class="fic-mx-auto fic-py-32 sm:fic-py-48 lg:fic-py-56">
                @if($this->get('pill.should-display')->isChecked())
                    <div class="fic-hidden sm:fic-mb-8 sm:fic-flex sm:fic-justify-center">
                        <div class="fic-relative fic-rounded-full fic-px-3 fic-py-1 fic-text-sm/6 fic-text-gray-400 fic-ring-1 fic-ring-white/10 hover:fic-ring-white/20">
                            {{ $this->get('pill.content') }}
                            @if($this->get('pill.link')->getContent())
                                <a
                                    href="{{ $this->get('pill.link')->getHref() }}"
                                    class="fic-font-semibold fic-text-white"
                                    target="{{ $this->get('pill.link')->getTarget() }}"
                                    aria-label="{{ $this->get('pill.link')->getA11yTitle() }}"
                                >
                                    <span class="fic-absolute fic-inset-0" aria-hidden="true"></span>
                                    {{ $this->get('pill.link')->getContent() }} <span aria-hidden="true">&rarr;</span>
                                </a>
                            @endif
                        </div>
                    </div>
                @endif
                <div class="fic-text-center flex flex-col items-center">
                    <h1 class="{{ $this->get('heading.max-width')->key }} fic-text-balance fic-font-semibold fic-tracking-tight {{ $this->get('heading.color')->key }} {{ $this->get('heading.size')->key }}">
                        {!! $this->get('heading.content') !!}
                    </h1>
                    <p class="{{ $this->get('subheading.max-width')->key }} fic-mt-8 fic-text-pretty fic-font-medium {{ $this->get('subheading.color')->key }} {{ $this->get('subheading.size')->key }}">
                        {!! $this->get('subheading.content') !!}
                    </p>
                    <div class="fic-mt-10 fic-flex fic-items-center fic-justify-center fic-gap-x-6">
                        {!! $this->get('ctas.primary')->class('fic-rounded-md fic-bg-indigo-500 fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-indigo-400 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-indigo-400') !!}
                        {!! $this->get('ctas.secondary')->class('fic-text-sm/6 fic-font-semibold fic-text-white') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-lego::section>
