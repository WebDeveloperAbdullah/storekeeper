@extends('admin.layout.master');

@section('content');


<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Products</h6>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all me-2"></i>
                                        {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                            @endif
                     
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">I/D</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $data)
                                <tr>
                              
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->price}}</td>
                                    <td>{{$data->stock}}</td>
                                    
                                        
                                    <td>
                                        <form action="{{route('adminPanal.categoryDelete',$data->id)}}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger ">Delete</button>
                                        </form>
                                        <a class="btn btn-sm btn-success" href="{{route('adminPanal.productDetail',$data->id)}}">Detail</a>
                                        <a class="btn btn-sm btn-info" href="{{route('adminPanal.productEdit',$data->id)}}">Edit</a>
                                    </td>
</tr>
                                @endforeach
                             </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


@endsection