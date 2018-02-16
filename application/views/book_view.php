<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/AdminLTE/dist/css/loading.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="overlay"></div>
<div class="main-contain">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
		      <?php $this->view('top_nav_view');?>
	    </div>
  </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php $this->view('side_menu_view'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Modals
        <small>new</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">Modals</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <div class="box-body">
              <button class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Add Book</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatbl" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Book ID</th>
        					<th>Book ISBN</th>
        					<th>Book Title</th>
        					<th>Book Author</th>
        					<th>Book Category</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
          				<?php foreach($books as $book){?>
          				     <tr>
          				         <td><?php echo $book->book_id;?></td>
          				         <td><?php echo $book->book_isbn;?></td>
          								 <td><?php echo $book->book_title;?></td>
          								<td><?php echo $book->book_author;?></td>
          								<td><?php echo $book->book_category;?></td>
          								<td>
          									<button class="small-btn btn-warning" onclick="edit_book(<?php echo $book->book_id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
          									<button class="small-btn btn-danger" onclick="delete_book(<?php echo $book->book_id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
          								</td>
          				      </tr>
          				     <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <div class="modal fade" id="modal_form" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Book Form</h3>
              </div>
              <div class="modal-body form">
                <form id="form" method="post" onsubmit="save()" class="form-horizontal">
                  <input type="hidden" name="book_id"/>
                  <div class="form-body">
                    <div class="form-group">
                      <label class="control-label col-md-3">Book ISBN</label>
                      <div class="col-md-9">
                        <input name="book_isbn" placeholder="Book ISBN" class="form-control" type="text" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Book Title</label>
                      <div class="col-md-9">
                        <input name="book_title" placeholder="Book_title" class="form-control" type="text" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Book Author</label>
                      <div class="col-md-9">
        								<input name="book_author" placeholder="Book Author" class="form-control" type="text" required>

                      </div>
                    </div>
        						<div class="form-group">
        							<label class="control-label col-md-3">Book Category</label>
        							<div class="col-md-9">
        								<input name="book_category" placeholder="Book Category" class="form-control" type="text" required>

        							</div>
        						</div>

                  </div>

                  </div>
                  <div class="modal-footer">
                    <button type="submit" id="btnSave"  class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
                </form>
                </div><!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
      <?php $this->view('footer_view'); ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <?php $this->view('sidebar_view'); ?>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</div>
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/assets/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/assets/AdminLTE/dist/js/demo.js"></script>
<!-- page script -->

  <script type="text/javascript">
$(document).ready(function() {
    $('#datatbl').DataTable()
    $("#overlay").fadeOut();
    $(".main-contain").removeClass("main-contain");
} );



    var save_method; //for save method string
    var table;


    function add_book(){
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_book(id){
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('/book/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('[name="book_id"]').val(data.book_id);
            $('[name="book_isbn"]').val(data.book_isbn);
            $('[name="book_title"]').val(data.book_title);
            $('[name="book_author"]').val(data.book_author);
            $('[name="book_category"]').val(data.book_category);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown){
            alert('Error get data from ajax');
        }
    });
    }

    function save(){
      var url;

      if(save_method == 'add'){
          url = "<?php echo site_url('/book/book_add')?>";
      }
      else{
        url = "<?php echo site_url('/book/book_update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data){
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error adding / update data');
            }
        });
    }

    function delete_book(id){
      if(confirm('Are you sure delete this data?')){
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('/book/book_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data){

               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error deleting data');
            }
        });

      }
    }
  </script>
</body>
</html>
