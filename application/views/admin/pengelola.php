 <!-- Begin Page Content -->
 <div class="container-fluid">
<!-- Page Heading -->
 <div class="button mb-3">
      <button type="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddataModal">Tambah</button>
 </div>

 <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Pengelola</h6>
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
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Jimi</td>
                <td>Laki-laki</td>
                <td>subang</td>
                <td>foto</td>
                <td>
                    <button type="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nama Pengelola</th>
                <th>Jenkel</th>
                <th>Alamat</th>
                <th>Foto</th>
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
      <div class="modal-body">
        <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaPengelola">Nama Pengelola</label>
                    <input type="text" class="form-control" id="namaPengelola" placeholder="">
                  </div>

                  <div class="form-group">
                        <label>Jenkel</label>
                        <select class="form-control">
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="">
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

<!-- Modal Edit-->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaPengelola">Nama Pengelola</label>
                                    <input type="text" class="form-control" id="namaPengelola" placeholder="">
                                </div>

                                <div class="form-group">
                                        <label>Jenkel</label>
                                        <select class="form-control">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                        </select>
                                </div>


                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" placeholder="">
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