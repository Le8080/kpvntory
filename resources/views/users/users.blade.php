@extends('layouts/header_menu')
@section('content')
<article class="content items-list-page">
                    <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Users
                                        <a href="/users/0/true" class="btn btn-primary btn-sm rounded-s"> 
                                        <li class="fa fa-plus-circle"></li> Create New </a>
                                    </h3>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Responsive simple </h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped  table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th >#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Company</th>
                                                            <th>Branch</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>John Doe</td>
                                                            <td>johndoe@kapemug.com</td>
                                                            <td>Company ABV</td>
                                                            <td>Tower B</td>
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