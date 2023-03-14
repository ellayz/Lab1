@extends('templates.default')

@section('body')
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                @foreach ($data2 as $name)
                    <!-- Featured Project Row-->
                    <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                        <div class="col-xl-8 col-lg-7">
                        <img class="img-fluid mb-3 mb-lg-0" src="{{$name['Directory']}}" alt="..." style="float:left;width:500px;height:350px;" /></div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="featured-text text-center text-lg-left">
                                <p class="text-black-50 mb-0">{{$name['Modelname']}}</p>
                            </div>
                            {{$name['Description']}}
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </section>   
@endsection
     