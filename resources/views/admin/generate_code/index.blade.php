@extends('admin.layout.app')

@section('content')

    <div class="container-fluid">

     {{-- START OF MODAL --}}

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Generate Code</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-group" method="" action="">
                <div class="form-group">
                  <label>Raffle Code</label>
                  <input type="text" name="generated_code" class="form-control">
                  <button class="btn btn-primary mt-2">Generate</button>
                </div>
                <div class="form-group">
                  <label>Spin</label>
                  <input type="text" name="spin" class="form-control">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <input type="text" name="category" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email To</label>
                  <input type="email" name="email" class="form-control is-invalid">
                  <div class="invalid-feedback">
                    Invalid Email Address
                  </div>
                </div>
              </form>
            </div>  
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Send</button>
            </div>
          </div>
        </div>
      </div>

      {{-- END OF MODAL --}}

      {{-- START OF ACTION CARDS --}}

        {{-- CARD TO SHOW MODAL --}}
        <div class="row mt-3">
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Generate Code</div>
                    <button class="font-weight-bold text-primary-800 btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">Create</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- END OF CARD TO SHOW MODAL --}}

          {{-- FILTER LIST CARD --}}
          <div class="col-xl-3 col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Category</div>
                  <div class="col-12 mr-2">
                    <form class="mr-auto my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <select class="form-group form-control border-0">
                          <option>Quantity</option>
                          <option>Category</option>
                          <option>Status</option>
                        </select>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- END OF FILTER LIST CARD --}}

          {{-- START OF SEARCH CARD --}}
          <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Look for</div>
                  <div class="col-12 mr-2">
                    <form class="mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="search.." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
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
        {{-- END OF SEARCH CARD --}}

    {{-- END OF ACTION CARDS --}}
    </div>


    {{-- START OF TABLE --}}
    <div class="container-fluid">
       <div class="card shadow mb-4">
        <div class="card-header py-3">
          <div class="row p-0">
            <div class="col-sm-12 col-md-4 col-lg-7">
                <h6 class="m-0 font-weight-bold text-primary">Raffle Codes</h6>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <div class="col-sm-12 col-md-6 form-group form-inline align-items-center">
              <label class="form-group">Show</label>
              <select class="form-control ml-1 mr-1">
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>25</option>
              </select>
              <label class="form-group">Entries</label>
            </div>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Code</th>
                  <th>Spin</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>iLCx1cBlftD5mA73k1jUoqXJJXqm92xM</td>
                  <td>7</td>
                  <td>Minor</td>
                  <td>Active</td>
                  <td>July 2, 2020</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>kuquj3kkOItRe1xHnoGkmzGqoAKFUFtc</td>
                  <td>7</td>
                  <td>Minor</td>
                  <td>Used</td>
                  <td>July 2, 2020</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>b871I7GZHxzpxyeOIJSjIZBZ8z4aFrGZ</td>
                  <td>7</td>
                  <td>Major</td>
                  <td>Not Used</td>
                  <td>July 2, 2020</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>YfoLVbMZ6c3GSL1yFFEfy1vhLDDKzlsC</td>
                  <td>7</td>
                  <td>Major</td>
                  <td>Won</td>
                  <td>July 2, 2020</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
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
    {{-- END OF TABLE --}}
  </div>

@endsection