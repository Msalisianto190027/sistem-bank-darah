<?php

/*session_start();
if (!isset($_SESSION["isLogin"])) {
  header("Location: login.php");
  exit;
}*/

require 'function/functionUser.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WEBTIX | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="informasi.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link">LogOut</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="Dashboard.php" class="brand-link">
        <img src="assets/gambar_film/logo-pmi.jpg" alt="WEBTIX Logo" class="brand-image img-circle" style="opacity: .8">
        <span class="brand-text font-weight-light">User 190523412</span>
      </a>


      <div class="sidebar">
        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="informasi.php" class="nav-link active">
                <i class="fas fa-caret-square-right"></i>
                <p>
                  Information
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="dataJadwal.php" class="nav-link">
                    <i class="fas fa-caret-square-right"></i>
                    <p>Jadwal Donor Massal</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="inputDonor.php" class="nav-link">
                    <i class="fas fa-caret-square-right"></i>
                    <p>Input Donor</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="stokDarah.php" class="nav-link">
                    <i class="fas fa-caret-square-right"></i>
                    <p>Stok Darah</p>
                  </a>
                  <!---</li>
                <li class="nav-item">
                  <a href="dataUser.php" class="nav-link">
                    <i class="fas fa-database nav-icon"></i>
                    <p>Data User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dataAdmin.php" class="nav-link">
                    <i class="fas fa-database nav-icon"></i>
                    <p>Data Admin</p>
                  </a>
                </li>-->
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Information</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="informasi.php">Home</a></li>
                <li class="breadcrumb-item active">Information</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->

          <!-- Main row -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Informasi Donor Darah</h3>

              <div class="card-tools" style="margin:0 30px;">
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              Donor darah merupakan salah satu kegiatan sosial yang bertujuan untuk membantu antar sesama yang sedang membutuhkan transfusi darah. Namun, bila ditelisik dari segi kesehatan ternyata mendonorkan darah tidak hanya bermanfaat bagi mereka yang membutuhkanya. Tapi, kita sebagai pendonor, turut mendapatkan manfaat besar bagi kesehatan diri sendiri ketika rutin mendonorkan darah.

              Berikut 8 manfaat donor darah bagi kesehatan apabila rutin mendonorkan darahnya ke Palang Merah Indonesia (PMI), seperti dikutip dari Boldsky.com :<br>




              <br><b>1. Mengurangi penyakit jantung</b><br>

              Salah satu manfaat kesehatan dari mendonorkan darah secara teratur adalah membuat jantung Anda senantiasa sehat. Dengan melakukan donor darah, otomatis sirkulas darah Anda akan mejadi lebih baik, jantung akan terlatih untuk terus memompa darah sehingga dapat meningkatkan zat besi dalam darah dan menjadikan tubuh lebih sehat serta mengurangi Anda menderita penyakit jantung

              <br><b>2. Membakar kalori</b><br>

              Mendonorkan darah secara teratur akan membantu Anda membakar kalori dalam tubuh, tidak percaya? Bayangkan saja, ketika darah yang Anda donorkan sebanyak 450 ml, maka Anda pun kehilangan sekitar 650 kalori

              <br><b>3. Menurunkan risiko kanker</b><br>

              Selain membantu membakar kalori, mendonorkan darah pun dapat menurnkan risiko terjadinya kanker. Termasuk kanker hati, paru-paru, usus besar, perut, dan kanker tenggorokan

              <br><b>4. Meningkatkan produksi darah</b><br>

              Manfaat mendonorkan darah secara teratur dapat membantu merangsang produksi sel-sel darah baru. Proses mendonorkan darah ini, akan membantu tubuh tetap sehat dan bekerja lebih efisien.

              <br> <b>5. Pikiran lebih stabil</b><br>

              Apakah Anda tahu bahwa mendonorkan darah secara rutin dapat membantu Anda menjaga pikiran tetap stabil? Inilah faktanya. Dengan mendonorkan darah, dapat membuat Anda merasa lebih bahagia dan damai. Bahagia karena dapat menolong sesama dan damai dengan tubuh sendiri ternyata juga dapat meningkatkan kesehatan secara psikologis.

              <br><b>6. Bagian dari periksa kesehatan</b><br>

              Mendonorkan darah juga dapat digunakan sebagai uji pemeriksaan kesehatan diri sendiri. Ketika darah yang Anda miliki berada di dalam kantong darah dan diperiksa di laboratorium, maka tim medis akan melihat apakah Anda menderita suatu penyakit tertentu atau tidak. Sebab jika Anda negatif dari segala jenis penyakit, maka darah yang Anda miliki dapat disumbangkan untuk mereka yang membutuhkan. Jika tidak, maka Anda akan diberitahu apa yang sebenarnya sedang terjadi.

              <br><b>7. Menjadi lansia yang sehat</b><br>

              Banyak orang tua yang memiliki kesehatan cukup baik dan prima di usianya yang telah lanjut tersebut. Ini sebabkan karena mereka senantiasa menyumbangkan darahnya sejak muda sampai mereka tua

              <br><b>8. Menurunkan kolesterol</b><br>

              Manfaat kesehatan lain dari mendonorkan darah secara rutin adalah menurunkan kolesterol, sehingga dapat membantu Anda dalam mengurangi kadar kolesterol dalam tubuh. Dengan melakukan donor darah, kolesterol yang ada di dalam darah secara tidak langsung akan berkurang bersamaan dengan keluarnya darah yang lama. Ini sangat bagus untuk menurunkan kolesterol.

              Jadi, setelah Anda mengetahui apa saja manfaat donor darah, masihkah ragu untuk melakukannya?
            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <script>
    $(function() {
      /*
       * Flot Interactive Chart
       * -----------------------
       */
      // We use an inline data source in the example, usually data would
      // be fetched from a server
      var data = [],
        totalPoints = 100

      function getRandomData() {

        if (data.length > 0) {
          data = data.slice(1)
        }

        // Do a random walk
        while (data.length < totalPoints) {

          var prev = data.length > 0 ? data[data.length - 1] : 50,
            y = prev + Math.random() * 10 - 5

          if (y < 0) {
            y = 0
          } else if (y > 100) {
            y = 100
          }

          data.push(y)
        }

        // Zip the generated y values with the x values
        var res = []
        for (var i = 0; i < data.length; ++i) {
          res.push([i, data[i]])
        }

        return res
      }

      var interactive_plot = $.plot('#interactive', [{
        data: getRandomData(),
      }], {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      })

      var updateInterval = 500 //Fetch data ever x milliseconds
      var realtime = 'on' //If == to on then fetch data every x seconds. else stop fetching
      function update() {

        interactive_plot.setData([getRandomData()])

        // Since the axes don't change, we don't need to call plot.setupGrid()
        interactive_plot.draw()
        if (realtime === 'on') {
          setTimeout(update, updateInterval)
        }
      }

      //INITIALIZE REALTIME DATA FETCHING
      if (realtime === 'on') {
        update()
      }
      //REALTIME TOGGLE
      $('#realtime .btn').click(function() {
        if ($(this).data('toggle') === 'on') {
          realtime = 'on'
        } else {
          realtime = 'off'
        }
        update()
      })
      /*
       * END INTERACTIVE CHART
       */


      /*
       * LINE CHART
       * ----------
       */
      //LINE randomly generated data

      var sin = [],
        cos = []
      for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)])
        cos.push([i, Math.cos(i)])
      }
      var line_data1 = {
        data: sin,
        color: '#3c8dbc'
      }
      var line_data2 = {
        data: cos,
        color: '#00c0ef'
      }
      $.plot('#line-chart', [line_data1, line_data2], {
        grid: {
          hoverable: true,
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          shadowSize: 0,
          lines: {
            show: true
          },
          points: {
            show: true
          }
        },
        lines: {
          fill: false,
          color: ['#3c8dbc', '#f56954']
        },
        yaxis: {
          show: true
        },
        xaxis: {
          show: true
        }
      })
      //Initialize tooltip on hover
      $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
        position: 'absolute',
        display: 'none',
        opacity: 0.8
      }).appendTo('body')
      $('#line-chart').bind('plothover', function(event, pos, item) {

        if (item) {
          var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

          $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
            .css({
              top: item.pageY + 5,
              left: item.pageX + 5
            })
            .fadeIn(200)
        } else {
          $('#line-chart-tooltip').hide()
        }

      })
      /* END LINE CHART */

      /*
       * FULL WIDTH STATIC AREA CHART
       * -----------------
       */
      var areaData = [
        [2, 88.0],
        [3, 93.3],
        [4, 102.0],
        [5, 108.5],
        [6, 115.7],
        [7, 115.6],
        [8, 124.6],
        [9, 130.3],
        [10, 134.3],
        [11, 141.4],
        [12, 146.5],
        [13, 151.7],
        [14, 159.9],
        [15, 165.4],
        [16, 167.8],
        [17, 168.7],
        [18, 169.5],
        [19, 168.0]
      ]
      $.plot('#area-chart', [areaData], {
        grid: {
          borderWidth: 0
        },
        series: {
          shadowSize: 0, // Drawing is faster without shadows
          color: '#00c0ef',
          lines: {
            fill: true //Converts the line chart to area chart
          },
        },
        yaxis: {
          show: false
        },
        xaxis: {
          show: false
        }
      })

      /* END AREA CHART */

      /*
       * BAR CHART
       * ---------
       */

      var bar_data = {
        data: [
          [1, 10],
          [2, 8],
          [3, 4],
          [4, 13],
          [5, 17],
          [6, 9]
        ],
        bars: {
          show: true
        }
      }
      $.plot('#bar-chart', [bar_data], {
        grid: {
          borderWidth: 1,
          borderColor: '#f3f3f3',
          tickColor: '#f3f3f3'
        },
        series: {
          bars: {
            show: true,
            barWidth: 0.5,
            align: 'center',
          },
        },
        colors: ['#3c8dbc'],
        xaxis: {
          ticks: [
            [1, 'January'],
            [2, 'February'],
            [3, 'March'],
            [4, 'April'],
            [5, 'May'],
            [6, 'June']
          ]
        }
      })
      /* END BAR CHART */

      /*
       * DONUT CHART
       * -----------
       */

      var donutData = [{
          label: 'Series2',
          data: 30,
          color: '#3c8dbc'
        },
        {
          label: 'Series3',
          data: 20,
          color: '#0073b7'
        },
        {
          label: 'Series4',
          data: 50,
          color: '#00c0ef'
        }
      ]
      $.plot('#donut-chart', donutData, {
        series: {
          pie: {
            show: true,
            radius: 1,
            innerRadius: 0.5,
            label: {
              show: true,
              radius: 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
      return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
        label +
        '<br>' +
        Math.round(series.percent) + '%</div>'
    }
  </script>
</body>

</html>