<div class="card my-4 p-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>{{ $property->name }}</h5>
        <a href="{{ route('property.edit', compact('property')) }}" class="btn btn-warning">Edit</a>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            @foreach ($property->images as $image)
            <div class="col">
                <img src="{{ $image->image_url }}" class="card-img-top">
            </div>
            @endforeach
        </div>
        <div class="card-text">
            <hr class="my-1">
            <div class="features d-flex justify-content-evenly p-2">
                <div class="beds"><i class="fa-solid fa-bed"></i> {{ $property->number_of_bedrooms }}</div>
                <div class="baths"><i class="fa-solid fa-bath"></i> {{ $property->number_of_bathrooms }}</div>
                <div class="cars"><i class="fa-solid fa-car"></i> {{ $property->number_of_car_spaces }}</div>
            </div>
            <hr class="my-1">
            <div class="row my-4">
                <div class="col-8">
                    <i class="fa-solid fa-location-dot"></i>
                    <strong>{{ $property->address }}</strong>
                </div>
                <div class="col-4">
                    <div class="text-end">
                        <strong>Price ${{ $property->price }}</strong>
                    </div>
                </div>
            </div>
            <div class="description">
                {!! str()->of($property->description)->limit(200) !!}
            </div>
        </div>
    </div>
</div>