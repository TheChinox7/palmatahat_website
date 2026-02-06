<div id="productGrid">
    <div class="row g-1">
        @foreach($products as $product)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="single-new-arrival product-card mb-5 text-center">
                <div class="popular-img">
                    @php($cover = $product->coverImage())
                    @php($images = $product->images)
                    @php($second = $images->count() > 1 ? $images->firstWhere('id', '!=', optional($cover)->id) : null)
                    <a href="{{ route('product.show', $product->slug) }}" class="d-block image-stack {{ $second ? 'has-secondary' : '' }}">
                        <img class="stack-img img-primary" loading="lazy" decoding="async" src="{{ $cover ? asset($cover->path) : ($product->image_path ? asset($product->image_path) : asset('img/palma/cats/cat2.svg')) }}" alt="{{ $product->name }}">
                        @if($second)
                        <img class="stack-img img-secondary" loading="lazy" decoding="async" src="{{ asset($second->path) }}" alt="{{ $product->name }}">
                        @endif
                    </a>
                    <!-- <div class="favorit-items">
                        <img src="{{ asset('img/gallery/favorit-card.png') }}" alt="">
                    </div> -->
                </div>
                <div class="popular-caption">
                    <h3><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h3>
                    <span>{{ $currencySymbol }} {{ number_format($product->price,2) }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">{{ $products->appends(request()->query())->links() }}</div>
    </div>
</div>