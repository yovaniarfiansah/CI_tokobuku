           <div class="table-agile-info">
            
                    <section class="panel">
                        <header class="panel-heading">
                            TAMBAH PETUGAS
                        </header>
           <?php
        $notif = $this->session->flashdata('notif1');

        if(!empty($notif)){
            echo '<div class="alert alert-success">';
            echo $notif;
            echo '</div>';
        }
    ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form method="post" action="<?php echo base_url(); ?>index.php/petugas/simpan" id="form-buku">
                                <div class="form-group">
                                    <label for="namauser">Nama Petugas</label>
                                    <input type="text" class="form-control" name="namauser" placeholder="namaadmin" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username" required>
                                </div>
                                 <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="password" required>
                                </div>
                               <div class="form-group">
                                    <label>Level</label>
                                     <select name="level" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="kasir">Kasir</option>
                                    </select>
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
     Data Petugas
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
            <th>Nama Petugas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
             <?php
                                        $no = 1;
                                        foreach ($petugas as $data) {
                                            echo "
                                            <tr class='odd gradeX'>
                                            <td>".$no++."</td>
                                            <td>$data->namauser</td>
                                            <td>$data->username</td>
                                            <td>$data->password</td>
                                            <td>$data->level</td>
                                            <td><button class='btn btn-success glyphicon glyphicon-edit' data-toggle='modal' data-target='#modal$data->kodeuser'></button>
                                            <a href='".base_url()."index.php/petugas/hapus/$data->kodeuser' type='button' class='btn btn-danger glyphicon glyphicon-trash'></a></td>
                                            </tr>
                                            <!-- Modal -->
                                        <div class='modal fade' id='modal$data->kodeuser' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                            <div class='modal-dialog'>
                                                <div class='modal-content'>
                                                  <form role='form' action='".base_url()."index.php/petugas/edit/".$data->kodeuser."' method='post'>
                                                    <div class='modal-header'>
                                                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                                        <h4 class='modal-title' id='myModalLabel'>Edit Data Petugas</h4>
                                                    </div>
                                                    <div class='modal-body'>";?>
                                                    <div class="form-group">
                                                        <label for="namauser">Nama Petugas</label>
                                                        <input type="text" class="form-control" name="namauser" value="<?php echo $data->namauser?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" class="form-control" name="username" value="<?php echo $data->username?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" name="password" value="<?php echo $data->password?>">
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Level</label>
                                                    <select name="level" class="form-control">
                                                        <option value="admin">Admin</option>
                                                          <option value="kasir" <?php if($data->level=='kasir'){echo 'selected';} ?>>Kasir</option>
                                                    </select>
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