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
                 <form role="form" action="">
                    <div class="form-group row ">
                        <div class="col-md-6">
                            <label class="form-control-label">Name</label><input type="text" name="name" class="form-control underlined" id="name" placeholder="Name"> 
                        </div>
                        <div class="col-md-6"><label for="password">Location</label><input type="text" name="location" placeholder="Location" class="form-control underlined"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6"
                            <label class="form-control-label">Contact Person</label><input type="text" name="contact_person" class="form-control underlined" id="C" placeholder="Firstname">
                        </div>
                        <div class="col-md-6">
                            <label class="form-control-label">Contact No</label><input type="text" name="contact_no" class="form-control underlined" id="lastname" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="form-control-label">Email</label><input type="email" name="contact_email" class="form-control underlined" id="email" placeholder="Email">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--summary data-->

    </div>
</section>

</article>
@endsection