<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-6 text-center">Create Boat</h1>
    
    <!-- Success Message -->
    @if (session()->has('message'))
        <div class="alert alert-success bg-green-500 text-white p-4 rounded mb-6">
            {{ session('message') }}
        </div>
    @endif

    <!-- Boat Create Form -->
    <form wire:submit.prevent="submit" class="space-y-6 max-w-2xl mx-auto">
        <!-- Boat Name -->
        <div class="space-y-2">
            <label for="name" class="block text-sm font-medium text-gray-700">Boat Name</label>
            <input type="text" id="name" wire:model="name" class="relative block w-full appearance-none rounded-lg px-[calc(theme(spacing[3.5])-1px)] py-[calc(theme(spacing[2.5])-1px)] sm:px-[calc(theme(spacing[3])-1px)] sm:py-[calc(theme(spacing[1.5])-1px)] text-base/6 text-zinc-950 placeholder:text-zinc-500 sm:text-sm/6 dark:text-white border border-zinc-950/10 data-[hover]:border-zinc-950/20 dark:border-white/10 dark:data-[hover]:border-white/20 bg-transparent dark:bg-white/5 focus:outline-none data-[invalid]:border-red-500 data-[invalid]:data-[hover]:border-red-500 data-[invalid]:dark:border-red-500 data-[invalid]:data-[hover]:dark:border-red-500 data-[disabled]:border-zinc-950/20 dark:data-[hover]:data-[disabled]:border-white/15 data-[disabled]:dark:border-white/15 data-[disabled]:dark:bg-white/[2.5%] dark:[color-scheme:dark]" placeholder="Enter boat name">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Longitude -->
        <div class="space-y-2">
            <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
            <input type="number" id="longitude" wire:model="longitude" class="relative block w-full appearance-none rounded-lg px-[calc(theme(spacing[3.5])-1px)] py-[calc(theme(spacing[2.5])-1px)] sm:px-[calc(theme(spacing[3])-1px)] sm:py-[calc(theme(spacing[1.5])-1px)] text-base/6 text-zinc-950 placeholder:text-zinc-500 sm:text-sm/6 dark:text-white border border-zinc-950/10 data-[hover]:border-zinc-950/20 dark:border-white/10 dark:data-[hover]:border-white/20 bg-transparent dark:bg-white/5 focus:outline-none data-[invalid]:border-red-500 data-[invalid]:data-[hover]:border-red-500 data-[invalid]:dark:border-red-500 data-[invalid]:data-[hover]:dark:border-red-500 data-[disabled]:border-zinc-950/20 dark:data-[hover]:data-[disabled]:border-white/15 data-[disabled]:dark:border-white/15 data-[disabled]:dark:bg-white/[2.5%] dark:[color-scheme:dark]" placeholder="Enter longitude">
            @error('longitude') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Skipping Included (Checkbox) -->
        <div class="space-y-2 flex items-center">
            <input type="checkbox" id="skipping_included" wire:model="skipping_included" class="form-checkbox text-indigo-600 h-5 w-5">
            <label for="skipping_included" class="ml-2 text-sm font-medium text-gray-700">Skipping Included</label>
            @error('skipping_included') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Quick Booking (Checkbox) -->
        <div class="space-y-2 flex items-center">
            <input type="checkbox" id="quick_booking" wire:model="quick_booking" class="form-checkbox text-indigo-600 h-5 w-5">
            <label for="quick_booking" class="ml-2 text-sm font-medium text-gray-700">Quick Booking</label>
            @error('quick_booking') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                Create Boat
            </button>
        </div>
    </form>
</div>
