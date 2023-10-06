{{-- <h6 class="card-body-title">New Admin Add Excel</h6>



<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf


    <div class="row">



        <div class="col-lg-4">

            <label class="custom-file">
                <input type="file" id="file" name="file" class="custom-file-input">
                <span class="custom-file-control"></span>
            </label>
        </div>


    </div> <!-- row -->
    <br><br>

    <div class="form-layout-footer">
        <button type="submit" class="btn btn-info mg-r-5">Submit</button>
        <a href="" class="btn btn-secondary">Cancel</a>
    </div><!-- form-layout-footer -->



    </div><!-- form-layout -->

</form> --}}



<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-lg-4">
            <label class="custom-file">
                <input type="file" id="file" name="file" class="custom-file-input">
                <span class="custom-file-control"></span>
            </label>
        </div>
    </div> <!-- row -->
    <br><br>

    <div class="form-layout-footer">
        <button type="submit" class="btn btn-info mg-r-5">Submit</button>
    </div><!-- form-layout-footer -->

</form>
