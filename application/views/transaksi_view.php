<div class="table-agile-info">
<div class="panel">
    <div class="panel-heading">
       <div class="panel-heading">
     DATA BUKU
    </div>
    </div>
    <?php if ($this->session->flashdata('pesan')!=null): ?>
      <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?=$this->session->flashdata('pesan')?>
      </div>
    <?php endif ?>  
    <?php if ($this->session->flashdata('pesan_print')!=null): ?>
      <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?=$this->session->flashdata('pesan_print')?>
      </div>
    <?php endif ?>
    <table  id="example" class="table">
      <thead>
        <th>Id buku</th>
        <th>Judul buku</th>       
        <th>Harga</th>
        <th>Stok</th>
        <th>Kategori</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        <?php foreach ($tampil_buku as $buku): ?>
          <tr>
            <td><?=$buku->kodebuku?></td>
            <td><?=$buku->judulbuku?></td>
            <td><?=$buku->harga?></td>
            <td><?=$buku->stok?></td>
            <td><?=$buku->namakategori?></td>
            <td>
              <a class="btn btn-info" href="<?=base_url('index.php/transaksi/addcart/'.$buku->kodebuku)?>">add</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    </div>
<div class="panel">
       <div class="panel-heading">
     SHOP CART
    </div>

    <?php if ($this->cart->contents()!=NULL): ?>
      <table  id="example" class="table">
        <thead>
          <th>Id buku</th>
          <th>Judul buku</th>       
          <th>Harga</th>
          <th>Qty</th>
          <th>Aksi</th>
        </thead>
        <tbody>       
          <?php foreach ($this->cart->contents() as $items): ?>
            <tr>
              <td><?=$items['id']?></td>
              <td><?=$items['name']?></td>
              <td>Rp.<?=number_format($items['price'])?></td> 
              <td>
                <form method="POST" action="<?=base_url('index.php/transaksi/ubahqty/'.$items['rowid'])?>">
                  <input onchange="submit()" name="qty" class="form-control" type="text" value="<?=$items['qty']?>">
                </form>
              </td>         
              <td><a class="btn btn-danger" href="<?=base_url('index.php/transaksi/hapuscart/'.$items['rowid'])?>">x</a></td>
            </tr>

          <?php endforeach ?>
          <form method="POST" action="<?=base_url('index.php/transaksi/checkout')?>">
            <?php foreach ($this->cart->contents() as $items): ?>
              <input type="hidden" name="qty[]" value="<?=$items['qty']?>">
              <input type="hidden" name="kodebuku[]" value="<?=$items['id']?>">
              <input type="hidden" name="stok[]" value="<?=$items['options']['stok']?>">  
            <?php endforeach ?>
            <tr style="background-color:#5bc0de; color: white">
              <td colspan="2">GrandTotal</td><td>Rp. <?=number_format($this->cart->total())?></td><td colspan="2"></td>         
            </tr>
            <tr>
              <td>Uang Bayar :</td>

              <td>
                <input required type="number" name="uang" class="form-control">
              </td>

              <td>Pembeli :</td>
              <td>
                <input required type="text" name="namapembeli" class="form-control">
              </td>
              <td>
                <input type="submit" class="btn btn-success" name="bayar">
              </form>
            </td>
          </tr>
        </tbody>
      </table>    
    <?php else: ?>
      </div>
         <div class="panel-heading">
     CART KOSONG
    </div>
    <?php endif ?>  
</div>
</div>