 <!-- Begin Page Content -->
 <div class="container-fluid">
   <?= $this->session->flashdata('message') ?>
   <!-- Page Heading -->

   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Data Wisata</h6>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead>
             <tr>
               <th>Id</th>
               <th>Status</th>
               <th>Nama Wisata</th>
               <th>Lokasi</th>
               <th>Fitur</th>
               <th>Gambar</th>
               <th>Link Map</th>

               <th>Action</th>
             </tr>
           </thead>
           <tbody>
             <?php
              $no = 1;
              foreach ($info as $inf) : ?>
               <tr>
                 <td><?= $no++; ?></td>
                 <td><?= $inf['status'] ?></td>
                 <td><?= $inf['nama_wisata'] ?></td>
                 <td><?= $inf['lokasi'] ?></td>
                 <td><?= $inf['fitur'] ?></td>
                 <td><img width="100px" height="100px" src="<?= base_url('assets/images/' . $inf['gambar']); ?>" alt=""></td>
                 <td><?= $inf['map'] ?>/</td>
                 <td>
                   <?php $url = prep_url($inf['link']); ?>
                   <a class="btn btn-primary btn-circle mb-2" href=" <?= $url ?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-eye"></i></a>
                   <a href="" class="btn btn-warning btn-circle mb-2" data-toggle="modal" data-target="#editInfoModal<?= $inf['id_wisata'] ?>">
                     <i class="fas fa-pen-square"></i>
                   </a>
                   <a href="" data-toggle="modal" data-target="#hapusModal<?= $inf['id_wisata'] ?>" class="btn btn-danger btn-circle mb-2"><i class="fas fa-trash"></i></a>
                 </td>
               </tr>
             <?php endforeach; ?>
           </tbody>
           <tfoot>
             <tr>
               <th>Id</th>
               <th>Status</th>
               <th>Nama Wisata</th>
               <th>Lokasi</th>
               <th>Fitur</th>
               <th>Gambar</th>
               <th>Link Map</th>
               <th>Action</th>
             </tr>
           </tfoot>
         </table>
       </div>
     </div>
   </div>

   <!-- Modal Edit-->
   <?php foreach ($info as $inf1) : ?>
     <div class="modal fade" id="editInfoModal<?= $inf1['id_wisata'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form action="<?= base_url('Pengajuan/editInfo/' . $inf1['id_wisata']) ?>" method="POST">
               <div class="card-body">
                 <div class="form-group">
                   <label for="namaWisata">Nama Wisata</label>
                   <input type="text" class="form-control" id="namawisata" placeholder="" name="nama" value="<?= $inf1['nama_wisata'] ?>">
                 </div>

                 <div class="form-group">
                   <label for="lokasi">Lokasi</label>
                   <input type="text" class="form-control" id="lokasi" placeholder="" name="lokasi" value="<?= $inf1['lokasi'] ?>">
                 </div>

                 <div class="form-group">
                   <label for="fiture">Fitur</label>
                   <input type="text" class="form-control" id="fiture" placeholder="" name="fitur" value="<?= $inf1['fitur'] ?>">
                 </div>


                 <div class="form-group">
                   <label for="linkMap">live View</label>
                   <input type="text" class="form-control" id="namawisata" name="ip" placeholder="masukan ip/alamat camera" name="" value="<?= $inf1['link'] ?>">
                 </div>

                 <div class="form-group">
                   <label for="linkMap">link maps</label>
                   <input type="text" class="form-control" id="namawisata" name="maps" placeholder="masukan alamat google maps" name="" value="<?= $inf1['map'] ?>">
                 </div>
                 <button type="submit" class="btn btn-success">Simpan</button>
               </div>
             </form>
             <div class="form-group">
               <label for="exampleInputFile">Gambar</label>
               <div class="input-group">
                 <form action="<?= base_url('pengajuan/update_foto/' . $inf1['id_wisata']) ?>" method="POST" enctype="multipart/form-data">
                   <div class="custom-file">
                     <input type="file" class="form-control" name="gambar" id="exampleInputFile">
                   </div>
                   <div class="input-group-append">
                     <button type="submit" class="input-group-text">Ubah Gambar</button>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>


     </div>
 </div>
 </div>
 </div>
 <?php endforeach; ?>
 <?php foreach ($info as $inf2) { ?>
   <div class="modal fade" id="hapusModal<?= $inf2['id_wisata'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="hapusModalLabel">Hapus Data</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>

         <form class="user" method="POST" action="<?= base_url(
                                                    'Pengajuan/deleteInfo/' . $inf2['id_wisata']
                                                  ) ?>">
           <div class="modal-body">
             Apakah anda yakin ingin menghapus data ini?
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-danger">Hapus</button>
           </div>
       </div>
     </div>
     </form>
   </div>
   </div>
   </div>
   <!-- End Modal Delete -->
 <?php } ?>