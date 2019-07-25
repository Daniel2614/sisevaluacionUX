    <html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Default')| Planeación</title>
        <link rel="icon" href="{{ asset('img/iconofge.jpg') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
         <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.css') }}">
        <link href="{{ asset('plugins/Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset ('css/sweetalert.css')}}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset ('css/font-neosans.css')}}">
        <link href="{{ asset('plugins/Toastr/css/toastr.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/Select2/css/Edit/select2.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('plugins/jquery-validator/css/theme-jquery-validation.min.css') }}">
        

        @yield('css')
    </head>

    <body class="hold-transition sidebar-collapse sidebar-mini @if(Session::get('bar') == 0)sidebar-collapse @endif" id="bodySidebar">
        <!--<div class="loader"></div>-->
        <div class="wrapper">
            <!-- Navbar -->
            @include('template.menus.navbar')
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            @include('template.menus.sidebar')
            <div class="content-wrapper" style="background-color: #E1E2E1">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">@yield('title')</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#" style="color: black"><i class=" nav-icon fa fa-home"></i> Inicio</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        @yield('title')
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- Main content -->
                        <section class="content">
                            <div class="container-fluid">
                              @if(session('primer_mensaje'))
                              <script type="text/javascript">
                                $(document).ready(function() {
                                swal({
                                  title: "{{session('primer_mensaje')}}",
                                  text: "@if(session('segundo_mensaje')){{session('segundo_mensaje')}} @endif",
                                  type: "success",
                                  confirmButtonText: "Aceptar",
                                  confirmButtonColor: "#424242",
                                  closeOnConfirm: true
                                  });
                                });
                              </script>
                              {{Session::forget('primer_mensaje')}}
                              {{Session::forget('segundo_mensaje')}}
                            @endif
                            
                     @yield('content')
                                {{-- @include('layouts.modal_gral') --}}
            <div class="modal fade " id="logoutmodal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
                <div class="modal-content rounded col-md-12 px-0">
                  <div class="modal-header justify-content-center text-white" style="background-color: #4FA8BC"><h4> <i class="fa fa-power-off"></i><strong > Salir</strong></h4></div>
                  <div class="modal-body text-center" style="background-color:#e1e2e1">
                    <h5><i class="fas fa-sign-out-alt"></i> ¿Está seguro que desea cerrar sesión?</h5>
                  </div>
                  <div class="modal-footer" style="background-color: #e1e2e1">
                    <button class="btn btn-outline-secondary col " data-dismiss="modal" >Cancelar</button>
                    <button  onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-primary col">Salir</button>
                  </div>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </div>
            </div>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- @include('admin.modals.foto-perfil') --}}
            </div>
        </div>
        <!-- SCRIPTS -->
        <script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>
        <script src="{{asset ('js/sweetalert.min.js')}}"></script>
        <script src="{{ asset('plugins/Bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('plugins/Bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/Font_awesome/js/all.js') }}"></script>

        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('plugins/Toastr/js/toastr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/jquery-validator/js/jquery.form-validator.js') }}"></script>
        <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>
        <script src="{{ asset('plugins/Select2/js/select2.min.js') }}"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2();
             $('#bodySidebar').removeClass('sidebar-collapse');
             $('#bodySidebar').addClass('sidebar-open');
        });
       //funcion para recibir solo numeros
        function numeros(evt) {
          var theEvent = evt || window.event;

          // Handle paste
          if (theEvent.type === 'paste') {
              key = event.clipboardData.getData('text/plain');
          } else {
          // Handle key press
              var key = theEvent.keyCode || theEvent.which;
              key = String.fromCharCode(key);
          }
          var regex = /[0-9]|\./;
          if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
          }
        }

        //borrar cache en los inputs
        var allInputs = $( ":input" );
        allInputs.attr('autocomplete', 'off');

             $(".decimales").on({
            "focus": function(event) {
                $(event.target).select();
            },
            "keyup": function(event) {
                $(event.target).val(function(index, value) {
                return value.replace(/\D/g, "")
                    .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                    .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
                });
            }
        });
            function sidebar(){
                $('#bodySidebar').removeClass('sidebar-collapse');
                $('#bodySidebar').addClass('sidebar-open');
            }
            function sidebarOut(){
                $('#bodySidebar').removeClass('sidebar-open');
                $('#bodySidebar').addClass('sidebar-collapse');
            }

            $(function (){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });

            $("body").on('keyup', '.mayuscula', function(field){
                $(this).val($(this).val().toUpperCase());
            });
           

            $("body").on('keypress', '.soloNumeros', function(event){
                var key = window.event.keyCode;
                if (key < 48 || key > 57) {
                    toastr.remove()
                    toastr.error('Debes ingresar solo números', '¡ERROR!')
                    return false;
                }
            });

            /*(function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('form-control');
                    
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('focusout', function(event) {
                            //console.log( $(form).attr("name") );
                            if( $(form).val() == '' ){
                                $( '#'+$(form).attr("id") ).removeClass('is-valid');
                                $( '#'+$(form).attr("id") ).addClass('is-invalid');
                                $( '#error_'+$(form).attr("id") ).show();
                            }else{
                                $( '#'+$(form).attr("id") ).removeClass('is-invalid');
                                $( '#'+$(form).attr("id") ).addClass('is-valid');
                                $( '#error_'+$(form).attr("id") ).hide();
                            }
                        }, false);
                    });
                }, false);
            })();*/
        </script>
        
        <script type="text/javascript">
          function validateCode(){
              var TCode = document.getElementById('TCode').value;
              for(var i=0; i<TCode.length; i++)
              {
                var char1 = TCode.charAt(i);
                var cc = char1.charCodeAt(0);

                if((cc>47 && cc<58) || (cc>64 && cc<91) || (cc>96 && cc<123))
                {

                }
                 else {
                 alert('Input is not alphanumeric');
                 return false;
                 }
              }
             return true;     
           }
       </script>
        @yield('scripts')
        @include('template.menus.footer')

        @stack('scripts')
        <script type="text/javascript">
            // $(document).ready(function() {
            //     @stack('docready-js')
            // });
        </script> <!-- loader -->
    </body>
</html>
