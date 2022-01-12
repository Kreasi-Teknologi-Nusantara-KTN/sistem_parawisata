 <!-- Begin Page Content -->
 <div class="container-fluid">
   <!-- Page Heading -->
   <div class="button mb-3">
     <button type="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddataModal"><span><i class="fas fa-plus"></i></span> Tambah</button>
   </div>
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Data Pengelola</h6>
       <?= $this->session->userdata('message'); ?>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead>
             <tr>
               <th>Id</th>
               <th>Nama Pengelola</th>
               <th>Jenkel</th>
               <th>Alamat</th>
               <th>Kontak</th>
               <th>Status</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;

              foreach ($peng as $pen) :
                
              ?>

               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $pen['nama']; ?></td>
                 <td><?= $pen['jenkel']; ?></td>
                 <td><?= $pen['alamat']; ?></td>
                 <td><?= $pen['kontak']; ?></td>
                 <?php
                  if ($pen['is_active'] == 0) { ?>
                   <td>Belum diverifikasi</td>
                 <?php } else { ?>
                   <td>Sudah diverifikasi</td>
                 <?php } ?>
                 <td>
                   <a href="#" data-toggle="modal" data-target="#verifikasiModal<?= $pen['id']; ?>" class="btn btn-success">Verifikasi</a>
                   <button type="button" class="btn btn-warning btn-circle mb-2" data-toggle="modal" data-target="#editModal<?php echo $pen['id']; ?>">
                     <i class="fas fa-pen-square"></i>
                   </button>
                   <button type="button" class="btn btn-danger btn-circle mb-2" data-toggle="modal" data-target="#hapusModal<?php echo $pen['id'] ?>"><i class="fas fa-trash"></i></button>
                 </td>
               </tr>
             <?php endforeach; ?>
           </tbody>
           <tfoot>
             <tr>
               <th>Id</th>
               <th>Nama Pengelola</th>
               <th>Jenkel</th>
               <th>Alamat</th>
               <th>Kontak</th>
               <th>Action</th>
             </tr>
           </tfoot>
         </table>
       </div>
     </div>
   </div>


   <!-- Modal tambah data -->
   <div class="modal fade" id="adddataModal" tabindex="-1" role="dialog" aria-labelledby="adddataModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="adddataModalLabel">Tambah Data</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

         <form class="user" method="POST" action="<?= base_url(
                                                    'Admin/SavePengelola'
                                                  ) ?>">
           <div class="modal-body">
             <div class="form-group">
               <input type="text" class="form-control " id="nama" name="nama" placeholder="nama">

             </div>
             <div class="form-group">
               <input type="email" class="form-control " id="email" name="email" placeholder="Email Address">
             </div>
             <div class="form-group  ">
               <select class="form-control" name="jenkel">
                 <option value="laki-laki">Laki-laki</option>
                 <option value="perempuan">Perempuan</option>
               </select>
             </div>
             <div class="form-group">
               <input type="text" class="form-control " id="alamat" name="alamat" placeholder="Alamat">
             </div>
             <div class="form-group">
               <input type="text" class="form-control " id="kontak" name="kontak" placeholder="kontak">
             </div>
             <div class="form-group row">
               <div class="col-sm-6 mb-3 mb-sm-0">
                 <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">

               </div>
               <div class="col-sm-6">
                 <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
               </div>
             </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="Submit" class="btn btn-primary">Save changes</button>
           </div>
       </div>
     </div>
     </form>
   </div>
 </div>
 </div>

 <!-- Modal Edit-->
 <?php foreach ($peng as $pen) {


  ?>
   <div class="modal fade" id="editModal<?php echo $pen['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">

         <div class="modal-header">
           <h5 class="modal-title" id="editModalLabel">Edit</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <form method="POST" action="<?= base_url(
                                        'Admin/edit/' . $pen['id']
                                      ) ?>">
           <div class="modal-body">

             <div class="card-body">
               <div class="form-group">
                 <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="<?= $pen['id'] ?>">
                 <label for="namaPengelola">Nama Pengelola</label>
                 <input type="text" class="form-control" id="namaPengelola" placeholder="" name="nama" value="<?= $pen['nama'] ?>">

               </div>

               <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" class="form-control" name="email" id="email" placeholder="" value="<?= $pen['email'] ?>">
               </div>

               <div class="form-group">
                 <label>Jenkel</label>
                 <select class="form-control" name="jenkel">
                   <option value="<?= $pen['jenkel'] ?>"><?= $pen['jenkel'] ?></option>
                   <option>Laki-laki</option>
                   <option>Perempuan</option>
                 </select>
               </div>


               <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <input type="text" class="form-control" name="alamat" id="alamat" placeholder="" value="<?= $pen['alamat'] ?>">
               </div>
               <div class="form-group">
                 <label for="kontak">Kontak</label>
                 <input type="text" class="form-control" name="kontak" id="kontak" placeholder="" value="<?= $pen['kontak'] ?>">
               </div>
               <label for="alamat">Masukan Password Baru</label>
               <div class="form-group row">

                 <div class="col-sm-6 mb-3 mb-sm-0">
                   <input type="password" class="form-control" id="password1" name="password1" value="" placeholder="Password">

                 </div>
                 <div class="col-sm-6">
                   <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                 </div>
               </div>
               <div class="form-group">
                 <input type="hidden" class="form-control" name="role" id="role" placeholder="" value="<?= $pen['role'] ?>">
                 <input type="hidden" class="form-control" name="is_active" id="is_active" placeholder="" value="<?= $pen['is_active'] ?>">
                 <input type="hidden" class="form-control" name="date_created" id="date_created" placeholder="" value="<?= $pen['date_created'] ?>">

               </div>


             </div>

             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
             </div>
         </form>
       </div>

     </div>
   </div>
   </div>
   </div>
   </div>
 <?php } ?>

 <?php foreach ($peng as $pen) { ?>
   <div class="modal fade" id="hapusModal<?php echo $pen['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="hapusModalLabel">Hapus Data</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

         <form class="user" method="POST" action="<?= base_url(
                                                    'Admin/hapusPengelola/' . $pen['id']
                                                  ) ?>">
           <div class="modal-body">
             Apakah anda yakin ingin menghapus data ini?
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="Submit" onclick="deleteConfirm('<?= base_url('Admin/hapusPengelola' . $pen['id']) ?>')" class="btn btn-danger">Hapus</button>
           </div>
       </div>
     </div>
     </form>
   </div>
   </div>
   </div>
   <!-- End Modal Delete -->
 <?php } ?>
 <!-- Modal Verifikasi -->
 <?php foreach ($peng as $penn) : ?>
   <div class="modal fade" id="verifikasiModal<?= $penn['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="adddataModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="adddataModalLabel">Verifikasi Pengelola</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <div class="card-body">
             <div class="form-group">
               <div class="row">
                 <div class="col-md-6">
                   <a href="<?= base_url('Admin/verifikasi/' . $penn['id']) ?>" class="btn btn-primary">Terima</a>
                 </div>
                 <div class="col-md-6">
                   <a href="<?= base_url('Admin/sendEmail/' . $penn['id']) ?>" class="btn btn-danger">Tolak</a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 <?php endforeach; ?>

 <script>
   function deleteConfirm(url) {
     $('#hapus').attr('href', url);
     $('#hapusModal').modal();
   }
 </script>