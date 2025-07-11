<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form for create user') }}</flux:subheading>
        <flux:separator variant="subtle"/>
    </div>

    <div>
        <div class="p-3">
            <a href="{{ route("users.index") }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300">
                Back
            </a>

            <div class="w-85% md:w-100">
                <form wire:submit="submit" class="mt-6 space-y-6">
                    <flux:input wire:model="name" label="Name" placeholder="Name"/>
                    <flux:input wire:model="email" label="Email" type="email" placeholder="Email"/>                    
                    <flux:input wire:model="password" label="Password" type="password" placeholder="Password"/>
                    <flux:input wire:model="confirm_password" label="Confirm Password" type="password" placeholder="Confirm Password"/>
                    <flux:checkbox.group wire:model="roles" label="Roles">
                        @foreach ($allRoles as $role)
                            <flux:checkbox label="{{ $role->name }}" value="{{ $role->name }}" checked />
                        @endforeach
                    </flux:checkbox.group>
                    <flux:button type="submit" variant="primary" class="cursor-pointer rounded-lg px-2 py-1 text-xs font-medium focus:outline-none focus:ring-2 
                        // Gaya untuk mode terang (default)
                        bg-black-700 text-white hover:bg-black-800 focus:ring-black-300 
                        // Gaya untuk mode gelap
                        dark:bg-white dark:text-black dark:hover:bg-gray-200 dark:focus:ring-gray-500">
                        Submit
                    </flux:button>
                </form>
            </div>

        </div>
    </div>
</div>
