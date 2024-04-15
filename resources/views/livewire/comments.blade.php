<div>
    <form wire:submit="save" class="mt-8 min-w-72 md:min-w-96 max-w-lg ">
        <div class="mt-1 flex flex-col flex-wrap sm:flex-nowrap gap-4 w-full">
            <div>
                <input wire:model="name" type="text" id="name" name="name" placeholder="Your full name" class="block w-full py-4 px-4 rounded border border-emerald-500 focus-visible:outline-emerald-500 focus:border-emerald-500 focus:ring-0 focus:ring-emerald-500 sm:text-lg mb-0" />
                <div>
                    @error('name') <span class="error text-xs text-red-700">{{ $message }}</span> @enderror
                </div>
            </div>
            <div>
                <textarea wire:model="comments" id="comments" name="comments" placeholder="Comments" class="block w-full py-4 px-4 rounded border border-emerald-500 focus-visible:outline-emerald-500 focus:border-emerald-500 focus:ring-0 focus:ring-emerald-500 sm:text-lg" noValidate></textarea>
                <div>
                    @error('comments') <span class="error text-xs text-red-700">{{ $message }}</span> @enderror
                </div>
            </div>

            <button
                type="submit"
                class="mt-4 sm:mt-0 rounded bg-emerald-500 px-7 py-2.5 text-md font-semibold text-white shadow-sm hover:bg-emerald-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600"
            >
                Submit
            </button>
        </div>
    </form>
</div>
