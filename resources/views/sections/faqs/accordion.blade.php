<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        <div class="fic-mx-auto fic-max-w-4xl fic-divide-y fic-divide-gray-900/10">
            {!! $this->get('heading.copy')->class('font-headline fic-text-2xl fic-font-bold fic-leading-10 fic-tracking-tight fic-text-gray-900') !!}
            <dl class="fic-mt-10 fic-space-y-6 fic-divide-y fic-divide-gray-900/10">
                @foreach($this->get('faqs') as $faq)
                    <div
                        x-data="{
                            isOpen: false,
                            open() { this.isOpen = true },
                            close() { this.isOpen = false },
                            toggle() { this.isOpen = ! this.isOpen },
                        }"
                        class="pt-6"
                    >
                        <dt>
                            <button
                                type="button"
                                class="fic-flex fic-w-full fic-items-start fic-justify-between fic-text-left fic-text-gray-900"
                                aria-controls="faq-{{ $loop->index }}"
                                :aria-expanded="isOpen"
                                x-on:click="toggle"
                            >
                                {!! $faq->question->class('fic-text-base fic-font-semibold fic-leading-7') !!}
                                <span class="fic-ml-6 fic-flex fic-h-7 fic-items-center">
                                    <svg
                                        x-show="! isOpen"
                                        class="fic-h-6 fic-w-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6"/>
                                    </svg>
                                    <svg
                                        x-show="isOpen"
                                        class="h-6 w-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6"/>
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="isOpen" class="fic-mt-2 fic-pr-12" id="faq-{{ $loop->index }}">
                            {!! $faq->answer->class('fic-text-base fic-leading-7 fic-text-gray-600') !!}
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</x-lego::section>
