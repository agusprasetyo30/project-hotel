@extends('layouts.app')

@section('title', "Pengguna")

@section('content')
   {{-- <h1 class="section_gap">acca</h1> --}}
   <div class="container section_gap">
      <div class="mb-5 text-center">
         <h2 class="title_color">Pengguna</h2>
      </div>

      <div class="row">
         <div class="col md-3">
            <a href="{{ route('admin.pengguna.create') }}" class="genric-btn btn-primary radius">Tambah Pengguna</a>
         </div>
         <div class="col-md-3">
            <div class="input-group-icon">
               <div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
               <input type="search" name="search" placeholder="Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search'" required="" class="single-input border">
            </div>
         </div>
      </div>
      <table class="table table-hover text-dark mt-3">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Phone</th>
               <th scope="col">Role</th>
               <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($users as $i => $user)
               <tr>
                  <th scope="row">{{ ++$i }}. </th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>
                     <span class="badge badge-primary">ADMIN</span>
                     <span class="badge badge-dark">CUSTOMER</span>
                  </td>
                  <td>
                     <a href="{{ route('admin.pengguna.edit', ['id' => $user->id]) }}" class="genric-btn primary radius medium">Edit</a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>

   
@endsection

{{-- 
   <div class="progress-table-wrap">
         <div class="progress-table">
            <div class="table-head">
               <div class="serial">#</div>
               <div class="country">Countries</div>
               <div class="visit">Visits</div>
               <div class="percentage">Percentages</div>
            </div>
            <div class="table-row">
               <div class="serial">01</div>
               <div class="country"> <img src="image/elements/f1.jpg" alt="flag">Canada</div>
               <div class="visit">645032</div>
               <div class="percentage">
                  <div class="progress">
                     <div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
            <div class="table-row">
               <div class="serial">02</div>
               <div class="country"> <img src="image/elements/f2.jpg" alt="flag">Canada</div>
               <div class="visit">645032</div>
               <div class="percentage">
                  <div class="progress">
                     <div class="progress-bar color-2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
            <div class="table-row">
               <div class="serial">03</div>
               <div class="country"> <img src="image/elements/f3.jpg" alt="flag">Canada</div>
               <div class="visit">645032</div>
               <div class="percentage">
                  <div class="progress">
                     <div class="progress-bar color-3" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
            <div class="table-row">
               <div class="serial">04</div>
               <div class="country"> <img src="image/elements/f4.jpg" alt="flag">Canada</div>
               <div class="visit">645032</div>
               <div class="percentage">
                  <div class="progress">
                     <div class="progress-bar color-4" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
            <div class="table-row">
               <div class="serial">05</div>
               <div class="country"> <img src="image/elements/f5.jpg" alt="flag">Canada</div>
               <div class="visit">645032</div>
               <div class="percentage">
                  <div class="progress">
                     <div class="progress-bar color-5" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
            <div class="table-row">
               <div class="serial">06</div>
               <div class="country"> <img src="image/elements/f6.jpg" alt="flag">Canada</div>
               <div class="visit">645032</div>
               <div class="percentage">
                  <div class="progress">
                     <div class="progress-bar color-6" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
            <div class="table-row">
               <div class="serial">07</div>
               <div class="country"> <img src="image/elements/f7.jpg" alt="flag">Canada</div>
               <div class="visit">645032</div>
               <div class="percentage">
                  <div class="progress">
                     <div class="progress-bar color-7" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
            <div class="table-row">
               <div class="serial">08</div>
               <div class="country"> <img src="image/elements/f8.jpg" alt="flag">Canada</div>
               <div class="visit">645032</div>
               <div class="percentage">
                  <div class="progress">
                     <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   
   --}}