<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="lib/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <title>SB Admin 2 - Dashboard</title>

  @include('include.cssimport')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  @include('include.sidebars')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      @include('include.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Utilisateurs</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Extraction Excel</a>
          </div>

          <div class="container">

                    <div class="row">

                        <div class="col-md-12">


            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                				<thead>
            						<tr>
            							<th>Name</th>
            							<th>Position</th>
            							<th>Office</th>
            							<th>Age</th>
            							<th>Start date</th>
            							<th>Salary</th>
                          <th>Edit</th>
                          <th>Delete</th>
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
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fas fa-edit"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></td>
            						</tr>

                                        <tr>
            							<td>Tiger Nixon</td>
            							<td>System Architect</td>
            							<td>Edinburgh</td>
            							<td>61</td>
            							<td>2011/04/25</td>
            							<td>$320,800</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fas fa-edit"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></td>
            						</tr>
                                        <tr>
            							<td>Tiger Nixon</td>
            							<td>System Architect</td>
            							<td>Edinburgh</td>
            							<td>61</td>
            							<td>2011/04/25</td>
            							<td>$320,800</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fas fa-edit"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></td>
            						</tr>
                                        <tr>
            							<td>Tiger Nixon</td>
            							<td>System Architect</td>
            							<td>Edinburgh</td>
            							<td>61</td>
            							<td>2011/04/25</td>
            							<td>$320,800</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fas fa-edit"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></td>
            						</tr>
                                        <tr>
            							<td>Tiger Nixon</td>
            							<td>System Architect</td>
            							<td>Edinburgh</td>
            							<td>61</td>
            							<td>2011/04/25</td>
            							<td>$320,800</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fas fa-edit"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></td>
            						</tr>
                                        <tr>
            							<td>Tiger Nixon</td>
            							<td>System Architect</td>
            							<td>Edinburgh</td>
            							<td>61</td>
            							<td>2011/04/25</td>
            							<td>$320,800</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fas fa-edit"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="fa fa-trash"></span></button></p></td>
            						</tr>

            					</tbody>
            				</table>


            	</div>
            	</div>
            </div>

            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                  <div class="modal-dialog">
                <div class="modal-content">
                      <div class="modal-header">
                    <h4 class="modal-title custom_align" id="Heading">Edit this entry</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                      <div class="modal-body">
                      <div class="form-group">
                    <input class="form-control " type="text" placeholder="Tiger Nixon">
                    </div>
                    <div class="form-group">

                    <input class="form-control " type="text" placeholder="System Architect">
                    </div>
                    <div class="form-group">


                  <input class="form-control " type="text" placeholder="Edinburgh">

                    </div>
                  </div>
                      <div class="modal-footer ">
                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                  </div>
                    </div>
                <!-- /.modal-content -->
              </div>
                  <!-- /.modal-dialog -->
                </div>



                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                  <div class="modal-dialog">
                <div class="modal-content">
                      <div class="modal-header">
                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                      <div class="modal-body">

                   <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                  </div>
                    <div class="modal-footer ">
                    <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                  </div>
                    </div>
                <!-- /.modal-content -->
              </div>
                  <!-- /.modal-dialog -->
                </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



      @include('include.footer')

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('include.modaleLogout')


  @include('include.jsimport')

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
          "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
          }
        });
    });
</script>




</body>

</html>
