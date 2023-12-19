@extends('admin.layout.master');

@section('content');


<div class="container-fluid">
            <div class="row  align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-10 ">
                    <div class="bg-secondary rounded p-2 p-sm-5 my-1 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                           
                            <h3>Category</h3>
                        </div>
                        <form action="{{route('adminPanal.productAddCore')}}" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="productName" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Product Name</label>
                        </div>
                      
                       
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="productPrice" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Product price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="productStock" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Product stock</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="productImage" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Product Image</label>
                        </div>

                        <div class="form-floating mb-3">
                            
                            <label for="floatingInput">Product Brand</label>

                            <select class="form-control" name="brand_id" id="floatingInput">
                                @php 
                                    $data=DB::table('brands')->get();
                                @endphp
                                @foreach($data as $data)
                                <option value="{{$data->id}}">{{$data->brandName}}</option>
                              @endforeach
                            </select>
                        </div>

                        <div class="form-floating mb-3">
                            
                            <label for="floatingInput">Product Category</label>
                            <select class="form-control" name="category_id" id="floatingInput">
                            @php 
                                    $data=DB::table('categories')->get();
                                @endphp
                                @foreach($data as $data)
                                <option value="{{$data->id}}">{{$data->categoryName}}</option>
                              @endforeach
                            </select>
                        </div>
                     
                 
                       
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Save</button>
                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <!-- Recent Sales End -->


@endsection