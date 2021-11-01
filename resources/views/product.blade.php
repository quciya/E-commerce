@extends('product-layout')
@section('content')
    	<!-- Slider Area -->
        <section class="hero-slider">
            <div class="container-fluid">
            <!-- Single Slider -->
            <div class="single-slider">
                
                <div class="row">
                    <!-- Single Banner  -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <h2>
                            {{$products->product_name}}
                        </h2> 
                        <p> 
                           {!!$products->product_desc!!}
                        </p>
                    </div>
                </div>
            </div>
            </div>
            <!--/ End Single Slider -->
        </section>



        
        <!--/ End Slider Area -->
    <a href="/">Go back to home</a>
@endsection