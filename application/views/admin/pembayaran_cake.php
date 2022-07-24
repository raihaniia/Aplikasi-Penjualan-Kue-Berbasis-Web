<div class="main-content">
    <section class="section">
    <div>
    
    </div>
      <div class="btn btn-sm btn-success">
        <?php 
$grand_total =0;
if ($keranjang = $this->cart->contents()){
  foreach ($keranjang as $item)

  {
    $grand_total = $grand_total + $item['subtotal'];

  }

  echo "Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
}
         ?>
      </div>
    </div>
    <div class="col-md-2"></div>
    
  </div>
</div>