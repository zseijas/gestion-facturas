<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Shopping') }}</div>
                <br>

                <form method="POST" action="{{ url('api/shopping/buy') }}">
                
                    <div class="card-body">
                        <select name="product" id="product">
                            @foreach ($products as $product)
                                <option value="{{$product->id}}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit">Buy</button>
                </form>

            </div>
        </div>
    </div>
</div>