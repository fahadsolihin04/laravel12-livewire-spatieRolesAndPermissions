<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Products') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your all your products') }}</flux:subheading>
        <flux:separator variant="subtle"/>
    </div>

    <div>

        @session('success')
            <div class="flex items-center p-2 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-green-900 dark:text-green-300 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 w-8 h-8 mr-1 text-green-700 dark:text-green-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                </svg>
                <span class="font-medium"> {{ $value }} </span>
            </div>
        @endsession
        
        @can('product.create')
        <a href="{{ route("products.create") }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300">
            Create Product
        </a>
        @endcan
        <div class="overflow-x-auto mt-4">
<table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">ID</th>
            <th scope="col" class="px-6 py-3">Name</th>
            <th scope="col" class="px-6 py-3">Detail</th>
            <th scope="col" class="px-6 py-3 w-80">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr class="odd:bg-white even:bg-gray-50 dark:odd:bg-gray-900 dark:even:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$product->id}}
                </td>
                <td class="px-6 py-2">{{$product->name}}</td>
                <td class="px-6 py-2">{{$product->detail}}</td>
                <td class="px-6 py-2 space-x-1">
                    <div class="flex flex-col sm:flex-row sm:space-x-1 space-y-1 sm:space-y-0">
                        @can('product.view')
                        <a href="{{ route('products.show', $product->id) }}" class="cursor-pointer text-center px-3 py-2 text-xs font-medium text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800">
                            Show
                        </a>
                        @endcan
                        @can('product.edit')
                        <a href="{{ route('products.edit', $product->id) }}" class="cursor-pointer text-center px-3 py-2 text-xs font-medium text-white bg-yellow-600 rounded-lg hover:bg-yellow-800 focus:ring-2 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800">
                            Edit
                        </a>
                        @endcan
                        @can('product.delete')
                        <button wire:click="delete({{ $product->id }})" wire:confirm="Are you sure to remove this role?" class="cursor-pointer text-center px-3 py-2 text-xs font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800">
                            Delete
                        </button>
                        @endcan
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
        </div>
    </div>
</div>
