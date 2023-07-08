@extends('master.tampilan')
@section('title','Dashboard')
@section('page','Halaman Dashboard')
@section('content')

<div class="container-fluid">
	<div class="card" style="padding:22px">
	 @if(Auth::user()->role=='admin')
	   <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$t_p}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Pegawai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$a_p}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Admin</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$t_a}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                     
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Staff</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$t_s}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                   
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
        @endif

        @if(Auth::user()->role=='staff')
	   <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Pengajuan Cuti</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$s_c}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                      
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Cuti Ditolak</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$c_tolak}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times-circle fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
           
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Cuti DiTerima</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$c_terima}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
        @endif


        @if(Auth::user()->role=='pegawai')
	   <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">(Total Pengajuan Cuti)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pan_u}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Cuti Ditolak</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$not_u}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
 
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-window-close fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Cuti DiTerima</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$t_u}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
          
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
           
        </div>

      </div>
        @endif


	</div>
</div>
</div>

@endsection