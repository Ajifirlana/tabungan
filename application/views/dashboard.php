<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view('template_a');?>
 
 </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'config/top-menu.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'config/side.php'; ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small>Control Panel</small>
      

    </section>
    <section class="content-header">
    <div class="col-md-3">
          <div class="info-box">
          

            <div class="info-box-content">
               <h5>Jumlah Tabungan</h5>
             <h5> <?php echo 'Rp '.number_format($jumlah) ?></h5>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div><div class="col-md-3">
          <div class="info-box">
          

           <div class="info-box-content">
               <h5>Jumlah User</h5>
             <h5> <?php echo number_format($jumlah_user) ?></h5>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
       
      </section>
    <!-- Main content -->
    <section class="content">

        
    <div class="row">
      
  <div class="col-md-12">


    
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Tabungan</h3>

      <p></p>

 <div class="box-body">

      </div>

<div class="box-header">
	<?php
          echo $this->session->flashdata('msg');
          ?>

      </div>

      <!-- /.box-header -->
      <div class="box-body">
        <table id="berita" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>

            <th>No</th>
            <th>Jumlah</th>

            <th>Tanggal Setor</th>

            <th>Nama User</th>
          </tr>
          </thead>
          <tbody>
          <?php 
         $no=1;
          foreach ($tabungan->result() as $row) {
               
           ?>
          <tr>

  <td><?php echo $no++; ?></td>
  <td><?php echo "Rp. ".number_format($row->jumlah); ?></td>

            <td><?php echo $row->tanggal_setor; ?></td>
            <td><?php echo $row->nama_user; ?></td>
         
          </tr>
          <?php } ?>

          </tbody>
          
        </table>
         



      </div>

      <div class="box-header">
  <?php 
        if ($this->session->userdata('level') == 'User') {
         ?>

      <script type="text/javascript" language="javascript">
                alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
              </script>
              <?php
              redirect('index.php/dashboard/chart');
            }
        ?>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2021 <a href="http://caramengatasimasalahmu.blogspot.com/">Teknologi</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<script type="text/javascript">
  $(document).ready( function () {
      $('#berita').DataTable();
  } );
</script>


<!-- ./wrapper -->
<script src="<?php echo base_url();?>assets/admin/dist/js/app.min.js"></script>

</body>


</html>