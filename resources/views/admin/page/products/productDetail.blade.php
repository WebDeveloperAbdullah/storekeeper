@extends('admin.layout.master');

@section('content');


<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Product Data Detail </h6>

                      
                     
                    </div>
                    <div>
                    @foreach($data as $data)
                        <h1>Product Name :: {{$data->title}}</h1>
                        <h1>Product Price :: {{$data->price}}</h1>
                        <h1>Product Stock :: {{$data->stock}}</h1>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


@endsection