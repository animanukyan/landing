<div class="relative flex flex-col items-center md:-mt-6">
    @if(! $thankYou)
        @if(! $subscription)
        <livewire:email :subscription="$subscription" x-transition/>
        @else
        <livewire:comments :subscription="$subscription" x-transition/>
        @endif
    @else
        <div class="p-8 text-4xl text-center border rounded-2xl mt-8 border-emerald-500 text-emerald-500" x-transition>
            Thank you
        </div>
    @endif
</div>
