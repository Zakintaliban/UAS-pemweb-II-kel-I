<!DOCTYPE html>
<html>

<head>
  <title>Print Ijazah</title>
  <style>
    @media print {
      @page {
        size: Legal landscape;
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
      <p style="text-align: center;"><strong>No. Seri : <?= $ijazah->Nomor_Seri; ?></strong></p>
    </div>
    <div>
      <p style="text-align: center;"><strong>No. Ijazah : <?= $ijazah->Nomor_Ijazah; ?></strong></p>
    </div>
  </div>

  <br>
  <br>

  <h1 style="text-align: center;">IJAZAH</h1>

  <br>

  <div style="justify-content: space-between; justify-items: center; display: flex; margin-left: 18rem; margin-right: 30rem; line-height: 50%;">
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
      <p style="margin-left: 0.5rem">
        <i>Berdasarkan Keputusan BAN PT No.321</i>
      </p>
    </div>
  </div>

  <div style="margin-left: 8rem; margin-right: 8rem; text-align: justify;">
    <p>Ijazah ini diberikan Surat Keputusan Direktur Politeknik Merdeka Nomor : <?= $ijazah->Nomor_SK; ?> Tahun <?= date('Y') ?> setelah yang
      bersangkutan memenuhi semua persyaratan yang telah ditentukan dan kepadanya dilimpahkan segala wewenang dan hak yang
      berhubungan dengan Ijazah yang dimilikinya serta berhak menggunakan Gelar Akademik <strong>Ahli Madya Komputer (<?= $ijazah->Gelar_Akademik; ?>).</strong></p>
  </div>

  <br>


  <p id="originalDate" style="display: none;">Jakarta, <?= $ijazah->Tanggal_Pengesahan ?></p>

  <div style="justify-content: space-between; justify-items: center; display: flex; margin-right: 18rem; margin-left: 18rem;">
    <div style="text-align: center;">
      <p style="margin-top: 2rem;">WAKIL DIREKTUR <?= $ijazah->Wakil_Direktur; ?></p>
      <p style="margin-bottom: 8rem;">POLITEKNIK MERDEKA</p>
      <p style="font-family: 'Calibri', sans-serif; font-size: 11pt;"><?= $wakil_direktur->Nama ?></p>
      <p style="font-family: 'Calibri', sans-serif; font-size: 11pt;"><?= $wakil_direktur->NIP ?></p>
    </div>
    <div style="text-align: center;">
      <p id="formattedDate" style="line-height: 40%; font-family: 'Bookman Old Style', sans-serif; font-size: 11pt;"></p>
      <p>DIREKTUR</p>
      <p style="margin-bottom: 8rem;">POLITEKNIK MERDEKA</p>
      <p style="font-family: 'Calibri', sans-serif; font-size: 11pt;"><?= $direktur->Nama ?></p>
      <p style="font-family: 'Calibri', sans-serif; font-size: 11pt;"><?= $direktur->NIP ?></p>
    </div>
  </div>

  <script>
    function formatDate(inputDate) {
      var parts = inputDate.split(", ");
      var city = parts[0];
      var datePart = parts[1];

      var dateParts = datePart.split("-");
      var year = dateParts[0];
      var month = parseInt(dateParts[1]);
      var day = parseInt(dateParts[2]);

      var monthNames = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
      ];

      var formattedDate = city + ", " + day + " " + monthNames[month - 1] + " " + year;
      return formattedDate;
    }

    var originalDateText = document.getElementById("originalDate").textContent;

    var formattedDate = formatDate(originalDateText);

    document.getElementById("formattedDate").textContent = formattedDate;
  </script>

<script>
	window.onload = function() {
		window.print();
		onafterprint = function () {
                window.location.href = "javascript:history.back()";
        }
	};
</script>
</body>

</html>