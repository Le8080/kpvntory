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
    
    <!--section Form-->
<section class="section">
    <div class="row sameheight-container">
        <div class="col-md-8">
            <div class="card card-block sameheight-item">

                <form role="form" >
                    <div class="form-group">
                        <label class="form-control-label">Product Name</label>
                        <input type="text" class="form-control underlined" id="name" placeholder="Product Name"> 
                    </div>
                    <div class="form-group">
                    <div>
                        <label>
                        <input class="checkbox" type="checkbox" checked="checked">
                                <span>Can be sold?</span>
                         </label>
                         <label>
                        <input class="checkbox" type="checkbox" checked="checked">
                                <span>Can be purchased</span>
                         </label>
                        </div>
                     </div>


                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                           <a href="#general-info" class="nav-link active" data-target="#general-info" data-toggle="tab" aria-controls="general-info" role="tab">General Info</a>
                        </li>
                        <li class="nav-item">
                           <a href="#purchases" class="nav-link" data-target="#purchases" data-toggle="tab" aria-controls="general-info" role="tab">Purchases</a>
                        </li>
                    </ul>           
                                        <!-- Tab panes -->
                    <div class="tab-content tabs-bordered">
                        <!-- tab 1 General Info -->
                        <div class="tab-pane fade show active" id="general-info">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="type" class="form-control-label">Type</label>
                                    <select class="form-control underlined">
                                                    <option>Consumable</option>
                                                    <option>Stockable</option>
                                                    <option>Service</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="category" class="form-control-label">Category</label>
                                    <select class="form-control underlined">
                                                    <option>All</option>
                                                    <option>Sales</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="internalref" class="form-control-label">Internal Reference</label>
                                    <input type="text" class="form-control underlined" id="internalref" placeholder="Internal Reference"> 
                                </div>
                                <div class="form-group row">
                                    <label for="barcode" class="form-control-label">Barcode</label>
                                    <input type="text" class="form-control underlined" id="internalref" placeholder="Barcode"> 
                                </div>
                            </div>
                        </div>
                        <!-- tab 2 Purchases -->
                        <div class="tab-pane fade" id="purchases">
                        <div class="title-block">
                            <h3 class="title"> Add Purchase history</h3>
                        </div>
                        <div class="form-group row">
                            <label for="internalref" class="form-control-label">Puchase Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control underlined" placeholder="Some text here">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--summary data-->
        <div class="col-xl-4">
            <div class="card card-info sameheight-item">
                <div class="card-header">
                    <div class="header-block">
                        <p class="title">
                            Product Summary Guide
                        </p>
                    </div>
                </div>
                <div class="card-block">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt
                        est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et,
                        fringilla augue.</p>
                </div>
            </div>
        </div>
    </div>
</section>

</article>
@endsection