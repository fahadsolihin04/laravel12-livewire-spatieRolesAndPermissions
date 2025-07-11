<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Role') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('This page is for show role') }}</flux:subheading>
        <flux:separator variant="subtle"/>
    </div>

    <div>
        <div class="p-3">
            <a href="{{ route("roles.index") }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300">
                Back
            </a>

            <div class="w-85% md:w-100">
                <p class="mt-2"><strong>Name: </strong>{{  $role->name  }}</p>
                <p class="mt-2"><strong>Permissions: </strong>
                    @if ($role->permissions)
                        @foreach ($role->permissions as $permission)
                            <flux:badge class="mt-1">{{ $permission->name }}</flux:badge>
                        @endforeach
                    @endif
                </p>
            </div>

        </div>
    </div>
</div>
