<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banners</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="./assets/css/table.css" rel="stylesheet" />

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Employees</b></h2>
                    </div>
                    <div class="btn-group">
                        <div class="col-sm-6">
                            <a href="{{url('addbanner')}}" class="btn btn-info" data-toggle="modal"> <span> + Add Banner</span></a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{url('dashbord')}}" class="btn btn-success" data-toggle="modal"> <span>Back To
                                    Home</span></a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Company ID</th>
                        <th>website</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Type</th>
                        {{-- <th>Category</th> --}}
                        <th>Amount</th>
                        <th>start date</th>
                        <th>Expire date</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($banners as $banner)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $banner->company_id }}</td>
                        <td>{{ $banner->website }}</td>
                        <td>{{ $banner->email }}</td>
                        <td>{{ $banner->title }}</td>
                        <td>{{ $banner->description }}</td>
                        <td>{{ $banner->banner_type }}</td>
                        {{-- <td>{{ $banner->category }}</td> --}}
                        <td>{{ $banner->amount }}</td>
                        <td>{{ $banner->starting_date }}</td>
                        <td>{{ $banner->expire_date }}</td>
                        <td>{{ $banner->img_path }}</td>
                        <td>{{ $banner->status }}</td>
                        <td >
                            <form action="{{ route('banners.destroy', $banner->id)}}" method="POST">
                                <a href="{{ route('banners.show', $banner->id)}}"  class="view"><i class="material-icons"
                                        data-toggle="tooltip">&#xe8f4;</i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete"><i class="material-icons"
                                    data-toggle="tooltip" title="Delete">&#xE872;</i>
                                </button>
                            </form> 
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $banners->links() !!}
            <div class="clearfix">

                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    {{-- <div id="viewEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="col-12 mb-3">
                        <strong>Post Titile: </strong>
                        
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <!-- Delete Modal HTML -->
    {{-- <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('banners.index') }}" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
</body>
{{-- <script>
$(document).ready(function() {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function() {
        if (this.checked) {
            checkbox.each(function() {
                this.checked = true;
            });
        } else {
            checkbox.each(function() {
                this.checked = false;
            });
        }
    });
    checkbox.click(function() {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});
</script> --}}

</html>