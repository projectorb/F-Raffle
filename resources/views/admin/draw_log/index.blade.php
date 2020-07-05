@extends('admin.layout.app')

@section('content')

<div class="container-fluid">

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-group" method="" action="">
                  <div class="row py-2" id="prize-form">
                    <div class="col-4 mt-2">
                      <label>Name</label>
                      <input type="text" class="form-control" placeholder="Description" value="Caitlyn">
                    </div>
                    <div class="col-4 mt-2">
                      <label>Contact</label>
                      <input type="text" class="form-control" placeholder="Contact" value="1234-123-1234">
                      <div class="invalid-feedback">
                        Invalid Contact 
                      </div>
                    </div>
                    <div class="col-4 mt-2">
                      <label>Email</label>
                      <input type="text" class="form-control" placeholder="Quantity" value="example@example.com">
                      <div class="invalid-feedback">
                        Invalid Email
                      </div>
                    </div>
                    <div class="col-6 mt-2">
                      <label>Raffle Prize</label>
                      <input type="text" class="form-control" placeholder="Raffle Prize" value="Darts and Target Center">
                    </div>
                    <div class="col-6 mt-2">
                      <label>Raffle Code</label>
                      <input type="text" class="form-control" placeholder="Raffle Code" value="iLCx1cBlftD5mA73k1jUoqXJJXqm92xM">
                    </div>
                    <div class="col-4 mt-2">
                      <label>Status</label>
                      <input type="text" class="form-control is-invalid" placeholder="status" value="Contact N/A">
                      <div class="invalid-feedback">
                        Invalid Contact
                      </div>
                    </div>
                    <div class="col-4 mt-2">
                      <label>Date</label>
                      <input type="text" class="form-control" placeholder="date" value="January 20, 2020">
                    </div>
                  </div>
              </form>
            </div>  
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </div>
      </div>

        <div class="row mt-3">

          <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Look for  raffle code</div>
                  <div class="col-12 mr-2">
                    <form class="mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Enter raffle code..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-info" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <div class="">
            <h6 class="m-0 font-weight-bold text-primary">Draw List</h6>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <div class="form-group form-inline">
              <label>Show</label>
              <select class="form-control ml-1 mr-1">
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>25</option>
              </select>
              <label>Entries</label>
            </div>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Raffle Code</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr >
                  <td>1</td>
                  <td>iLCx1cBlftD5mA73k1jUoqXJJXqm92xM</td>
                  <td>N/A</td>
                  <td> January 2, 2020 </td>
                  <td class="text-center">
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-sm btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>kuquj3kkOItRe1xHnoGkmzGqoAKFUFtc</td>
                  <td >N/A</td>
                  <td>January 2, 2020 </td>
                  <td class="text-center">
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-sm btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>b871I7GZHxzpxyeOIJSjIZBZ8z4aFrGZ</td>
                  <td>N/A</td>
                  <td> January 2, 2020 </td>
                  <td class="text-center">
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-sm btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>YfoLVbMZ6c3GSL1yFFEfy1vhLDDKzlsC</td>
                  <td >N/A</td>
                  <td> January 2, 2020 </td>
                  <td class="text-center">
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-sm btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>

            <div class="form-inline">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                  <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                </li>
                <li class="paginate_button page-item active">
                  <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                </li>
                <li class="paginate_button page-item next" id="dataTable_next">
                  <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
  </div>

@endsection