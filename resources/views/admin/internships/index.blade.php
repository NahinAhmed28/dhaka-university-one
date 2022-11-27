@extends('admin.layouts.app')

@section('content')

<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Product LIST</strong></h4>
    <table class="table table-hover table-striped">
        <thead class="badge-light">
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Company</th>
        <th>Product Category</th>
        <th>Expire Date</th>
        <th>Price</th>
        </thead>
        <tbody>
{{--                    @foreach($products as $product)--}}
{{--                        <tr>--}}
{{--                            <td>{{$product->id}}</td>--}}
{{--                            <td>{{$product->name}}</td>--}}
{{--                            <td>{{$product->company->title}}</td>--}}
{{--                            <td>{{$product->category->name}}</td>--}}
{{--                            <td>{{$product->expire_date}}</td>--}}
{{--                            <td>{{$product->price}}</td>--}}

{{--                        </tr>--}}
{{--                    @endforeach--}}
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
{{--        {!! $products->links() !!}--}}
    </div>
</div>
</div>
@endsection
