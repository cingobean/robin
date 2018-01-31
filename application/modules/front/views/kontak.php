<?php
$this->load->view('template/front/topfront');
?>
<?php
$this->load->view('template/front/navigasi');
?>

<!-- Container (Contact Section) -->
<div id="contact" class="container xcon">
  <h3 class="text-center">KRITIK DAN SARAN</h3>
  <br/>
  <p class="text-center"><em>Jika anda memiliki Pertanyaan, Pendapat, Kritik atau Saran, Silahkan isi form dibawah dan kami akan menjawab secepatnya.</em></p>
  <br/>
  <br/>
  <div class="row">
    <div class="col-md-4">
      <p>SMK NEGERI 2 KABUPATEN TANGERANG</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Jl. Raya Mauk KM. 12 Ds. Pisangan Jaya Kec. Sepatan Kab. Tangerang</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: (021) 59370179 </p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: smkn2kabtangerang@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$this->load->view('template/front/footer');
?>
<?php
$this->load->view('template/front/js');
?>
<?php
$this->load->view('template/front/foot');
?>



