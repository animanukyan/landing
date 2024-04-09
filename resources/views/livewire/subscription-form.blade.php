<div class="relative flex flex-col items-center md:min-w-96 max-w-xl mx-auto">
    @if(! $thankYou)
        @if(! $subscription)
        <livewire:email :subscription="$subscription" x-transition/>
        @else
        <livewire:comments :subscription="$subscription" x-transition/>
        @endif
    @else
        <div class="p-8 text-4xl text-center border min-w-sm rounded-2xl my-8 border-emerald-500 bg-emerald-500 min-w-72 md:min-w-96 text-white" x-transition>
            Thank you
        </div>
    @endif
</div>
