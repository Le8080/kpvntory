@extends('layouts/header_menu')
@section('content')
<article class="content items-list-page">
                    <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Company</h3>
                                </div>
                            </div>
                        </div>
                        <div class="items-search">
                            <form class="form-inline">
                                <div class="input-group">
                                    <input type="text" class="form-control boxed rounded-s" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary rounded-s" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-6">
                                <div class="card sameheight-item">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">List of Company
                                            <a href="/companies/0/false" class="btn btn-primary btn-sm rounded-s"> 
                                            <li class="fa fa-plus-circle"></li> Create New </a></h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped  table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th >#</th>
                                                            <th>Name</th>
                                                            <th>Location</th>
                                                            <th>Contact No</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>ABC</td>
                                                            <td>Pampanga</td>
                                                            <td>12133</td>
                                                            <td><center><i class="fa fa-cog"></i> | <i class="fa fa-trash-o"></i></center></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card sameheight-item">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title">Branch 
                                            <a href="/companies/0/true" class="btn btn-primary btn-sm rounded-s"> 
                                            <li class="fa fa-plus-circle"></li> Create New </a></h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped  table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th >#</th>
                                                            <th>Name</th>
                                                            <th>Location</th>
                                                            <th>Contact No</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>ABC</td>
                                                            <td>Pampanga</td>
                                                            <td>12133</td>
                                                            <td><center><i class="fa fa-cog"></i> | <i class="fa fa-trash-o"></i></center></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <nav class="text-right">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href=""> Prev </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href=""> 1 </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href=""> 2 </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href=""> 3 </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href=""> 4 </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href=""> 5 </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href=""> Next </a>
                            </li>
                        </ul>
                    </nav>
</article>
@endsection