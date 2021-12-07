 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- Page Heading -->
 <div class="button mb-3">
      <button class="btn btn-primary">Tambah</button>
  </div>
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
                <th>Nama Wisata</th>
                <th>Lokasi</th>
                <th>Fitur</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Kebun Indah</td>
                <td>Jalan kebun raya</td>
                <td>wahana, penginapan</td>
                <td>Foto</td>
                <td> 
                    <button type="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nama Wisata</th>
                <th>Lokasi</th>
                <th>Fitur</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>