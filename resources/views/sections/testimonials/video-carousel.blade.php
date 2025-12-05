<x-lego::section>
    <div class="fic-mx-auto">
        {!! $this->get('title')->class('fic-text-3xl lg:fic-text-5xl fic-font-sans fic-uppercase fic-text-center fic-mb-6') !!}

        <div
            class="swiper-container swiper-{{ $this->id }} fic-overflow-hidden fic-w-full fic-px-6 lg:fic-px-20"
            wire:ignore
        >
            <div class="swiper-wrapper">
                @foreach($this->get('slides') as $slide)
                    <div class="swiper-slide">
                        <button
                            data-video="{{ base64_encode($slide->video->toHtml()) }}"
                            type="button"
                            class="video-button fic-relative fic-block fic-w-full fic-bg-white fic-rounded-lg fic-overflow-hidden focus:fic-outline-none focus:fic-ring-2 focus:fic-ring-offset-2 focus:fic-ring-teal-500"
                        >
                            {!! $slide->cover !!}
                            <div class="fic-absolute fic-bottom-6 fic-right-6 lg:fic-bottom-10 lg:fic-right-10 " aria-hidden="true">
                                <svg class="fic-h-10 fic-w-10 lg:fic-h-16 lg:fic-w-16 fic-text-accent-500" fill="currentColor" viewBox="0 0 84 84">
                                    <circle opacity="0.9" cx="42" cy="42" r="42" fill="white" />
                                    <path d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z" />
                                </svg>
                            </div>
                        </button>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Video Modal -->
    <x-fictionary::video-modal />
</x-lego::section>

@push('strata.footer')
    <!-- Swiper JS -->
    <script type="module">
        new Swiper(".swiper-{{ $this->id }}", {
            loop: {{ $this->get('options.mobile.loop')->isChecked() ? 'true' : 'false' }},
            slidesPerView: {{ $this->get('options.mobile.slidesPerView') }},
            spaceBetween: {{ $this->get('options.mobile.spaceBetween') }},
            centeredSlides: {{ $this->get('options.mobile.centeredSlides') ?? false }},
            breakpoints: {
                // when window width is >= 768px
                768: {
                    loop: {{ $this->get('options.tablet.loop')->isChecked() ? 'true' : 'false' }},
                    slidesPerView: {{ $this->get('options.tablet.slidesPerView') }},
                    spaceBetween: {{ $this->get('options.tablet.spaceBetween') }},
                    centeredSlides: {{ $this->get('options.tablet.centeredSlides') ?? false }},
                },
                // when window width is >= 1024px
                1024: {
                    loop: {{ $this->get('options.desktop.loop')->isChecked() ? 'true' : 'false' }},
                    slidesPerView: {{ $this->get('options.desktop.slidesPerView') }},
                    spaceBetween: {{ $this->get('options.desktop.spaceBetween') }},
                    centeredSlides: {{ $this->get('options.desktop.centeredSlides') ?? false }},
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                type: 'bullets',
            },
        });

        // Video button click handlers
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.swiper-{{ $this->id }} .video-button').forEach(button => {
                button.addEventListener('click', function() {
                    const encodedVideo = this.getAttribute('data-video');
                    const videoHtml = atob(encodedVideo);
                    window.dispatchEvent(new CustomEvent('open-video-modal', {
                        detail: { video: videoHtml }
                    }));
                });
            });
        });
    </script>
@endpush
