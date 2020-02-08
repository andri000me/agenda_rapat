<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    
    body{
      font-family: Times New Roman;
    }
    table, th, td{
      border: 1px solid black;
    }

    table{
      width: 100%;
      margin-right: auto;
      margin-left: auto;
    }
  </style>

</head>
<body>
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default card-view">
        <div class="panel-wrapper collapse in">
          <div class="panel-body">
            <center>
              <img src="<?= base_url('img/ekaputra.png') ?>" width="200px" style="margin-bottom: -40px" >
              <h2>Rekap Data Agenda Rapat</h2>
            </center>
            <h4 class="tgl" style="text-align: left!important"><?= tanggal($from) ?> - <?= tanggal($until) ?></h4>
            <div class="table-wrap">
              <div class="table-responsive">
                <table id="datable_1" class="table table-hover display  pb-30"  >
                  <thead>
    
                    <th data-field="no" 
                      data-sortable="true"> No </th>
                      <th data-field="tema" 
                      data-sortable="true"> Tema </th>
                      <th data-field="tanggal" 
                      data-sortable="true"> Tanggal </th>
                      <th data-field="jam" 
                    data-sortable="true"> Jam </th>
                    <th data-field="jam" 
                    data-sortable="true"> Hasil Rapat </th>
                                             
                  </thead>

                  <tbody>
    
                  <?php $no = 1; foreach($rapat as $d): ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d->tema; ?></td>
                    <td><?= $d->tanggal; ?></td>
                    <td><?= $d->jam; ?></td>
                    <td><?= $d->hasil_rapat; ?></td>
                  </tr>
                  <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
          </div>

          <p style="text-align: right;margin-right: 50px">
           Pekanbaru, <?= tanggal(date('Y-m-d')) ?><br><br><br><br><?= $this->session->userdata('nama') ?><br>NIP. <?= $this->session->userdata('nip') ?>
          </p>
        </div>
      </div>
    </div>
  </div>
 

<script>
  window.print();
</script>
</body>
</html>