<div class="container">
    <section class="text-center">
        <h4 class="mb-5"><strong>Son Yazılar</strong></h4>
        <div class="row">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Hızlı Blog Ara..." wire:model="search" />
                @if ($search != '')
                    <button wire:click="clear" class="btn btn-outline-primary" type="button" id="button-addon2"
                        data-mdb-ripple-color="dark">
                        Ara
                    </button>
                @endif
            </div>
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ Storage::url($blog->photo) }}" class="img-fluid" />
                            <a href="{{ route('blog-detay', $blog->id) }}">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">
                                {{ Str::limit($blog->text, 55, '...') }}
                            </p>
                            <a href="{{ route('blog-detay', $blog->id) }}" class="btn btn-primary">Detaylar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </section>
    <!--Section: Content-->

    <!-- Pagination -->
    <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
            {{ $blogs->links() }}
        </ul>
    </nav>
</div>
