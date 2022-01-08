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