@extends('spiderworks.miniweb.fileupload')

@section('head')

@endsection

@section('content')
    <div class="container-fluid">

        <div class="col-md-12" style="margin-bottom: 20px;" align="right">
            @if($obj->id)
                <span class="page-heading">EDIT USER</span>
            @else
                <span class="page-heading">CREATE NEW USER</span>
            @endif
            <div >
                <div class="btn-group">
                    <a href="{{route($route.'.index')}}"  class="btn btn-success"><i class="fa fa-list"></i> List
                    </a>
                    @if($obj->id)
                    <a href="{{route($route.'.create')}}" class="btn btn-success"><i class="fa fa-pencil"></i> Create new
                    </a>
                    <a href="{{route($route.'.destroy', [encrypt($obj->id)])}}" class="btn btn-success miniweb-btn-warning-popup" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." data-redirect-url="{{route($route.'.index')}}"><i class="fa fa-trash"></i> Delete</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-borderless">
                @if($obj->id)
                  @php
                    $role_array = $obj->user_roles->pluck('role_id')->toArray();
                  @endphp 
                    <form method="POST" action="{{ route($route.'.update') }}" class="p-t-15" id="UserForm">
                @else
                  @php
                    $role_array = [];
                  @endphp
                    <form method="POST" action="{{ route($route.'.store') }}" class="p-t-15" id="UserForm">
                @endif
                @csrf
                <input type="hidden" name="id" @if($obj->id) value="{{encrypt($obj->id)}}" @endif id="inputId">

                <ul class="nav nav-tabs nav-tabs-simple d-none d-md-flex d-lg-flex d-xl-flex" role="tablist" data-init-reponsive-tabs="dropdownfx">
                    <li class="nav-item">
                        <a class="active show" data-toggle="tab" role="tab"
                           data-target="#tab1Basic"
                        href="#" aria-selected="true">Basic Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="tab" role="tab"
                           data-target="#tab2Content"
                        class="" aria-selected="false">Roles</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab1Basic">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default required">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$obj->name}}" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row column-seperation padding-5">
                                    <div class="form-group form-group-default required">
                                        <label class="">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{$obj->email}}" id="slug">
                                    </div>
                                </div>
                            </div>
                            @if(!$obj->id)
                              <div class="col-md-6">
                                  <div class="row column-seperation padding-5">
                                      <div class="form-group form-group-default required">
                                          <label class="">Password</label>
                                          <input type="password" name="password" class="form-control" id="inputAccountPassword">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="row column-seperation padding-5">
                                      <div class="form-group form-group-default required">
                                          <label class="">Confirm Password</label>
                                          <input type="password" name="password_confirmation" class="form-control" id="inputAccountPasswordConfirmation">
                                      </div>
                                  </div>
                              </div>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2Content">
                        <div class="row">
                            @if(count($roles)>0)
                              @foreach($roles as $role)
                                <div class="col-md-4">
                                  <div class="row column-seperation padding-5">
                                        <div class="form-group form-group-default">
                                          <div class="checkbox check-success  ">
                                            <input type="checkbox" name="roles[]" value="{{$role->id}}" id="checkbox-agree-{{$role->id}}" {{ in_array($role->id, $role_array) ? "checked" : "" }}>
                                            <label for="checkbox-agree-{{$role->id}}">{{$role->name}}
                                            </label>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                              @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" align="right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('bottom')
    <script type="text/javascript">
        var validator = $("#UserForm").validate({
          ignore: [],
          rules: {
            name: "required",
            email: {
              required: true,
              email: true,
              remote: {
                  url: "{{route('validate.unique_user')}}",
                  data: {
                    id: function() {
                      return $( "#inputId" ).val();
                  }
                }
              }
            },
            password: {
              required: function(element){
                  return $("#inputId").val() =="";
              },
            },
            password_confirmation: {
              equalTo: '#inputAccountPassword',
            }
          },
          messages: {
            name: "Name cannot be blank",
            email: {
              required: "Email address cannot be blank",
              remote: "Email {0} is already in use",
            },
            password: "Password cannot be blank",
          },
        });
    </script>
@parent
@endsection