<div>
    <!-- Events List -->
    @if ($events && $events->count() > 0)
        <div class="space-y-6">
            @foreach ($events as $event)
                <button
                    wire:click="selectEvent({{ $event->id }})"
                    class="w-full card bg-base-100 shadow-md hover:shadow-xl transition-all ease-in-out overflow-hidden text-left"
                >
                    <div class="lg:flex">
                        <!-- Event Image -->
                        <div class="lg:w-40 lg:h-40 flex-shrink-0">
                            <figure class="aspect-video lg:aspect-square h-full">
                                <img src="/storage/{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-full object-cover" />
                            </figure>
                        </div>

                        <!-- Event Content -->
                        <div class="card-body flex-grow lg:p-6">
                            <h3 class="card-title text-lg text-secondary">{{ $event->title }}</h3>

                            <!-- Date Info -->
                            <div class="flex gap-4 items-center text-sm text-base-600 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                                    <path d="M8 2v4"/>
                                    <path d="M16 2v4"/>
                                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                                    <path d="M3 10h18"/>
                                </svg>
                                <span>
                                    {{ $event->start_date->format('M d') }}
                                    @if ($event->end_date)
                                        - {{ $event->end_date->format('M d') }}
                                    @endif
                                </span>
                            </div>

                            <!-- Location Info -->
                            <div class="flex gap-4 items-center text-sm text-base-600 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                                <span>{{ $event->location }}</span>
                            </div>

                            <!-- Description -->
                            <div class="text-sm text-base-content/80 line-clamp-3">
                                {!! $event->description !!}
                            </div>

                            <!-- Learn More Link -->
                            <div class="card-actions justify-end mt-4">
                                <span class="text-primary font-semibold flex items-center gap-2">
                                    Learn more
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                        <path d="M5 12h14"/>
                                        <path d="M12 5l7 7-7 7"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </button>
            @endforeach
        </div>

        <!-- View All Events Link -->
        <div class="mt-8 text-center">
            <a href="/events" class="btn btn-outline btn-primary">View All Events</a>
        </div>
    @else
        <div class="card bg-base-100 shadow-md">
            <div class="card-body text-center">
                <p class="text-base-600">No upcoming events at the moment.</p>
                <p class="text-sm text-base-600 mt-2">Check back soon for new events!</p>
            </div>
        </div>
    @endif

    <!-- Event Detail Modal -->
    @if ($selectedEvent)
        <div class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4" wire:click="closeEvent">
            <div class="card bg-base-100 max-w-2xl w-full max-h-[90vh] overflow-y-auto" @click.stop>
                <!-- Close Button -->
                <button
                    wire:click="closeEvent"
                    class="btn btn-ghost btn-sm btn-circle absolute right-4 top-4 z-10"
                >
                    ✕
                </button>

                <!-- Event Image -->
                <figure class="aspect-video w-full">
                    <img src="/storage/{{ $selectedEvent->image_url }}" alt="{{ $selectedEvent->title }}" class="w-full h-full object-cover" />
                </figure>

                <div class="card-body">
                    <!-- Title -->
                    <h2 class="card-title text-3xl text-secondary">{{ $selectedEvent->title }}</h2>

                    <!-- Date Info -->
                    <div class="flex gap-4 items-center text-base-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar">
                            <path d="M8 2v4"/>
                            <path d="M16 2v4"/>
                            <rect width="18" height="18" x="3" y="4" rx="2"/>
                            <path d="M3 10h18"/>
                        </svg>
                        <div>
                            <p class="font-semibold">
                                {{ $selectedEvent->start_date->format('F d, Y') }}
                                @if ($selectedEvent->end_date)
                                    - {{ $selectedEvent->end_date->format('F d, Y') }}
                                @endif
                            </p>
                            @if ($selectedEvent->start_date)
                                <p class="text-sm text-base-600">{{ $selectedEvent->start_date->format('l') }}</p>
                            @endif
                        </div>
                    </div>

                    <!-- Location Info -->
                    <div class="flex gap-4 items-start text-base-600 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin flex-shrink-0 mt-1">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                        <div>
                            <p class="font-semibold">{{ $selectedEvent->location }}</p>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="divider my-4"></div>

                    <!-- Full Description -->
                    <div class="prose prose-sm max-w-none text-base-content/90 mb-6">
                        {!! $selectedEvent->description !!}
                    </div>

                    <!-- Action Buttons -->
                    <div class="card-actions justify-end gap-3">
                        <button
                            wire:click="closeEvent"
                            class="btn btn-ghost"
                        >
                            Close
                        </button>
                        <a href="/events/{{ $selectedEvent->id }}" class="btn btn-primary">
                            View Full Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
