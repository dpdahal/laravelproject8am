@extends('backend.master.master')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">


            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-plus"></i> New Admin</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('backend.layouts.messages')
                                </div>
                                <div class="col-md-12">
                                    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name:
                                                        <a style="color: red;text-decoration: none;">
                                                            {{$errors->first('name')}}
                                                        </a>
                                                    </label>
                                                    <input type="text" name="name" id="name"
                                                           class="form-control"
                                                           value="{{old('name')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="username">Username:
                                                        <a style="color: red;text-decoration: none;">
                                                            {{$errors->first('username')}}
                                                        </a>
                                                    </label>
                                                    <input type="text" name="username" id="username"
                                                           class="form-control"
                                                           value="{{old('username')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">Email:
                                                        <a style="color: red;text-decoration: none;">
                                                            {{$errors->first('email')}}
                                                        </a>
                                                    </label>
                                                    <input type="text" name="email" id="email"
                                                           class="form-control"
                                                           value="{{old('email')}}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Password:
                                                        <a style="color: red;text-decoration: none;">
                                                            {{$errors->first('password')}}
                                                        </a>
                                                    </label>
                                                    <input type="password" name="password" id="password"
                                                           class="form-control"
                                                           value="{{old('password')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password_confirmation">Confirm Password:
                                                        <a style="color: red;text-decoration: none;">
                                                            {{$errors->first('password_confirmation')}}
                                                        </a>
                                                    </label>
                                                    <input type="password" name="password_confirmation"
                                                           id="password_confirmation"
                                                           class="form-control"
                                                           value="{{old('password_confirmation')}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gender">Gender:
                                                        <a style="color: red;text-decoration: none;">
                                                            {{$errors->first('gender')}}
                                                        </a>
                                                    </label>
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option value="" selected readonly>---Select Gender</option>
                                                        <option value="male" {{old('gender')=='male' ? 'selected':''}}>
                                                            Male
                                                        </option>
                                                        <option
                                                            value="female" {{old('gender')=='female' ? 'selected':''}}>
                                                            Female
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="role">Role:
                                                        <a style="color: red;text-decoration: none;">
                                                            {{$errors->first('role')}}
                                                        </a>
                                                    </label>
                                                    <select name="role" id="role" class="form-control">
                                                        <option value="" selected readonly>---Select Role</option>
                                                        <option
                                                            value="admin" {{old('role')=='admin' ? 'selected':''}}>
                                                            Admin
                                                        </option>
                                                        <option
                                                            value="superadmin" {{old('role')=='superadmin' ? 'selected':''}}>
                                                            Super Admin
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="role">Image:
                                                <a style="color: red;text-decoration: none;">
                                                    {{$errors->first('image')}}
                                                </a>
                                            </label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">
                                                <i class="fa fa-plus"></i> Add Record
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
