@extends('admin.layout.app')

@section('content')
    <div class="container-fluid">

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Prizes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-group" method="" action="">
                  <div class="row border-bottom py-2" id="prize-form">
                    <div class="col">
                      <label>Description</label>
                      <input type="text" class="form-control" placeholder="Description">
                    </div>
                    <div class="col">
                      <label>Category</label>
                      <input type="text" class="form-control" placeholder="Category">
                    </div>
                    <div class="col">
                      <label>Quantity</label>
                      <input type="text" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="col pt-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label>Major Prize</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label>Minor Prize</label>
                      </div>
                    </div>
                  </div>
                  <div class="row border-bottom py-2" id="prize-form">
                    <div class="col">
                      <label>Description</label>
                      <input type="text" class="form-control" placeholder="Description">
                    </div>
                    <div class="col">
                      <label>Category</label>
                      <input type="text" class="form-control" placeholder="Category">
                    </div>
                    <div class="col">
                      <label>Quantity</label>
                      <input type="text" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="col pt-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label>Major Prize</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label>Minor Prize</label>
                      </div>
                    </div>
                  </div>
                  <div class="py-2">
                    <a class="btn btn-success text-gray-100">Add New</a>
                  </div>
              </form>
            </div>  
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Save</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-xl-3 col-md-3 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Create Prize</div>
                  <button class="font-weight-bold text-success-800 btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">Add</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-3 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Category</div>
                <div class="col-12 mr-2">
                  <form class="mr-auto my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                      <select class="form-group form-control border-0">
                        <option>Description</option>
                        <option>Quantity</option>
                        <option>Category</option>
                        <option>Major</option>
                        <option>Status</option>
                      </select>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Look for</div>
                <div class="col-12 mr-2">
                  <form class="mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="search.." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-success" type="button">
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
          <div class="">
            <h6 class="m-0 font-weight-bold text-primary">Prize List</h6>
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
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Category</th>
                  <th>Major</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Beautiful and fresh little books</td>
                  <td>30</td>
                  <td>Sales Person</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Skin care products</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>Yes</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Typewriter</td>
                  <td>7</td>
                  <td>Customer</td>
                  <td>No</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2">
                      <button class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="top" title="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Darts and Target Center</td>
                  <td>7</td>
                  <td>Employee</td>
                  <td>No</td>
                  <td>Active</td>
                  <td class="text-center">
                    <a href="" class="btn btn-primary btn-circle mr-2 btn-sm" data-toggle="tooltip" data-placement="top" title="Edit"><i class="far fa-edit"></i></a>
                    <form class="border-0 d-inline py-2 ">
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
  </div>


@endsection