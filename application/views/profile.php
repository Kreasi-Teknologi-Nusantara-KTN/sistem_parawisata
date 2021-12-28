
<div class="container-fluid">
    
         
             <div class="img rounded-circle text-center">
                 <img src="<?= base_url('assets/admin/img/undraw_profile.svg') ?>" width="140" alt="">
             </div>
             <br>
             <div class="row">
                 <div class="col-md-4"></div>
             </div>
             <div class="list ">
                 <?php foreach ([$profile] as $p) : ?>
                     <form action="<?= base_url('Home/editProfile/' . $p['id']) ?>" method="POST">
                         <div class="form-group">
                             <label for="namaAdmin">Nama Pengunjung : </label>
                             <input type="text" class="form-control" name="nama" placeholder="" value="<?= $p['nama'] ?>">
                         </div>
                         <div class="form-group">
                             <label for="email">Email :</label>
                             <input type="text" class="form-control" name="email" placeholder="" value="<?= $p['email'] ?>">
                         </div>
                         <label for="jenkel">Jenkel</label>
                         <select class="form-control" name="jenkel">
                             <option value="<?= $p['jenkel'] ?> ?>">-- <?= $p['jenkel'] ?> --</option>
                             <option>Laki-laki</option>
                             <option>Perempuan</option>
                         </select>
                         <br>
                         <div class="form-group">
                             <label for="alamat">Alamat :</label>
                             <input type="text" class="form-control" name="alamat" placeholder="" value="<?= $p['alamat'] ?>">
                         </div>
                         <div class="form-group">
                             <label for="password">Password :</label>
                             <input type="text" class="form-control" name="password" placeholder="">
                         </div>
                     <?php endforeach; ?>
                     <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                     <br>
                     </form>
             </div>
         </div>

     
 
 </div>