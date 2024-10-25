<x-adminheader />
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_settings-panel.html -->
  <div class="theme-setting-wrapper">
    <div id="settings-trigger"><i class="ti-settings"></i></div>
    <div id="theme-settings" class="settings-panel">
      <i class="settings-close ti-close"></i>
      <p class="settings-heading">SIDEBAR SKINS</p>
      <div class="sidebar-bg-options selected" id="sidebar-light-theme">
        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
      </div>
      <div class="sidebar-bg-options" id="sidebar-dark-theme">
        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
      </div>
      <p class="settings-heading mt-2">HEADER SKINS</p>
      <div class="color-tiles mx-0 px-4">
        <div class="tiles success"></div>
        <div class="tiles warning"></div>
        <div class="tiles danger"></div>
        <div class="tiles info"></div>
        <div class="tiles dark"></div>
        <div class="tiles default"></div>
      </div>
    </div>
  </div>
  <div id="right-sidebar" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
          aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
          aria-controls="chats-section">CHATS</a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
        aria-labelledby="todo-section">
        <div class="add-items d-flex px-3 mb-0">
          <form class="form w-100">
            <div class="form-group d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
              <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
            </div>
          </form>
        </div>
        <div class="list-wrapper px-3">
          <ul class="d-flex flex-column-reverse todo-list">
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox">
                  Team review meeting at 3.00 PM
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox">
                  Prepare for presentation
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
            <li>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox">
                  Resolve all the low priority tickets due today
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
            <li class="completed">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked>
                  Schedule meeting for next week
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
            <li class="completed">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked>
                  Project review
                </label>
              </div>
              <i class="remove ti-close"></i>
            </li>
          </ul>
        </div>
        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
        <div class="events pt-4 px-3">
          <div class="wrapper d-flex mb-2">
            <i class="ti-control-record text-primary mr-2"></i>
            <span>Feb 11 2018</span>
          </div>
          <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
          <p class="text-gray mb-0">The total number of sessions</p>
        </div>
        <div class="events pt-4 px-3">
          <div class="wrapper d-flex mb-2">
            <i class="ti-control-record text-primary mr-2"></i>
            <span>Feb 7 2018</span>
          </div>
          <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
          <p class="text-gray mb-0 ">Call Sarah Graves</p>
        </div>
      </div>
      <!-- To do section tab ends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
        <div class="d-flex align-items-center justify-content-between border-bottom">
          <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
          <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
            All</small>
        </div>
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">19 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
            <div class="info">
              <div class="wrapper d-flex">
                <p>Catherine</p>
              </div>
              <p>Away</p>
            </div>
            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
            <small class="text-muted my-auto">23 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Daniel Russell</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">14 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
            <div class="info">
              <p>James Richardson</p>
              <p>Away</p>
            </div>
            <small class="text-muted my-auto">2 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Madeline Kennedy</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">5 min</small>
          </li>
          <li class="list">
            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
            <div class="info">
              <p>Sarah Graves</p>
              <p>Available</p>
            </div>
            <small class="text-muted my-auto">47 min</small>
          </li>
        </ul>
      </div>
      <!-- chat tab ends -->
    </div>
  </div>
  <!-- partial -->
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('/admin')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">OUR PRODUCT</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">View All</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
          aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Our Customer</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Our Order</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html"></a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{URL::to('/Logout')}}"> Logout </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Profile </a></li>
          </ul>
        </div>
      </li>

    </ul>
  </nav>
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title mb-0">Top Products</p>



              <!-- Button to Open the Modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Addnewmodel">
                Add Product
              </button>

              <!-- The Modal -->
              <div class="modal" id="Addnewmodel">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Add new Product</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <form action="{{URL::to('AddnewProduct')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Title:</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter ">
                        <label>Description:</label>
                        <input type="text" class="form-control" name="description" placeholder="Enter ">
                        <label>Price:</label>
                        <input type="text" class="form-control" name="Price" placeholder="Enter ">
                        <label>Quantity:</label>
                        <input type="text" class="form-control" name="Quantity" placeholder="Enter ">

                        <label>Picture:</label>
                        <input type="file" class="form-control" name="Picture" placeholder="Enter ">
                        <label>Category:</label>
                        <select class="mb-2 form-control" name="Category" id="">
                          <option selected>select type</option>
                          @foreach ($product as $item)

                          <option value="{{$item->Category}}">{{$item->Category}}</option>
                          @endforeach
                        </select>
                        <label>Type:</label>

                        <select class="mb-2 form-control" name="type" id="">
                          <option selected>select type</option>
                          @foreach ($product as $item)
                          <option value="{{$item->type}}">{{$item->type}}</option>
                          @endforeach
                        </select>
                        <input type="submit" value="Save now" name="save">
                      </form>
                    </div>



                  </div>
                </div>
              </div>










              <div class="table-responsive">
                <table class="table table-striped table-borderless">
                  <thead>
                    <tr>
                      <th>title</th>
                      <th>Picture</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Category</th>
                      <th>type</th>
                      <th>Update</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i=0;
                    @endphp
                    @foreach ($product as $item)
                    @php
                    $i++;
                    @endphp
                    <tr>
                      <td>{{$item->title}}</td>
                      <td><img src="{{asset('products')}}/{{$item->Picture}}" width="200px"></td>
                      <td class="font-weight-bold">${{$item->Price}}</td>
                      <td>{{$item->Quantity}}</td>
                      <td class="font-weight-medium">
                        @if($item->Category == "Bag")
                        <div class="badge badge-info">{{$item->Category}}</div>
                        @elseif($item->Category == "Clothes")
                        <div class="badge badge-warning">{{$item->Category}}</div>

                        @else
                        <div class="badge badge-success">{{$item->Category}}</div>
                        @endif
                      </td>
                      <td class="font-weight-medium">
                        @if($item->type == "Best seller")
                        <div class="badge badge-info">{{$item->type}}</div>
                        @elseif($item->type == "sale")
                        <div class="badge badge-warning">{{$item->type}}</div>
                        @else
                        <div class="badge badge-success">{{$item->type}}</div>
                        @endif
                      </td>
                      <td class="font-weight-medium">

                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                          data-target="#Updatemodel{{$i}}">
                          Update
                        </button>

                        <!-- The Modal -->
                        <div class="modal" id="Updatemodel{{$i}}">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Update Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                                <form action="{{ URL::to('UpdateProduct') }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <label>Title:</label>
                                  <input type="text" value="{{ $item->title }}" class="form-control" name="title" placeholder="Enter ">
                                  <label>Description:</label>
                                  <input type="text" value="{{ $item->description }}" class="form-control" name="description" placeholder="Enter ">
                                  <label>Price:</label>
                                  <input type="text" value="{{ $item->Price }}" class="form-control" name="Price" placeholder="Enter ">
                                  <label>Quantity:</label>
                                  <input type="text" value="{{ $item->Quantity }}" class="form-control" name="Quantity" placeholder="Enter ">
                                  <label>Category:</label>
                                  <select class="mb-2 form-control" name="Category" id="">
                                      <option value="{{ $item->Category }}" selected> {{ $item->Category }}</option>
                                      @foreach ($product as $categoryItem)
                                          <option value="{{ $categoryItem->Category }}">{{ $categoryItem->Category }}</option>
                                      @endforeach
                                  </select>
                                  <label>Type:</label>
                                  <select class="mb-2 form-control" name="type" id="">
                                      <option selected>{{ $item->type }}</option>
                                      @foreach ($product as $typeItem)
                                          <option value="{{ $typeItem->type }}">{{ $typeItem->type }}</option>
                                      @endforeach
                                  </select>
                                  <input type="hidden" value="" name="id">
                                  <input type="submit" value="Save changes" name="update">
                              </form>
                              
                              </div>



                            </div>
                          </div>
                        </div>
                      
                      </td>
                      <td><a href="{{URL::to('deleteprodct/'.$item->id)}}">delete</a></td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>


      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <x-adminfooter />