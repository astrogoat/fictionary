<div
    x-data="{ show: false, videoContent: '' }"
    @open-video-modal.window="show = true; videoContent = $event.detail.video"
    @keydown.escape.window="show = false"
    x-show="show"
    x-cloak
    class="fic-fixed fic-inset-0 fic-z-50 fic-overflow-y-auto"
    style="display: none;"
>
    <!-- Backdrop -->
    <div
        class="fic-flex fic-items-center fic-justify-center fic-min-h-screen fic-px-4 fic-pt-4 fic-pb-20 fic-text-center sm:fic-block sm:fic-p-0"
    >
        <div
            x-show="show"
            x-transition:enter="fic-ease-out fic-duration-300"
            x-transition:enter-start="fic-opacity-0"
            x-transition:enter-end="fic-opacity-100"
            x-transition:leave="fic-ease-in fic-duration-200"
            x-transition:leave-start="fic-opacity-100"
            x-transition:leave-end="fic-opacity-0"
            @click="show = false"
            class="fic-fixed fic-inset-0 fic-bg-black fic-bg-opacity-75 fic-transition-opacity"
        ></div>

        <!-- Center align modal -->
        <span class="fic-hidden sm:fic-inline-block sm:fic-align-middle sm:fic-h-screen" aria-hidden="true">&#8203;</span>

        <!-- Modal -->
        <div
            x-show="show"
            x-transition:enter="fic-ease-out fic-duration-300"
            x-transition:enter-start="fic-opacity-0 fic-translate-y-4 sm:fic-translate-y-0 sm:fic-scale-95"
            x-transition:enter-end="fic-opacity-100 fic-translate-y-0 sm:fic-scale-100"
            x-transition:leave="fic-ease-in fic-duration-200"
            x-transition:leave-start="fic-opacity-100 fic-translate-y-0 sm:fic-scale-100"
            x-transition:leave-end="fic-opacity-0 fic-translate-y-4 sm:fic-translate-y-0 sm:fic-scale-95"
            @click.away="show = false"
            class="fic-inline-block fic-align-bottom fic-bg-white fic-rounded-lg fic-text-left fic-overflow-hidden fic-shadow-xl fic-transform fic-transition-all sm:fic-my-8 sm:fic-align-middle fic-w-full sm:fic-max-w-4xl fic-relative"
        >
            <!-- Close button -->
            <button
                @click="show = false"
                type="button"
                class="fic-absolute fic-top-4 fic-right-4 fic-z-10 fic-text-white hover:fic-text-gray-300 fic-transition-colors fic-bg-black fic-bg-opacity-50 fic-rounded-full fic-p-2 focus:fic-outline-none focus:fic-ring-2 focus:fic-ring-white"
            >
                <svg class="fic-h-6 fic-w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Video content -->
            <div class="fic-bg-black fic-aspect-video fic-w-full">
                <div x-html="videoContent" class="fic-w-full fic-h-full"></div>
            </div>
        </div>
    </div>
</div>
