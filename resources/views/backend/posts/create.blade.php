@extends('backend.admin.dashboard')
@section('manage')
<section class="panel">
    <header class="panel-heading">
        Create Brand
    </header>
    <div class="panel-body">
        <div class="position-center">
            @php
            $message =Session::get('message');
            if($message){
                echo $message;
                Session::put('message',null);
            }
        @endphp
            <form action ="{{ URL::to('/admin/products/store') }}"role="form" method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="form-group">
                    <label for="title_product">Title </label>
                    <input name='product_name' type="text" class="form-control" id="title_product">
                </div>
                <div class="form-group">
                    <label for="title_product">Price  </label>
                    <input name='product_price' type="number" step="0.01" class="form-control" id="title_product">
                </div>
                <div class="form-group">
                    <label for="title_product">Image  </label>
                    <input name='product_image' type="file" class="form-control" id="title_product">
                </div>
                <div class="form-group">
                    <label for="desc_product">Description</label>
                    <textarea name='product_desc' rows="4" cols="20" class="form-control" id="desc_product" ></textarea>
                </div>
                <div class="form-group">
                    <label for="desc_product">Content</label>
                    <textarea name='product_content' rows="4" cols="20" class="form-control" id="desc_product" ></textarea>
                </div>
                <div class="form-group">
                    <label for="status_product">Categories</label>
                    <select name='category_id' id="status_product" class="form-control input-sm m-bot15">
                        @foreach ($categories as $item )
                            <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">

                    <label for="status_product">Brands</label>
                    <select name='brand_id' id="status_product" class="form-control input-sm m-bot15">
                        @foreach ($brands as $item )
                            <option value="{{ $item->brand_id }}">{{ $item->brand_name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="status_product">Status</label>

                    <select name='product_status' id="status_product" class="form-control input-sm m-bot15">

                        <option value="0">Hide</option>
                        <option value="1">Show</option>
                    </select>

                </div>

                <button name='add_product' type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>

    </div>
</section>

@endsection


