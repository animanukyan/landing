<div>
    @if(! $thankYou)
        @if(! $subscription)
        <livewire:email :subscription="$subscription" x-transition/>
        @else
        <livewire:comments :subscription="$subscription" x-transition/>
        @endif
    @else
        <div class="p-8 text-4xl text-center border rounded-2xl mt-8 bg-emerald-500 text-white" x-transition>
            Thank you
        </div>
    @endif
</div>
