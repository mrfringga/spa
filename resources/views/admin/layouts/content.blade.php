<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            Users
                            <p><i class="bi bi-people-fill" style="font-size:100px;"></i></p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#" style="font-size: 18px">{{App\User::all()->count()}}</a>
                            <div class="small text-white">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            Department
                            <p><i class="bi bi-building" style="font-size: 100px"></i></p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#" style="font-size: 18px">{{App\Department::all()->count()}}</a>
                            <div class="small text-white">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            Notice
                            <p><i class="bi bi-info-square" style="font-size: 100px"></i></p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#" style="font-size: 19px">{{App\Notice::all()->count()}}</a>
                            <div class="small text-white">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            Leave
                            <p><i class="bi bi-box-arrow-right" style="font-size: 100px"></i></p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#" style="font-size: 18px">{{App\Leave::all()->count()}}</a>
                            <div class="small text-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end CARD --}}
            <div class="row">
                <div class="col-xl-12">
                    <div class="card mb-4">
                        <div class="card-header">Your Details</div>
                         <div class="card-header" style="background-color: orange">Email:{{Auth::user()->email}}</div>
                         <div class="card-header" style="background-color: orange">Address:{{Auth::user()->address}}</div>
                         <div class="card-header" style="background-color: orange">Mobile number:{{Auth::user()->mobile_number}}</div>
                         <div class="card-header" style="background-color: orange">Designation:{{Auth::user()->designation}}</div>
                         <div class="card-header" style="background-color: orange">Start date:{{Auth::user()->start_from}}</div>
                         <div class="card-header" style="background-color: orange">Department:{{Auth::user()->department->name}}</div>
                         <div class="card-header " style="background-color: orange"><p class="badge badge-success">Role:{{Auth::user()->role->name}}</p></div>
                    </div>
                </div>
            </div>
