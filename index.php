<!DOCTYPE html>
<?php
	$connect = mysqli_connect("127.0.0.1","root","","sppd_gubsu");
	
	$sql = "SELECT * from karyawan";
	$data = mysqli_query($connect,$sql);
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dinas Komunikasi dan Informatika | Halaman Utama</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="daterangepicker.css" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>KI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dis</b>KomInfo</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li><a href="index.php"><i class="fa fa-fw fa-desktop"></i> <span>Halaman Utama</span></a></li>
        <li><a href="#"><i class="fa fa-search"></i><span>Pencarian</span></a></li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Pelaporan</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input
      </h1>
    </section>
  <div class="col-md-9">
    <div class="box box-info">
      <form action="input_data.php" class="form-horizontal">
        <div class="box-body">
          <div class="box-header with-border">
            <h4 class="box-title">Pemberi Tugas : </h4>
          </div>
		  <datalist id="listNIP">
				<?php while ($row = mysqli_fetch_array($data)) { ?>
				<option value = "<?php echo $row[0]; ?>">
				<?php } ?>
			</datalist>
          <div>
            <div class="form-group">
              <label for="inputNIP1" class="col-sm-2 control-label">  NIP</label>
			
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNIP1" placeholder="NIP" list="listNIP" oninput = "showNama1(this.value)"/>
              </div>
            </div>
			       
            <div class="form-group">
              <label for="inputNama" class="col-sm-2 control-label">  Nama</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama" placeholder="Nama" value = "" disabled="">
              </div>
            </div>

            <div class="form-group">
              <label for="inputJabatan" class="col-sm-2 control-label">  Jabatan</label>
				
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputJabatan" placeholder="Jabatan" value="" disabled="">
              </div>
            </div>
          </div>

          <div class="box-header with-border">
            <h4 class="box-title">Pengemban Tugas : </h4>
          </div>
          <div class="form-group">
            <label for="inputNIP2" class="col-sm-2 control-label">  NIP</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputNIP2" placeholder="NIP" list = "listNIP" oninput = "showNama2(this.value)" />
            </div>
          </div>
          <div class="form-group">
            <label for="inputNama" class="col-sm-2 control-label">  Nama</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputNama2" placeholder="Nama" value = "" disabled="">
            </div>
          </div>

          <div class="box-header with-border">
            <h4 class="box-title">Anggaran : </h4>
          </div>
          <div class="form-group">
            <label for="inputInstansi" class="col-sm-2 control-label">  Instansi</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputInstansi" placeholder="Instansi"/>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAnggaran" class="col-sm-2 control-label">  Mata Anggaran</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputAnggaran" placeholder="Anggaran yang digunakan">
            </div>
          </div>
          <div class="box-footer"></div>

          <div class="form-group">
            <label for="inputMaksud" class="col-sm-2 control-label"><span align="left">Maksud Perjalanan</span></label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputMaksud" placeholder="Maksud Perjalanan Dinas">
            </div>
          </div>

          <div class="form-group">
            <label for="inputTempat" class="col-sm-2 control-label">Tempat</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputTempat" placeholder="Tempat Penugasan">
            </div>
          </div>

          <div class="form-group">
            <label for="inputNIP2" class="col-sm-2 control-label">Rentang Waktu</label>

            <div class="col-sm-9">
                <div class="input-group col-sm-10">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input type="text" name="daterange" value="" />
                </div>
            </div>
          </div>

          <div class="form-group">
            <label for="inputWaktu" class="col-sm-2 control-label"><span align="left">Lama Waktu</span></label>

            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputWaktu" placeholder="Lama Waktu" disabled="">
            </div>
          </div>

          <div class="form-group">
            <label for="inputWaktu" class="col-sm-2 control-label"><span align="left">Alat Transportasi</span></label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option>Mobil</option>
                  <option>Bus</option>
                  <option>Kereta Api</option>
                  <option>Pesawat</option>
                </select>
              </div>  
          </div>

          <div class="form-group">
            <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>

            <div class="col-sm-10">
              <textarea class="form-control" rows="3" placeholder="Masukkan Keterangan Tugas..." name="keterangan"></textarea>
            </div>
          </div>
          
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="reset" class="btn btn-default">Reset</button>
            <button type="submit" class="btn btn-info pull-right">Simpan</button>
          </div>
          <!-- /.box-footer -->
      </form>
    </div>
  </div>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2017-2018 Yuslan Ilham .</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript" src="moment.min.js"></script>

<script type="text/javascript" src="daterangepicker.js"></script>

<script>
  $('input[name="daterange"]').daterangepicker(
  {
      locale: {
        format: 'DD-MM-YYYY'
      },
      startDate: '01-01-2017',
      endDate: '12-12-2020'
  }, 
  function(start, end, label) {
      alert("A new date range was chosen: " + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY'));
	  day = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
	  document.getElementById("inputWaktu").value = day + " hari";
  });
</script>



<script>
function showJabatan(str) {
    if (str == "") {
        document.getElementById("inputJabatan").value = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("inputJabatan").value = this.responseText;
            }
        };
        xmlhttp.open("GET","getJabatanKaryawan.php?q="+str,true);
        xmlhttp.send();
    }
}

function showNama1(str) {
    if (str == "") {
        document.getElementById("inputNama").value = "";
		document.getElementById("inputJabatan").value = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("inputNama").value = this.responseText;
				showJabatan(str);
            }
        };
        xmlhttp.open("GET","getNamaKaryawan.php?q="+str,true);
        xmlhttp.send();
    }
}

function showNama2(str) {
    if (str == "") {
        document.getElementById("inputNama2").value = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("inputNama2").value = this.responseText;
            }
        };
        xmlhttp.open("GET","getNamaKaryawan.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

</body>
</html>
