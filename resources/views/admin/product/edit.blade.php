@extends('admin.layouts.index')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Product</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Edit Product</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Edit Product</h4>

                            <form class="parsley-examples" action="#">
                                <div class="form-group">
                                    <label for="nameProtype">Name Protype<span class="text-danger">*</span></label>
                                    <input type="text" name="nick" parsley-trigger="change" required=""
                                        placeholder="Enter Name Protype" class="form-control" id="nameProtype">
                                </div>

                                <div class="form-group">
                                    <label for="protype_id">Amount<span class="text-danger">*</span></label>
                                    <input type="text" name="protype_id" parsley-trigger="change" required=""
                                        placeholder="Enter Protype ID" class="form-control" id="protype_id">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Choose a manufacture:</label>
                                    <select name="idManufacture" id="cate">
                                        <option value="1">Apple</option>
                                        <option value="2">Sam Sung</option>
                                        <option value="3">Realme</option>
                                    </select> *
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Choose a protype:</label>

                                    <select name="idProtype" id="subcate">
                                        <option value="1">Phone</option>
                                        <option value="2">Headphone</option>
                                        <option value="3">Speaker</option>
                                    </select> *

                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose an image :</label>

                                    <input type="file" name="fileUpload" id="fileUpload" accept="image/*" required>

                                </div>
                                <div class="form-group">
                                    <label for="price">Price<span class="text-danger">*</span></label>
                                    <input type="text" name="price" parsley-trigger="change" required=""
                                        placeholder="Enter Price" class="form-control" id="price">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <textarea type="text" name="description" parsley-trigger="change" required=""
                                        placeholder="Enter Description" class="form-control"
                                        id="description"></textarea>
                                </div>
                                <div class="control-group">
                                    <label for="feature">Feature<span class="text-danger">*</span></label>
                                    <input type="number" name="feature" min="0" max="1" parsley-trigger="change"
                                        required="" placeholder="Enter Feature" class="form-control" id="feature">
                                </div>
                                
                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                        Cancel
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->


                <!-- end col -->
            </div>
            <!-- end row -->


            <!-- end row -->

        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->



    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2015 - 2020 &copy; Velonic theme by <a href="">Coderthemes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

@endsection