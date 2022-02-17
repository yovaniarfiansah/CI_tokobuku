           <div class="table-agile-info">
            
                    <section class="panel">
                        <header class="panel-heading">
                            TAMBAH BUKU
                        </header>
                          <?php
        if(!empty($notif)){
            echo '<div class="alert alert-success">';
            echo $notif;
            echo '</div>';
        }
        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="<?php echo base_url(); ?>index.php/buku/simpan" id="form-buku" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="judulbuku">Judul Buku</label>
                                    <input type="text" class="form-control" name="judulbuku" placeholder="judulbuku" required>
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input type="text" class="form-control" name="tahun" placeholder="tahun" required>
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Kategori</label>
                                    <select class="form-control" name="kategori">
                                          <?php foreach ($kategori as $a): ?>
                                        <option value="<?=$a->kodekategori?>"><?=$a->namakategori?></option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" name="harga" placeholder="harga" required>
                                </div>
                                 <div class="form-group">
                                    <label for="penerbit">Penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" placeholder="penerbit" required>
                                </div>
                                 <div class="form-group">
                                    <label for="penulis">Penulis</label>
                                    <input type="text" class="form-control" name="penulis" placeholder="penulis" required>
                                </div>
                                 <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="text" class="form-control" name="stok" placeholder="stok" required>
                                </div>
                                <div class="form-group">
                                    <label for="penulis">Foto</label>
                                    <input type="file" class="form-control" name="fotocover" required>
                                </div>
                                <div class="row">
                                <div class="col-lg-6">
                                    <input type="reset" name="reset" value="RESET" class="btn btn-block btn-md btn-danger">
                                </div>
                                <div class="col-lg-6">
                                    <input type="submit" name="submit" value="SIMPAN" class="btn btn-block btn-md btn-primary">
                                </div>
                                </div>
                            </form>
                            </div>

                        </div>
                    </section>

 <div class="panel panel-default">
    <div class="panel-heading">
     Data Buku
    </div>
    <?php
        $notif = $this->session->flashdata('notif');

        if(!empty($notif)){
        echo '<div class="alert alert-success">'.$notif.'</div>';
        }
    ?>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Penerbit</th>
            <th>Penulis</th>
            <th>Stok</th>
            <th>Foto Cover</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
             <?php
                                        $no = 1;
                                        foreach ($buku as $data) {
                                        echo "
                                            <tr class='odd gradeX'>
                                            <td>".$no++."</td>
                                            <td>$data->judulbuku</td>
                                            <td>$data->tahun</td>
                                            <td>$data->namakategori</td>
                                            <td>$data->harga</td>
                                            <td>$data->penerbit</td>
                                            <td>$data->penulis</td>
                                            <td>$data->stok</td>
                                            <td><img width='100pxs' src='".base_url()."/uploads/".$data->fotocover."''></td>
                                            <td>
                                            <button data-toggle='modal' data-target='#modal$data->kodebuku' class='glyphicon glyphicon-edit btn btn-success'>
                                            </button>
                                            <a href='".base_url()."index.php/buku/hapus/$data->kodebuku' class='glyphicon glyphicon-trash btn btn-danger'>
                                            </a>
                                            </td>
                                            </tr>

                                            <!-- Modal -->
                                        <div class='modal fade' id='modal$data->kodebuku' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                  <form role='form' action='".base_url()."index.php/buku/edit/".$data->kodebuku."' method='post'>
                                                    <div class='modal-header'>
                                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                                        <h4 class='modal-title' id='myModalLabel'>Edit Data Buku</h4>
                                                    </div>
                                                    <div class='modal-body'>";?>
                                                      <div class="form-group">
                                                        <label>Judul Buku</label>
                                                        <input class="form-control" type="text" name="judulbuku" required value="<?php echo $data->judulbuku; ?>">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Tahun</label>
                                                        <input class="form-control" type="text" name="tahun" required value="<?php echo $data->tahun; ?>">
                                                      </div>

                                                     <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select class="form-control" name="kategori">
                                                   
                                                     <?php foreach ($kategori as $a): ?>
                                                        <option value="<?=$a->kodekategori?>"><?=$a->namakategori?></option>
                                                    <?php endforeach?>
                                                      
                                                    </select>
                                                    </div>
                                                      <div class="form-group">
                                                        <label>Harga</label>
                                                        <input class="form-control" type="text" name="harga" required value="<?php echo $data->harga; ?>">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Penerbit</label>
                                                        <input class="form-control" type="text" name="penerbit" required value="<?php echo $data->penerbit; ?>">
                                                      </div>
                                                      <div class="form-group">
                                                        <label>Penulis</label>
                                                        <input class="form-control" type="text" name="penulis" required value="<?php echo $data->penulis; ?>">
                                                      </div>
                                                       <div class="form-group">
                                                        <label>Stok</label>
                                                        <input class="form-control" type="text" name="stok" required value="<?php echo $data->stok; ?>">
                                                      </div>
                                                    <?php echo "</div>
                                                    <div class='modal-footer'>
                                                    <div class='row'>
                                                    <div class='col-lg-6'>
                                                    <input type='button' name='cancel' class='btn btn-danger btn-block' data-dismiss='modal' value='Cancel'>
                                                    </div>
                                                    <div class='col-lg-6'>
                                                    <input type='submit' name='submit' class='btn btn-success btn-block' value='Edit'>
                                                    </div>
                                                </div>

                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->

                                      ";
                                    }
                                  ?>
        </tbody>
      </table>
    </div>
  </div>
</form>
</div>