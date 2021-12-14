 <!-- Begin Page Content -->
 <div class="container-fluid">
   <!-- Page Heading -->
   <div class="button mb-3">
     <button type="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddataModal"><span><i class="fas fa-plus"></i></span> Tambah</button>
   </div>
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
                 <td><?= $ajukan['gambar']; ?></td>
                 <td><?= $ajukan['informasi_wisata']; ?></td>
                 <td><?= $ajukan['status']; ?></td>
                 <td><a href="" data-toggle="modal" data-target="#AccModal<?= $ajukan['id_wisata']; ?>">Verifikasi</a></td>
                 <td><a href="">Ubah</a></td>
                 <td><a href="">Hapus</a></td>
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

               <th colspan="3">Action</th>
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
         <div class="modal-body">
           <form>
             <div class="card-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">Nama Wisata</label>
                 <input type="text" class="form-control" id="namawisata" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Lokasi</label>
                 <input type="text" class="form-control" id="namawisata" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Fitur</label>
                 <input type="text" class="form-control" id="namawisata" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputFile">Gambar</label>
                 <div class="input-group">
                   <div class="custom-file">
                     <input type="file" class="custom-file-input" id="exampleInputFile">
                     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                   </div>
                   <div class="input-group-append">
                     <span class="input-group-text">Upload</span>
                   </div>
                 </div>
               </div>

             </div>
           </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary">Save changes</button>
         </div>
       </div>
     </div>
   </div>
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
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <form>
             <div class="card-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">Nama Wisata</label>
                 <input type="text" class="form-control" id="namawisata" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Lokasi</label>
                 <input type="text" class="form-control" id="namawisata" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Fitur</label>
                 <input type="text" class="form-control" id="namawisata" placeholder="">
               </div>

               <div class="form-group">
                 <label for="exampleInputFile">Gambar</label>
                 <div class="input-group">
                   <div class="custom-file">
                     <input type="file" class="custom-file-input" id="exampleInputFile">
                     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                   </div>
                   <div class="input-group-append">
                     <span class="input-group-text">Upload</span>
                   </div>
                 </div>
               </div>
             </div>
           </form>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>


     </div>
   </div>
 </div>
 </div>