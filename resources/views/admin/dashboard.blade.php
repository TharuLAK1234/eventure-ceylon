<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <p class="mb-0">
                    {{ __('Signed in as an Admin. Fleet, package, and reporting management land here in later sprints.') }}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
