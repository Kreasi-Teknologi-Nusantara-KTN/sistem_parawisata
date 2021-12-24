 <!-- Begin Page Content -->
 <div class="container-fluid">
   <!-- Page Heading -->
   <!-- <div class="button mb-3">
     <button type="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal"><span><i class="fas fa-plus"></i></span> Tambah</button>
   </div> -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Data Wisata</h6>
       <?= $this->session->flashdata('message') ?>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead>
             <tr>
               <th>No. </th>
               <th>Nama Wisata</th>
               <th>Lokasi</th>
               <th>Fitur</th>
               <th>Gambar</th>
               <th>Informasi</th>
               <th>Status</th>
               <th>Live View</th>
               <th colspan="3">Action</th>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;
              foreach ($pengajuan as $ajukan) : ?>
               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $ajukan['nama_wisata']; ?></td>
                 <td><?= $ajukan['lokasi']; ?></td>
                 <td><?= $ajukan['fitur']; ?></td>
                 <td><img width="100px" height="100px" src="<?= base_url('assets/images/' . $ajukan['gambar']); ?>" alt=""></td>
                 <td><?= $ajukan['informasi_wisata']; ?></td>
                 <td><?= $ajukan['status']; ?></td>
                 <?php $url = prep_url($ajukan['link']); ?>
                 <td><a href="<?= $url ?>" target="_blank" rel="noopener noreferrer"> view</a></td>
                 <td><a href="" data-toggle="modal" data-target="#AccModal<?= $ajukan['id_wisata']; ?>">Verifikasi</a></td>
                 <td><a href="" data-toggle="modal" data-target="#EditModal<?= $ajukan['id_wisata']; ?>">Ubah</a></td>
                 <td><a href="" data-toggle="modal" data-target="#HapusModal<?= $ajukan['id_wisata'] ?>">Hapus</a></td>
               </tr>
             <?php endforeach; ?>
           </tbody>
           <tfoot>
             <tr>
               <th>No. </th>
               <th>Nama Wisata</th>
               <th>Lokasi</th>
               <th>Fitur</th>
               <th>Gambar</th>
               <th>Informasi</th>
               <th>Status</th>
               <th>Live View</th>
               <th colspan="3">Action</th>
             </tr>
           </tfoot>
         </table>
       </div>
     </div>
   </div>



   <!-- Modal tambah data -->
   <!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="adddataModalLabel">Pengajuan Wisata</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <form action="<?= base_url('Admin/addwisata'); ?>" method="POST" enctype="multipart/form-data">
             <div class="card-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">Nama Wisata</label>
                 <input type="text" class="form-control" name="nama" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Lokasi</label>
                 <input type="text" class="form-control" name="lokasi" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Fitur</label>
                 <input type="text" class="form-control" name="fitur" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputFile">Gambar</label>
                 <div class="input-group">
                   <div class="custom-file">
                     <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                   </div>
                 </div>
               </div>
               <div class="form-group">
                 <label for="">Informasi Wisata</label>
                 <textarea name="informasi" id="" class="form-control"></textarea>
                 <input type="hidden" name="status" value="Belum disetujui">
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
   </div> -->


   <!-- Modal Verifikasi -->
   <?php foreach ($pengajuan as $ajukan1) : ?>
     <div class="modal fade" id="AccModal<?= $ajukan1['id_wisata']; ?>" tabindex="-1" role="dialog" aria-labelledby="adddataModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="adddataModalLabel">Verifikasi Wisata</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <div class="card-body">
               <div class="form-group">
                 <label for="exampleInputEmail1"><?= $ajukan1['nama_wisata']; ?></label>
                 <form action="<?= base_url('Pengajuan/verifikasi/' . $ajukan1['id_wisata']) ?>" method="POST" enctype="multipart/form-data">
                   <select name="status" class="form-control" onchange="this.form.submit();">
                     <option>-- <?= $ajukan1['status']; ?> --</option>
                     <option>Sudah disetujui</option>
                     <option>Belum disetujui</option>
                   </select>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   <?php endforeach; ?>
   <!-- Modal Edit-->
   <?php foreach ($pengajuan as $ajukan) : ?>
     <div class="modal fade" id="EditModal<?= $ajukan['id_wisata']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <form method="post" action="<?= base_url(
                                          'Admin/editwisata/' . $ajukan['id_wisata']
                                        ) ?>" enctype="multipart/form-data">
             <div class="modal-body">

               <div class="card-body">
                 <input type="hidden" class="form-control" id="id_wisata" name="id_wisata" value="<?= $ajukan['id_wisata'] ?>">
                 <div class="form-group">
                   <label for="exampleInputEmail1">Nama Wisata</label>
                   <input type="text" class="form-control" id="namawisata" name="nama" value="<?= $ajukan['nama_wisata'] ?>" placeholder="">
                 </div>

                 <div class="form-group">
                   <label for="exampleInputEmail1">Lokasi</label>
                   <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $ajukan['lokasi'] ?>" placeholder="">
                 </div>

                 <div class="form-group">
                   <label for="exampleInputEmail1">Fitur</label>
                   <input type="text" class="form-control" id="namawisata" name="fitur" value="<?= $ajukan['fitur'] ?>" placeholder="">
                 </div>

                 <div class="form-group">
                   <label for="exampleInputFile">Gambar</label>
                   <div class="input-group">
                     <div class="custom-file">
                       <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                       <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                     </div>

                   </div>
                 </div>
                 <div class="form-group">
                   <label for="">Informasi Wisata</label>
                   <textarea name="informasi" id="" name="informasi" class="form-control"><?= $ajukan['informasi_wisata'] ?></textarea>
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
 <?php endforeach; ?>

 <?php foreach ($pengajuan as $ajukan) { ?>
   <div class="modal fade" id="HapusModal<?= $ajukan['id_wisata'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="hapusModalLabel">Hapus Data</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

         <form class="user" method="POST" action="<?= base_url(
                                                    'Admin/hapusWisata/' . $ajukan['id_wisata']
                                                  ) ?>">
           <div class="modal-body">
             Apakah anda yakin ingin menghapus data ini?
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="Submit" onclick="deleteConfirm('<?= base_url('Admin/hapusWisata') ?>')" class="btn btn-danger">Hapus</button>
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