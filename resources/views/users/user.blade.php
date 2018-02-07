@extends('layouts/header_menu')
@section('content')
<article class="content forms-page">

    <div class="title-block">
        <h3 class="title">
         {{$title}}
        </h3>
        <p class="title-description">
            {{$titledescription}}
        </p>
    </div>
    <span class="input-group-btn">
        <button class="btn btn-primary btn-lg btn-block"> 
        <li class="fa fa-save"></li> Save </button>
        </button>
   </span>
    <!--section Form-->
<section class="section">
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                 <form role="form" >
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="type" class="form-control-label">Company</label>
                                <select class="form-control underlined">
                                        <option>Select Company</option>
                                        <option>COmpay abv</option>
                                        <option>COmpay dvc</option>
                                </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="category" class="form-control-label">Branch</label>
                                <select class="form-control underlined">
                                    <option>Select Branch Company</option> 
                                    <option>Branch1</option> 
                                    <option>Branch2</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-md-6">
                            <label class="form-control-label">Username</label><input type="text" name="username" class="form-control underlined" id="name" placeholder="Username"> 
                        </div>
                        <div class="col-md-6"><label for="password">Password</label><input type="password" name="password" placeholder="Password" class="form-control underlined"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="form-control-label">First Name</label><input type="text" name="firsname" class="form-control underlined" id="firstname" placeholder="Firstname">
                        </div>
                        <div class="col-md-6">
                            <label class="form-control-label">Last Name</label><input type="text" name="lastname" class="form-control underlined" id="lastname" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="form-control-label">Email</label><input type="email" name="email" class="form-control underlined" id="email" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <label class="form-control-label">Gender</label>
                            <div><input class="radio" type="radio" name="gender"> <span>Male</span>
                            <input class="radio" type="radio" name="gender" ><span>Female</span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Contact Number</label><input type="text" name="contactno" class="form-control underlined" id="contactno" placeholder="Contact Number">
                    </div>
                </form>
            </div>
        </div>
        <!--summary data-->

    </div>
</section>

</article>
@endsection