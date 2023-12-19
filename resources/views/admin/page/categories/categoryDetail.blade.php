@extends('admin.layout.master');

@section('content');


<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Categories Data Detail </h6>

                      
                     
                    </div>
                    <div>
                    @foreach($data as $data)
                        <h1>Category Name :: {{$data->categoryName}}</h1>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


@endsection