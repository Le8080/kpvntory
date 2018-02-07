@extends('layouts/header_menu')
@section('content')

<article class="content error-404-page">
    <section class="section">
        <div class="error-card">
            <div class="error-title-block">
                <h1 class="error-title">404</h1>
                <h2 class="error-sub-title">
                    Sorry, page not found
                </h2>
            </div>
            <div class="error-container">
                <p>Try our awesome search:</p>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="text" class="form-control">
                                <span class="input-group-btn"> <button class="btn btn-primary" type="button">Search</button></span>
                        </div>
                    </div>
                </div>
                    <br>
            </div>
        </div>
    </section>
</article>
@endsection