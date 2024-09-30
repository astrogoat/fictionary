<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        <div class="fic-mx-auto fic-max-w-2xl fic-rounded-3xl fic-ring-1 fic-ring-gray-200 lg:fic-mx-0 lg:fic-flex lg:fic-max-w-none">
            <div class="fic-p-8 sm:fic-p-10 lg:fic-flex-auto">
                <h3 class="fic-text-2xl fic-font-bold fic-tracking-tight fic-text-gray-900">{{ $this->get('heading') }}</h3>
                <p class="fic-mt-6 fic-text-base fic-leading-7 fic-text-gray-600">{!! $this->get('description') !!}</p>
                <div class="fic-mt-10 fic-flex fic-items-center fic-gap-x-4">
                    <h4 class="fic-flex-none fic-text-sm fic-font-semibold fic-leading-6 fic-text-indigo-600">{{ $this->get('includesHeading') }}</h4>
                    <div class="fic-h-px fic-flex-auto fic-bg-gray-100"></div>
                </div>
                <ul role="list" class="fic-mt-8 fic-grid fic-grid-cols-1 fic-gap-4 fic-text-sm fic-leading-6 fic-text-gray-600 sm:fic-grid-cols-2 sm:fic-gap-6">
                    @foreach($this->get('includes') as $include)
                        <li class="fic-flex fic-gap-x-3">
                            <svg class="fic-h-6 fic-w-5 fic-flex-none fic-text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                            </svg>
                            {{ $include->title }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="fic-p-2 fic-lg:mt-0 lg:fic-w-full lg:fic-max-w-md lg:fic-flex-shrink-0">
                <div class="fic-rounded-2xl fic-bg-gray-50 fic-py-10 fic-text-center fic-ring-1 fic-ring-inset fic-ring-gray-900/5 lg:fic-flex lg:fic-flex-col lg:fic-justify-center lg:fic-py-16">
                    <div class="fic-mx-auto fic-max-w-xs fic-px-8">
                        <p class="fic-text-base fic-font-semibold fic-text-gray-600">{{ $this->get('priceHeading') }}</p>
                        <p class="fic-mt-6 fic-flex fic-items-baseline fic-justify-center fic-gap-x-2">
                            <span class="fic-text-5xl fic-font-bold fic-tracking-tight fic-text-gray-900">{{ $this->get('price') }}</span>
                            <span class="fic-text-sm fic-font-semibold fic-leading-6 fic-tracking-wide fic-text-gray-600">{{ $this->get('currency') }}</span>
                        </p>
                        {!! $this->get('cta')->class('fic-mt-10 fic-block fic-w-full fic-rounded-md fic-bg-indigo-600 fic-px-3 fic-py-2 fic-text-center fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-indigo-500 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-indigo-600') !!}
                        <p class="fic-mt-6 fic-text-xs fic-leading-5 fic-text-gray-600">{!! $this->get('finePrint') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-lego::section>
