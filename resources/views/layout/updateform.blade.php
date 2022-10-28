<div class="row mt-4">
    <div class="col-lg-5">
        <div class="card updatecard">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Update Banner</h6>
            </div>
            <div class="card-body p-3">
                <form action="{{ route('banners.update', $banner->id)}}" method="post" enctype="multipart/form-data">
                    <div class="formleft">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputAddress">Website</label>
                            <input type="text" class="form-control" value="{{ $banner->website }}" name="website" id="exampleInputAddress"
                                placeholder="Add your website here">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputAddress" name="email" value="{{ $banner->email }}" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">
                                Title
                            </label>
                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Title" value="{{ $banner->title }}" name="title">
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="date">
                                Expire Date
                            </label>
                            <div class="input-group">
                                <input class="form-control" id="date" placeholder="MM/DD/YYYY"
                                    type="date" value="{{ $banner->expire_date }}" name="expire_date">
                            </div>
                        </div>
                        
                    </div>
                    <div class="formright">
                        <div class="form-group">
                            <label for="exampleInputAddress">Description</label>
                            <input type="text" class="form-control" id="exampleInputAddress"
                                placeholder="Describe your banner" name="description" value="{{ $banner->description }}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Banner Type</label>
                            <select class="form-control" name="banner_type" value="{{ $banner->banner_type }}">
                                <option >Default select</option>
                                <option value="Header">Header Banner - Rs:8000/=</option>
                                <option value="side">Side Banner - Rs:5000/=</option>
                                <option value="footer">Footer Banner - Rs:3000/=</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Invest Amount</label>
                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Amount" name="amount" value="{{ $banner->amount }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Banner Upload Here</label></br>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_path" value="{{ $banner->img_path }}">
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