
<?= $this->extend('template/cart'); ?>
<?= $this->section('content'); ?>
<main>

<?php 
  $keranjang = $cart->contents();
  $total = $cart->totalItems();
  $jumlah = $cart->total();
?>

  <div class="container mt-5">
    <?php if($item == 0) { ?>
      <div class="card">
        <div class="card-header">List Cart</div>
        <div class="card-body">
          Keranjang belanja Anda sedang kosong. <a href="<?= base_url('Home')?>" class="btn btn-success">Belanja Yuk</a>
        </div>
      </div>
    <?php } else { ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="card">
              <div class="card-header">
                <h3 class="fw-bold card-title">KERANJANG BELANJA</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
               <table class="table table-sm">
                <tbody>
                  <?php
                  $i = 1;
                  ?>
                  <?php foreach ($keranjang as $key => $value) :?>
                 <tr>
                  <td class="pt-4" align="center"><img style="border-radius:15px" src="<?= base_url('assets/img/')?>/<?= $value['options']['foto']?>" width="115px" alt="Rectangle">
                  </td>
                  <td class="pt-3">
                    <h1 class="fw-bold mb-2" style="color:#17304E; font-size:20px"><?= $value['name']?></h1>  
                    <p class="mb-2" name="totalsub" id="totalsub" value="" style="color:#FFC107;"><?= number_to_currency($value['subtotal'], 'IDR') ;?></p> 
                    <p class="mb-2">Warna &nbsp;: Hitam</p>
                    <p>Ram &emsp;: 128 GB</p></td>
                    <td class="pt-5">
                      <input type="number" id="qty" name="qty" step="1" value="<?= $value['qty']?>">
                    </td>
                  </td>
                  <td class="pt-5">
                    <a href="<?= base_url('cart/remove/'.$value['rowid']);?>"><i class="fas fa-trash fa-2x" style="color: black;"></i></a></td>
                  </tr>
                  <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <a href="<?= base_url('Home')?>" style="background: transparent; color: grey; border:none;" class="mb-3"><i class="fas fa-chevron-left"></i>&emsp;Belanja Lagi</a>
          </div>
          <!-- /.card -->

          <div class="col-md-5">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm" style="height:360px">
                  <tbody>
                    <tr>
                      <td class="pt-4"><?= $total ?> Item</td>
                      <td class="pt-4 fw-bold" id="total" style="color:#FFC107; text-align: right;"><?= number_to_currency($jumlah, 'IDR') ;?></td>
                    </tr>
                    <tr >
                      <td class="pt-4">Jumlah</td>
                      <td class="pt-4 fw-bold" style="color:#FFC107; text-align: right;"><?= number_to_currency($jumlah, 'IDR') ;?></td>
                    </tr>
                    <tr>
                     <td colspan="2" align="center" class="pt-4"><a href="<?= base_url('Shipping')?>" style="background: #17304E; font-size:20px; border-radius:10px;" class="btn btn-secondary">PROSES PEMBAYARAN</a>
                     </td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <!-- /.card-body -->
           </div>
         <a href="<?= base_url('Cart/clear')?>" style="background: transparent; color: grey; border:none;" class="mb-3 text-end"><i class="fas fa-trash"></i>&emsp;Kosongkan Keranjang</a>
         </div>
       </div>
       <!-- /.card -->
       
     </main>

   </div>
 <?php } ?>
</div>
</main>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
  $('document').ready(function() {
    var jumlah_pembelian = 1;
    
    $("#qty").on('change', function() {
      jumlah_pembelian = $("#qty").val();
      var totalsub = (jumlah_pembelian*subtotal);
      console.log(totalsub);
      $("#totalsub").html(totalsub);

    });
  });
</script>
<?= $this->endSection(); ?>