@extends('layouts.master')

@section('content')
     <!-- ======= Breadcrumbs ======= -->
     <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Inner Page</h2>
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Inner Page</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <section class="inner-page">
        <div class="container">
          <ul class="row">
              <li class="cell">
                  <div class="overlay">
                    <a href="">
                        <div class="img-wrapper">
                            <img src="{{ asset('img/13-1.jpg') }}" style="width: 100%; z-index:1;">
                        </div>
                        <h2>Fernando</h2>
                        <span>Presidente</span>
                    </a>
                </div>
              </li>
          </ul>
        </div>
      </section>
  
    </main><!-- End #main -->
@endsection