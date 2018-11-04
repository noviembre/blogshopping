@extends('layouts.backend')

@section('content')


    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Title & Breadcrumbs-->
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h4 class="theme-cl">Create a new product</h4>
                </div>
            </div>
            <!-- Title & Breadcrumbs-->




            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <!-- col-md-6 -->
                            <div class="col-md-6 col-sm-12">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12">
                                        <div class="card">

                                            <div class="card-body">
                                                @if($errors->count() > 0)
                                                    @foreach($errors->all() as $error)
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        {{ $error }} <a href="#" class="alert-link">
                                                        Alert</a>.
                                                </div>
                                                    @endforeach
                                                @endif

                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <br>



                                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">

                                    {{ csrf_field() }}

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><b>Product name:</b></label>
                                        <input name="name" value="{{old('name')}}" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label><b>Price</b></label>
                                                <input name="price" value="{{old('price')}}" type="text" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label><b>Image</b></label>
                                                <input name="image" type="file" class="form-control" >
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><b>Description:</b></label>
                                        <textarea name="description" id="" cols="30" rows="5" class="form-control">
                                            {{old('description')}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="text-right">
                                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                                            <button class="btn gredient-btn disabled">
                                                Guardar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </form>

                            </div>

                            <!-- col-md-6 -->
                            <div class="col-md-6 col-sm-12 padd-top-20">


                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.========= container-fluid - wrapper B ======-->

        @include('layouts.footer')
    </div>
    <!-- /. ========= content-wrapper - wrapper A ====== -->
@endsection

