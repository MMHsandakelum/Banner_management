<div class="row mt-4">
    <div class="col-lg-5">
        <div class="card addbannercard">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">ADD YOUR BANNER HERE</h6>
            </div>
            <div class="card-body p-3">
                <form action="{{ route('banners.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="formleft">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Company ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="company_id" aria-describedby="emailHelp"
                                placeholder="Place company ID here">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Website</label>
                            <input type="text" class="form-control" name="website" id="exampleInputAddress"
                                placeholder="Add your website here">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputAddress" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">
                                <Table>Title</Table>
                            </label>
                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Title" name="title" required>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="date">
                                Publish Date
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="date" placeholder="MM/DD/YYYY"
                                    type="date" name="starting_date">
                            </div>
                        </div>
                    </div>
                    <div class="formright">
                        <div class="form-group">
                            <label for="exampleInputAddress">Description</label>
                            <input type="text" class="form-control" id="exampleInputAddress"
                                placeholder="Describe your banner" name="description" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Banner Type</label>
                            <select class="form-control" name="banner_type">
                                <option >Default select</option>
                                <option value="Header">Header Banner - Rs:8000/=</option>
                                <option value="side">Side Banner - Rs:5000/=</option>
                                <option value="footer">Footer Banner - Rs:3000/=</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Invest Amount</label>
                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Amount" name="amount">
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="date">
                                Expire Date
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="date" placeholder="MM/DD/YYYY"
                                    type="date" name="expire_date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Banner Upload Here</label></br>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_path">
                        </div>
                    </div></br>
                    <div class="submitbtn">
                        <button type="submit" class="btn btn-primary small-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

{{-- <script>
$(document).ready(function() {
    var date_input = $('input[name="starting_date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd-mm-yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })
})
$(document).ready(function() {
    var date_input = $('input[name="expire_date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'dd-mm-yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })
})
</script> --}}