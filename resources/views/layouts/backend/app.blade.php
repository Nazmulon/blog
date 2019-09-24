<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('backend/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/favicon.ico')}}">

        <!-- Title -->
    <link rel="stylesheet" href="{{asset('backend/assets\fonts\fonts\font-awesome.min.css')}}">

    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Sidemenu Css -->
    <link href="{{asset('backend/assets\plugins\fullside-menu\css\style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/assets\plugins\fullside-menu\waves.min.css')}}" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="{{asset('backend/assets\css\dashboard.css')}}" rel="stylesheet">

    <!-- Morris.js Charts Plugin -->
    <link href="{{asset('backend/assets\plugins\morris\morris.css')}}" rel="stylesheet">

    <!-- c3.js Charts Plugin -->
    <link href="{{asset('backend/assets\plugins\charts-c3\c3-chart.css')}}" rel="stylesheet">

    <!-- Custom scroll bar css-->
    <link href="{{asset('backend/assets\plugins\scroll-bar\jquery.mCustomScrollbar.css')}}" rel="stylesheet">

    <!---Font icons-->
    <link href="{{asset('backend/assets\css\icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    </head>
    <body class="">
        <div id="global-loader"></div>
        <div class="page">
            <div class="page-main">

            @include('layouts.backend.inc.topbar')

            <div class="wrapper">
            <!-- Sidebar Holder -->

            @include('layouts.backend.inc.sidebar')

                    <div class=" content-area">

                        @yield('content')

                    </div>
                </div>
            </div>

            <!--footer-->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                            Copyright © 2018 <a href="#">adminor</a>. Designed by <a href="#">Spruko</a> All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer-->
        </div>
        <!-- Back to top -->
        <a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

        <!-- Dashboard Core -->
        <script src="{{asset('backend/assets\js\vendors\jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('backend/assets\js\vendors\bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets\js\vendors\jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('backend/assets\js\vendors\selectize.min.js')}}"></script>
        <script src="{{asset('backend/assets\js\vendors\jquery.tablesorter.min.js')}}"></script>
        <script src="{{asset('backend/assets\js\vendors\circle-progress.min.js')}}"></script>
        <script src="{{asset('backend/assets\plugins\rating\jquery.rating-stars.js')}}"></script>

        <!-- Fullside-menu Js-->
        <script src="{{asset('backend/assets\plugins\fullside-menu\jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('backend/assets\plugins\fullside-menu\waves.min.js')}}"></script>

        <!-- Charts Plugin -->
        <script src="{{asset('backend/assets\plugins\chart\Chart.bundle.js')}}"></script>
        <script src="{{asset('backend/assets\plugins\chart\utils.js')}}"></script>

        <!--Morris.js Charts Plugin -->
        <script src="{{asset('backend/assets\plugins\morris\raphael-min.js')}}"></script>
        <script src="{{asset('backend/assets\plugins\morris\morris.js')}}"></script>

        <!-- Input Mask Plugin -->
        <script src="{{asset('backend/assets\plugins\input-mask\jquery.mask.min.js')}}"></script>

        <!-- Custom scroll bar Js-->
        <script src="{{asset('backend/assets\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js')}}"></script>

        <!-- Index Scripts -->
        <script src="{{asset('backend/assets\js\index4.js')}}"></script>

        <!-- Custom-->
        <script src="{{asset('backend/assets\js\custom.js')}}"></script>
        <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script>
            @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{$error}}', 'Error',{
                    closeButton:true,
                    progressBar:true,
            });
            @endforeach
            @endif
        </script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script type="text/javascript">
            function deleteTag(id) {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })
            }
        </script>
    </body>
</html>
