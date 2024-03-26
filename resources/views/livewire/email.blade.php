<div>
    <form wire:submit="save" class="my-8 md:my-12 max-w-lg">
        <div class="mt-1 flex flex-wrap sm:flex-nowrap">
            <input wire:model="email" type="text" id="email" name="email" placeholder="Email address" class="block w-full py-4 px-4 rounded sm:rounded-r-none border border-emerald-500 focus:border-emerald-500 focus:ring-0 focus:ring-emerald-500 sm:text-lg" noValidate/>

            <button
                type="submit"
                class="mt-4 sm:mt-0 rounded sm:rounded-l-none bg-emerald-500 px-7 py-2.5 text-md font-semibold text-white shadow-sm hover:bg-emerald-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-400"
            >
                Subscribe
            </button>
        </div>
        <div>
            @error('email') <span class="error text-xs text-red-700">{{ $message }}</span> @enderror
        </div>
    </form>
</div>
