@extends('user.layout.TampilanUser')
@section('content')
		<br>
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                                <div class="col-md-6">
                                    <h1>Rincian Penyewaan</h1>                               
                                </div>
                                <div class="col-md-6">
                                    <form action="{{url('CariHalamanKonfirmasiBayar')}}" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="q" class="form-control" placeholder="Kode Penyewaan">
                                            <span class="input-group-btn">
                                                <button class="btn btn-warning" type="submit"><i class="lnr lnr-magnifier"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </article>

                            @if(\Session::has('alert-success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{Session::get('alert-success')}}
                                </div>
                             @endif
                            <hr>
                
                            <article class="row blog_item">
                
                                <div class="col-md-6">
                                    <div class="blog_post">
                                        <div class="blog_details">
                                            
                                            <table>
                                                <tr>
                                                    <td>Kode Penyewaan</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="id_penyewaan" class="single-input" 
                                                        @if(isset($datas))
                                                            value="{{$datas->id_penyewaan}}"
                                                        @endif

                                                        disabled></td>

                                                </tr>
                                                <tr>
                                                    <td>Nama Gedung</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="id_gedung" class="single-input" 

                                                    @if(isset($datas))
                                                        value="{{$datas->Gedung->nama_gedung}}" 
                                                    @endif
                                                        disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Sewa</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="tanggal_sewa" class="single-input" 

                                                    @if(isset($datas))
                                                        value="{{$datas->tanggal_sewa}}"
                                                    @endif
                                                         disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Acara</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="nama_acara" class="single-input" 

                                                    @if(isset($datas))
                                                        value="{{$datas->nama_acara}}"
                                                    @endif
                                                        disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Penyewa</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="nama_penyewa" class="single-input" 

                                                    @if(isset($datas))
                                                        value="{{$datas->nama_penyewa}}" 
                                                    @endif
                                                        disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Email Penyewa</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="email_penyewa" class="single-input"

                                                    @if(isset($datas))
                                                        value="{{$datas->email_penyewa}}" 
                                                    @endif
                                                        disabled></td>
                                                </tr>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="blog_post">
                                        <div class="blog_details">
                                            <table>
                                                    <tr>
                                                        <td>Harga</td>
                                                        <td> : </td>
                                                        <td>
                                                            <input type="text" name="harga" class="single-input"

                                                            @if(isset($datas))
                                                                value="@currency($datas->Gedung->harga)"
                                                            @endif
                                                                 disabled>
                                                        </td>
                                                    </tr>                                              
                                            </table>
                                            <hr>
                                            <table>
                                                <tr>
                                                        <td><strong>Status Penyewaan</strong></td>
                                                        <td> : </td>
                                                        <td>
                                                            <input type="text" name="status_sewa" class="single-input"

                                                        @if(isset($datas))
                                                            value="{{$datas->status_sewa}}" 
                                                        @endif
                                                            disabled>
                                                        </td>
                                                    </tr>
                                            </table>
                                            <hr>

                                        @if(isset($datas))

                                            @if(isset($datas->Pembayaran))
                                                <p><strong>Status Bayar : </Strong><b>{{$datas->Pembayaran->status_bayar}}</b></p>                                                
                                            @endif

                                            @if($datas->status_sewa == 'Menunggu Pembayaran')
                                                <strong>Silahkan Melakukan Pembayaran</Strong>
                                                <b><p>@currency($datas->Gedung->harga)</p></b>
                                                <strong>Sebelum :</strong>
                                                <label><b><u>{{$besok}} WIB</u></b></label>
                                            @endif
                                            
                                        @else

                            @if(\Session::has('alert-danger'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{Session::get('alert-danger')}}
                                </div>
                             @endif        

                                        @endif                                   
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

					<div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Transfer Bank</h3>
                               
                                <div class="media post_item">                                  
										<div class="info_item">
											<table>
                                                <tr>
                                                    <td>
                                                        <strong>Rekening BRI</strong>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        1234567890
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>A / N</strong>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        Gedung Serbaguna
                                                    </td>
                                                </tr>                                 
                                            </table>
			                        </div>
			                    </div>  
                                <hr>                        
            <form action="AksiKonfirmasiBayar" method="post" enctype="multipart/form-data">

            {{csrf_field()}}    
            <input type="hidden" name="id_penyewaan" class="form-control"
            @if(isset($datas))
                value="{{$datas->id_penyewaan}}" 
            @endif
                >

                                <h3 class="widget_title">Bukti Pembayaran</h3>
                                <div class="text-center">
                                    <table>
                                        <tr>
                                            <td><input type="file" name="bukti_pembayaran" class="form-control" 

                                            @if(isset($datas))
                                                {{ ($datas->status_sewa == 'Menunggu Pembayaran') ? '' : 'disabled'}} 
                                            @else
                                                disabled
                                            @endif
                                            >
                                            @if ($errors->has('bukti_pembayaran'))
                                                <span class="text-danger"><p class="text-right">* {{ $errors->first('bukti_pembayaran') }}</p></span>
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" name="jumlah_bayar" placeholder="Masukkan Jumlah Transfer"

                                            @if(isset($datas))
                                                {{ ($datas->status_sewa == 'Menunggu Pembayaran') ? '' : 'disabled'}} 
                                            @else
                                                disabled
                                            @endif
                                            >
                                            @if ($errors->has('jumlah_bayar'))
                                                <span class="text-danger"><p class="text-right">* {{ $errors->first('jumlah_bayar') }}</p></span>
                                            @endif
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <button type="Submit" class="genric-btn danger-border circle arrow text-uppercase" 

                                @if(isset($datas))
                                    {{ ($datas->status_sewa == 'Menunggu Pembayaran') ? '' : 'disabled'}}
                                @else
                                    disabled
                                @endif
                                    >Konfirmasi Pembayaran<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </aside>
                </form>        
                         </div>
                      </div>
				</section>
@endsection


