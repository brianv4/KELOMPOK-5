<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

  </nav>
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
          
        </ol>

       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <center><h3>150</h3></center>

                <center><p>Calon Peserta</p></center>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <center><a href="calonpeserta.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
            </div>
          </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <center><h3>67<sup style="font-size: 20px"></sup></h3></center>

              <center><p>Peserta Kursus</p></center>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <center><a href="pesertakursus.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <center><h3>83</h3></center>

              <center><p>Peserta Pelatihan</p></center>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <center><a href="pesertapelatihan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <center><h3>5</h3></center>

              <center><p>User</p></center>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <center><a href="user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a></center>
            </div>
          </div>
       <br>
       <br>
         <!-- solid sales graph -->
         <div class="card bg-gradient-info">
              <div class="card-header border-0">

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
      </div>
      <!-- /.container-fluid -->
<?php
include('includes/scripts.php');
include('includes/footer.php')
?>

    

 