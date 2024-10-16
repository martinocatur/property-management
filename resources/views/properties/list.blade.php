<x-layout>
    <x-slot:content>
        <div class="container py-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Property Management</h1>
                <div>
                    <a href="#" class="btn btn-primary">Create New Property</a>
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