<x-layout>
    <x-slot:content>
        <div class="container py-4">
            @if ($sessionStatus = session('status'))
            <div class="row">
                <div class="col-6 offset-6">
                    <div class="alert alert-success d-flex justify-content-between align-items-center" role="alert">
                        <div>
                            <i class="fa-solid fa-check"></i> {{ $sessionStatus }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            @endif
            <div class="d-flex justify-content-between align-items-center">
                <h1>Property Management</h1>
                <div>
                    <a href="{{ route('property.create') }}" class="btn btn-primary">Create New Property</a>
                </div>
            </div>
            <div class="property-list my-4 row">
                @foreach ($properties as $property)
                    <div class="col-6">
                        <x-property-card :property="$property" />
                    </div>
                @endforeach
                <div class="property-list__pagination d-flex justify-content-end">
                    {{ $properties->links() }}
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layout>