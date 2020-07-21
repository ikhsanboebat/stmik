@extends('layouts.dashboard')

@section('content')
<!-- Start right Content here -->


<!-- Start content -->
<div class="content">

    <div class="">
        <div class="page-header-title">
            <h4 class="page-title"><a class="text-danger" href="{{ URL::previous() }}"><i class="fas fa-arrow-circle-left"></i></a>&ensp; Pemesanan</h4>

        </div>
    </div>

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <hr>
            {{-- <div class="row container"> --}}
            {{-- <button class="btn btn-sm btn-danger"><i class="fas fa-home"></i></button> --}}
            <label class="h5 ml-2 mt-2"><i class="{{ $icon }}"></i> {{ ucwords($desc) }} | <span
                    class="btn badge badge-warning"> <i class="fas fa-info-circle"></i> Check Harga {{ $desc }}</span></label>
            {{-- </div> --}}
            <br>
            <div class="alert alert-light font-weight-bold" role="alert">
                <span class="text-warning"><i class="fas fa-coins"></i></span> Saldo Anda : Rp.{{ $saldo_user }},- <span
                    class="btn badge bg-dark text-white ml-2"><i class="mdi mdi-plus text-warning"></i> TOP UP</span>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card bg-white pl-5 pr-5 pt-4 pb-4">
                        <div class="alert alert-primary" role="alert">
                            <span class="font-weight-bold">Notice</span><br>
                            -No Handphone <span class="font-weight-bold">diawali oleh angka 0</span>, cth => 0857123123xx <br>
                            -<span class="font-weight-bold">Check No.Handphone</span> sebelum submit ke sistem
                          </div>
                        <label class="text-dark font-weight-bold" for="">No Handphone</label>
                        <input class="form-control-white bg-white text-dark" style="color:#000" type="text" placeholder="Ketikan No.Handphone anda disini">
                        <form role="form" action="" method="post" autocomplete="off">
                            <div class="box-body">
          
                              
                              
                                <div class="form-group">
                                  <input oninput="ajaxProduct(this.value)" type="text" class="form-control ui-autocomplete-input" id="autophone" name="phone" placeholder="Masukkan Nomor HP Tujuan" maxlength="50" autocomplete="off">
                                </div>
          
          
                              <div id="code">                       
                                  
                              </div>
          
          
                            </div><!-- /.box-body -->
          
                          </form>
                        <script type="text/javascript">
                            function ajaxProduct(id) {  
                                var jenis = "";
                                if(id.substr(0, 3)=='+62') {id = "0" + id.substr(3, id.length);}
                                if(id.substr(0, 2)=='62') {id = "0" + id.substr(2, id.length);}
                                
                                if( (id.length>=6 && id.charAt(0)=='0') || (id.length>=3 && id.charAt(0)=='9')){    
                            
                                 //$('#loading').show();
                                if(id.substr(0,4)=='0857' || id.substr(0,4)=='0858'){jenis = "Indosat";}
                                if(id.substr(0,5)=='08515'){jenis = "Byu";}
                                
                                $('#code').value(jenis);

                                 {{--  $.ajax({
                                      type : 'GET',
                                      url : 'https://portalpulsa.com/member/process/findprovider/reguler/'+id,  
                                      success : function(data){
                                      $('#code').html('<h1>'+data+'</h1>');
                                      },
                                      error:function(){ 
                                        $('#code').html("<center>Tidak dapat memuat produk</center>");
                                      }
                                  });  --}}
                                }    
                            };
                            </script>
                            <script type="text/javascript">
                                $(function() {
                                    
                                    $("#autophone").autocomplete({
                                        source: "https://portalpulsa.com/member/process/findphone/",        
                                        select: function (event, ui) {
                                              ajaxProduct(ui.item.label);
                                            },
                                
                                        minLength: 1
                                    });  
                                
                                    $("#autophoneid").autocomplete({
                                        source: "https://portalpulsa.com/member/process/findphone/",
                                        minLength: 1
                                    });    
                                
                                    $("#autocust").autocomplete({
                                        source: "https://portalpulsa.com/member/process/findcust/",
                                        select: function (event, ui) {
                                              ajaxProduct(ui.item.label);
                                            },
                                
                                        minLength: 1
                                    });            
                                
                                });
                                
                                function showName(){
                                    var save = document.getElementById("save");
                                    var name = document.getElementById("name");
                                    if (save.checked == 1){
                                      name.style.display = "inline";
                                    }
                                    else{
                                      name.style.display = "none";
                                    }
                                }
                                showName();
                                </script>
                    </div>
                </div>
            </div>
        </div><!-- container-fluid -->
    </div> <!-- Page content Wrapper -->

</div> <!-- content -->
@endsection