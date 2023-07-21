<!DOCTYPE html>
<html>

<head>
  <title>Print Ijazah</title>
  <style>
    @media print {
      @page {
        size: portrait;
        margin: 0;
      }

      body {
        font-family: 'Bookman Old Style', serif;
        font-size: 11pt;
        margin: 0;
        padding: 0;
      }

      h1 {
        font-size: 26pt;
      }

      h2 {
        font-family: 'Calibri', sans-serif;
        font-size: 11pt;
      }

      .date {
        font-family: 'Bookman Old Style', serif;
        font-size: 11pt;
      }
    }
  </style>
</head>

<body>

  <div style="justify-content: space-between; justify-items: center; display: flex; margin-right: 4rem; margin-left: 4rem;">
    <div>
      <center>
        <p><strong>No Seri : <?= $ijazah->Nomor_Seri; ?></strong></p>
      </center>
    </div>
    <div>
      <center>
        <p><strong>No Ijazah : <?= $ijazah->Nomor_Ijazah; ?></strong></p>
      </center>
    </div>
  </div>

  <br>

  <center>
    <h1>IJAZAH</h1>
  </center>

  <br>
  <br>

  <div style="justify-content: space-between; justify-items: center; display: flex; margin-left: 6rem; margin-right: 8rem; line-height: 50%;">
    <div>
      <p>Memberikan Ijazah Kepada </p>
      <p>Tempat & Tanggal Lahir </p>
      <p>Nomor Taruna </p>
      <p>Program Pendidikan </p>
      <p>Program Studi </p>
      <p>Status </p>
    </div>
    <div>
      <p>: <strong><?= $taruna->Nama; ?></strong></p>
      <p>: <?= $kota->Nama . ', ' . convert_date($taruna->Tanggal_Lahir); ?></p>
      <p>: <?= $ijazah->Taruna; ?></p>
      <p>: <?= $program_studi->Program_Pendidikan; ?></p>
      <p>: <?= $program_studi->Nama; ?></p>
      <p>: TERAKREDITASI "<strong><?= $program_studi->Akreditasi; ?></strong>"</p>
      <p>
        <i>Berdasarkan Keputusan BAN PT No.321</i>
      </p>
    </div>
  </div>

  <div style="margin: 4rem; text-align: justify;">
    <p>Ijazah ini diberikan Surat Keputusan Direktur Politeknik Merdeka Nomor : <?= $ijazah->Nomor_SK; ?> Tahun <?= date('Y') ?> setelah yang
      bersangkutan memenuhi semua persyaratan yang telah ditentukan dan kepadanya dilimpahkan segala wewenang dan hak yang
      berhubungan dengan Ijazah yang dimilikinya serta berhak menggunakan Gelar Akademik <strong>Ahli Madya Komputer (<?= $ijazah->Gelar_Akademik; ?>).</strong></p>
  </div>

  <br>
  <br>
  <br>

  <div style="justify-content: space-between; justify-items: center; display: flex; margin-right: 6rem; margin-left: 6rem;">
    <div>
      <center>
        <p>WAKIL DIREKTUR <?= $ijazah->Wakil_Direktur; ?></p>
        <p style="margin-bottom: 10rem;">Politeknik Merdeka</p>
        <p><?= $wakil_direktur->Nama ?></p>
        <p><?= $wakil_direktur->NIP ?></p>
      </center>
    </div>
    <div>
      <center>
        <p>Jakarta, <?= convert_date(date('Y-m-d'))?></p>
        <p>DIREKTUR</p>
        <p style="margin-bottom: 8rem;">Politeknik Merdeka</p>
        <p><?= $direktur->Nama ?></p>
        <p><?= $direktur->NIP ?></p>
      </center>
    </div>
  </div>

  <script>
    window.onload = function() {
      window.print();
    };
  </script>
</body>

</html>
