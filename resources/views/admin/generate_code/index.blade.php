@extends('admin.layout.app')

@section('content')
 <div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <div class="container-fluid">

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
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
                    Please provide Email
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
      <div class="row mt-3">
        <div class="col-xl-4 col-md-6 mb-4">
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
        <div class="col-xl-8 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Look for</div>
                <div class="col-12 mr-2">
                  <form class="mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="search.." aria-label="Search" aria-describedby="basic-addon2">
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
    </div>
    <div class="container-fluid">
       <div class="card shadow mb-4">
        <div class="card-header py-3">
          <div class="row p-0">
            <div class="col-sm-12 col-md-4 col-lg-7">
                <h6 class="m-0 font-weight-bold text-primary">Raffle Codes</h6>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-5 border-info">
              <div class="row">
                <h6 class="col-3 font-weight-bold text-primary text-right pt-2">Category</h6>
                <div class="col-9">
                  <select class="form-group form-control">
                    <option>Active</option>
                    <option>Used</option>
                    <option>Not Used</option>
                    <option>Won</option>
                    <option>Not Won</option>
                  </select>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
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
                  <td>iLCx1cBlftD5mA73k1jUoqXJJXqm92xM</td>
                  <td>7</td>
                  <td>Sales Person</td>
                  <td>Active</td>
                  <td>July 2, 2020</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>8yNEz7K7MwAuMYLXGLkTKxD3wTL3j4rE</td>
                  <td>15</td>
                  <td>Client</td>
                  <td>Active</td>
                  <td>July 2, 2020</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>XwZpF9j2VdJeis7izKu5zhSldDK2BKa7</td>
                  <td>10</td>
                  <td>Employee</td>
                  <td>Active</td>
                  <td>July 2, 2020</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>XDJ8UzbUu3pwbuTmIZeML9vK1ySRpk8F</td>
                  <td>20</td>
                  <td>Employee</td>
                  <td>Active</td>
                  <td>July 2, 2020</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit text-gray-100"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt text-gray-100"></i></button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection