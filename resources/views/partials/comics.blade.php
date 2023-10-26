<div class="container py-3">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($comics as $comic)
        <div class="col">
            <div class="card h-100">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="Title">
                <div class="card-body">
                    <h4 class="card-title">{{$comic['series']}}</h4>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            There are no comics available.
        </div>
        @endforelse
    </div>

    <div class="py-3 text-center">
        <a href="##" class="px-5 btn btn-primary rounded-0 text-uppercase fw-bold">load more</a>
    </div>
</div>