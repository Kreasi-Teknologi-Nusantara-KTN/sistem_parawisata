 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <?= $this->session->userdata('message'); ?>
     <!-- awal untuk bagian konten -->
     <div class="row align-content-center">

         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-primary shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Jumlah User</div>
                             <?php
                                $query = $this->db->query("SELECT * FROM user")->result_array();
                                $jml = count($query);
                                ?>
                             <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml; ?></div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-user fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-success shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                 Jumlah Pengelola</div>
                             <?php
                                $query = $this->db->query("SELECT * FROM user WHERE role > 1")->result_array();
                                $jml = count($query);
                                ?>
                             <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jml; ?></div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-user-cog fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


         <div class="col-xl-3 col-md-6 mb-4">
             <div class="card border-left-info shadow h-100 py-2">
                 <div class="card-body">
                     <div class="row no-gutters align-items-center">
                         <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Jumlah Wisata
                             </div>
                             <?php
                                $query = $this->db->query("SELECT * FROM wisata")->result_array();
                                $jml = count($query);
                                ?>
                             <div class="row no-gutters align-items-center">
                                 <div class="col-auto">
                                     <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jml; ?></div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-auto">
                             <i class="fas fa-suitcase-rolling fa-2x text-gray-300"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>