@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Title & Breadcrumbs-->

            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="theme-cl">
                        Lista de todos los tours
                    </h4>
                </div>
                <div class="col-md-7 text-center">



                    <div class="btn-group">
                        <a href="{{ route('products.create') }}" class="btn gredient-btn">Crear</a>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-12 col-sm-12 mb-4">

                    <div class="card">

                        <div class="card-body">
                            @if(Session::has('success'))

                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ Session::get('success') }}
                                    <a href="#" class="alert-link">
                                        Great</a>.
                                </div>

                            @endif

                        </div>
                    </div>
                </div>

            </div>


            <!-- Row -->
            <div class="row">

                <!-- ============     Project List starts     ============ -->
                <div class="col-md-12 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered table-hover" style="width:100%">
                                <thead>
                                <tr class="alert alert-primary">
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Actualizado</th>
                                    <th>Imagen</th>
                                    <th>Editar</th>
                                    <th>Delete</th>


                                </tr>
                                </thead>
                                <tbody>
                                @if($products->count()> 0)

                                    @foreach($products as $product)
                                        <tr>

                                            <td><b>{{$product->name}}</b></td>
                                            <td>{{$product->price}}</td>

                                            <td>
                                                {{ \Carbon\Carbon::parse($product->updated_at)->toFormattedDateString() }}
                                            </td>


                                            <td>
                                                {{--<img src="" alt="" width="100">--}}
                                                image
                                            </td>
                                            <td> <a href="{{route('products.edit', ['id' => $product->id ])}}" class="btn btn-info">
                                                    Editar
                                                </a>
                                            </td>

                                            <td>
                                                <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach

                                @else

                                    <tr >
                                        <th colspan="6" class="text-center text-danger">
                                            you dont have any product
                                        </th>
                                    </tr>


                                @endif



                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <!-- ============     Project List ends     ============ -->

            </div>

        </div>

        @include('layouts.footer')

    </div>



@endsection

@section('styles')
    <!-- Datatable plugin CSS -->
    <link href="{{ asset('assets/glo/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop

@section('scripts')
    <!-- Datatable plugin JS -->
    <script type="text/javascript" src="{{ asset('assets/glo/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/glo/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                "language": {
                    "url": " {{asset('assets/glo/plugins/datatables/js/Spanish.json')}}"
                }
            });
        } );
    </script>
@stop