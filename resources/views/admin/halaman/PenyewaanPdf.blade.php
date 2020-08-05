<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
						<th>
                          No
                        </th>
                        <th>
                            Id Penyewaan
                        </th>
                        <th>
                            Nama Gedung
                        </th>
                        <th>
                            Tanggal Sewa
                        </th>
                        <th>
                            Nama Acara
                        </th>
                        <th>
                            Nama Penyewa
                        </th>
                        <th>
                            Email Penyewa
                        </th>
                        <th>
                            Harga
                        </th>
			</tr>
		</thead>
		<tbody>
					  @php
                        $no=1;
                      @endphp
                      @foreach($laporan as $tampil)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$tampil->id_penyewaan}}</td>
                        <td>{{$tampil->Gedung->nama_gedung}}</td>
                        <td>{{$tampil->tanggal_sewa}}</td>
                        <td>{{$tampil->nama_acara}}</td>
                        <td>{{$tampil->nama_penyewa}}</td>
                        <td>{{$tampil->email_penyewa}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>