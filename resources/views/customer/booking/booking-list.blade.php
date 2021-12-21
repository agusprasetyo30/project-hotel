@extends('layouts.app')

@section('title', 'Status Pemesanan')

@section('sub-title', 'status pemesanan')

{{-- Menambahkan tampilan breadcrumb --}}
@include('layouts.breadcrumb')

@section('content')
   <section class="accomodation_area section_gap">
      <div class="container">
         {{-- <div class="row"> --}}
            
         {{-- </div> --}}
         <table class="table table-hover text-dark">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Kamar</th>
                  <th scope="col">Jumlah Booking</th>
                  <th scope="col">Total</th>
                  <th scope="col">Check In</th>
                  <th scope="col">Check Out</th>
                  <th scope="col">Status/Note</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($transactions as $transaction)
                  <tr>
                     <th scope="row">{{ $number++ }}. </th>
                     <td>{{ $transaction->rooms->name }}</td>
                     <td>{{ $transaction->total_room }}</td>
                     <td>{{ convertRupiah($transaction->total_price) }}</td>
                     <td>{{ $transaction->check_in }}</td>
                     <td>{{ $transaction->check_out }}</td>
                     <td>
                        @if ($transaction->status == 1)
                           <span class="badge badge-success">Booking Berhasil!</span>
                        @elseif($transaction->status == 2)
                           <span class="badge badge-danger">Booking Gagal!</span>
                        @else
                           <span class="badge badge-info">Proses Verifikasi</span>
                        @endif
                     </td>
                     <td>
                        <a href="#"><span class="fa fa-print"></span></a>
                     </td>
                  </tr>
               @endforeach
               {{-- @foreach ($users as $user)
                  <tr>
                     <th scope="row">{{ $number++ }}. </th>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     <td>{{ $user->phone }}</td>
                     <td>
                        @foreach ($user->getRoleNames() as $role)
                           <span class="badge {{ $role == 'ADMIN' ? 'badge-primary' : 'badge-dark' }}">{{ $role }}</span>
                        @endforeach
                     </td>
                     <td>
                        <a href="{{ route('admin.pengguna.edit', ['id' => $user->id]) }}" class="genric-btn primary radius medium">Edit</a>
                     </td>
                  </tr>
               @endforeach --}}
            </tbody>
            <tfoot>
               <tr>
                  <td colspan="6" align="center">
                     {{-- {{ $users->appends(Request::all())->links()}} --}}
                  </td>
               </tr>
            </tfoot>
         </table>
      </div>
   </section>
@endsection