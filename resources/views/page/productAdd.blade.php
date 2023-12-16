@extends('layout.master');

@section('content');


<div class="container-fluid">
            <div class="row  align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-10 ">
                    <div class="bg-secondary rounded p-2 p-sm-5 my-1 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                           
                            <h3>Category</h3>
                        </div>
                        <form action="{{route('productAddCore')}}" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="productName" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Product Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="short_des" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Short Des</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="productImage" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Product Image</label>
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
                            <input type="text" class="form-control" name="productEnum" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Product Enum</label>
                        </div>
                        <div class="form-floating mb-3">
                            <section class="form-control" name='category_id' >Product Category

                            <option value=""></option>
                            </section>
                           
                        </div>
                        <div class="form-floating mb-3">
                        <section class="form-control" name="brand_id" >Product Brand
                           <option value=""></option>
                            </section>
                            <label for="floatingInput">Product Name</label>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Save</button>
                      
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <!-- Recent Sales End -->


@endsection