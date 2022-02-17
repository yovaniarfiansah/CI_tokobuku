          <div class="table-agile-info">

            <section class="panel">
                <header class="panel-heading">
                    TAMBAH KATEGORI
                </header>
                          <?php
                          $notif = $this->session->flashdata('notif');
        if(!empty($notif)){
            echo '<div class="alert alert-success">';
            echo $notif;
            echo '</div>';
        }
        ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form method="post" action="<?=base_url('index.php/kategori/tambah')?>">
                            <div class="form-group">
                                <label for="namakategori">Nama Kategori</label>
                                <input type="text" class="form-control" name="namakategori" placeholder="namakategori" required>
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
                   Data Kategori
               </div>
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
            <th>Nama Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       <?php
       $no = 1;
       foreach ($tampil_kategori as $data) {
        echo "
        <tr class='odd gradeX'>
        <td>".$no++."</td>
        <td>$data->namakategori</td>
        <td><button class='btn btn-success glyphicon glyphicon-edit' data-toggle='modal' data-target='#modal$data->kodekategori'></button>
        <a href='".base_url()."index.php/kategori/hapus/$data->kodekategori' type='button' class='btn btn-danger glyphicon glyphicon-trash'></a></td>


        </tr>
        <!-- Modal -->
        <div class='modal fade' id='modal$data->kodekategori' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
        <div class='modal-content'>
        <form role='form' action='".base_url()."index.php/kategori/kategori_update/".$data->kodekategori."' method='post'>
        <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' id='myModalLabel'>Edit Data Kategori</h4>
        </div>
        <div class='modal-body'>";?>
            <input type="hidden" class="form-control" name="id_kategori_lama" value="<?php echo $data->kodekategori;?>">
            <div class="form-group">
                <label for="namakategori">nama kategori</label>
                <input type="text" class="form-control" name="namakategori" value="<?php echo $data->namakategori;?>">
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
<!-- /.table-responsive -->
</div>
<!-- /.panel-body -->
<!-- </div> -->
</div>