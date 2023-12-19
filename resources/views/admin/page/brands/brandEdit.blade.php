@extends('admin.layout.master');

@section('content');


<div class="container-fluid">
            <div class="row  align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-10 ">
                    <div class="bg-secondary rounded p-2 p-sm-5 my-1 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                           
                            <h3>Brands</h3>
                            
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="mdi mdi-check-all me-2"></i>
                                        {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            </div>
                            @endif
                        </div>
                        @foreach($data as $data)
                        <form action="{{route('adminPanal.brandEditCore',$data->id)}}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="brandName" value="{{$data->brandName}}" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Brand Update</label>
                            @error('brandName')
                            <p class="text-danger">{{$message}}</p>

                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Save</button>
                      
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
            <!-- Recent Sales End -->


@endsection