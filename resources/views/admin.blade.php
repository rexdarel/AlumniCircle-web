@extends('layouts.app')
@section('title')
Admin Management
@endsection
@section('admin_link')
navigation__active
@endsection
@section('content')
@section('tables')
<!-- Vendors: Data tables -->
<script src="assets/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/vendors/bower_components/jszip/dist/jszip.min.js"></script>
<script src="assets/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('table.display').DataTable();
} );
</script>
@endsection
<main class="main">

    

    @include('shared.header')
    @include('shared.sidebar')

    <section class="content">
        <header class="content__title">
            <h1>Admin Management</h1>
            <small>Manage the admin accounts here.</small>

            <div class="actions">
                <a href="#" type="btn" class="btn btn-success">New Account</a>
            </div>
        </header>

        <div class="card">

            <div class="card-block">
                <div class="tab-container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#approved" role="tab">Approved</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#pending" role="tab">Pending</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#trashed" role="tab">Trash</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="approved" role="tabpanel">
                            <h4 class="card-block__title mb-4">Approved Accounts</h4>

                            <div class="table-responsive">
                                <table id="data-table-approved" class="display table table-bordered">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        
                        <div class="tab-pane fade" id="pending" role="tabpanel">
                            <h4 class="card-block__title mb-4">Pending Accounts</h4>

                            <div class="table-responsive">
                                <table id="data-table-pending" class="display table table-bordered">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="trashed" role="tabpanel">
                            <h4 class="card-block__title mb-4">Trashed Accounts</h4>

                            <div class="table-responsive">
                                <table id="data-table-trash" class="display table table-bordered">
                                    <thead class="thead-default">
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel">
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('shared.footer')
</section>
</main>
@endsection
