 <!-- Begin Page Content -->
 <div class="container-fluid">
   <div class="button mb-3">
     <button type="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddataModal"><span><i class="fas fa-plus"></i></span> Tambah</button>
   </div>
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
       <?= $this->session->flashdata('message') ?>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead>
             <tr>
               <th>Id</th>
               <th>Nama User</th>
               <th>Jenis Kelamin</th>
               <th>Alamat</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;

              foreach ($peng as $pen) :
                $id = str_replace(['=', '+', '/'], ['-', '_', '~'], $this->encryption->encrypt($pen['id']));
              ?>

               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $pen['nama']; ?></td>
                 <td><?= $pen['jenkel']; ?></td>
                 <td><?= $pen['alamat']; ?></td>
                 <td>
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
               <th>Nama User</th>
               <th>Jenkel</th>
               <th>Alamat</th>
               <th>Action</th>
             </tr>
           </tfoot>
         </table>
       </div>
     </div>
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

       <form class="user" method="POST" action="<?= base_url('Admin/SaveAkun') ?>">
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

 <?php foreach ($peng as $pen1) : ?>
   <div class="modal fade" id="editModal<?= $pen1['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="adddataModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="adddataModalLabel">Edit Data</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

         <form class="user" method="POST" action="<?= base_url('Admin/UpdateAkun/' . $pen1['id']) ?>">
           <div class="modal-body">
             <div class="form-group">
               <input type="text" class="form-control " id="nama" name="nama" placeholder="nama" value="<?= $pen1['nama'] ?>">

             </div>
             <div class="form-group">
               <input type="email" class="form-control " id="email" name="email" placeholder="Email Address" value="<?= $pen1['email'] ?>">
             </div>
             <div class="form-group  ">
               <select class="form-control" name="jenkel">
                 <option value="<?= $pen1['jenkel'] ?>">-- <?= $pen1['jenkel'] ?> --</option>
                 <option value="laki-laki">Laki-laki</option>
                 <option value="perempuan">Perempuan</option>
               </select>
             </div>
             <div class="form-group">
               <input type="text" class="form-control " id="alamat" name="alamat" placeholder="Alamat" value="<?= $pen1['alamat'] ?>">

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
 <?php endforeach; ?>

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
                                                    'Admin/hapusAkun/' . $pen['id']
                                                  ) ?>">
           <div class="modal-body">
             Apakah anda yakin ingin menghapus data ini?
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="Submit" onclick="deleteConfirm('<?= base_url('Admin/hapusAkun' . $id) ?>')" class="btn btn-danger">Hapus</button>
           </div>
       </div>
     </div>
     </form>
   </div>
   </div>
   </div>
   <!-- End Modal Delete -->
 <?php } ?>

 <script>
   function deleteConfirm(url) {
     $('#hapus').attr('href', url);
     $('#hapusModal').modal();
   }
 </script>