<!DOCTYPE html>
<html>
<head>
    <title>Print Transkrip Nilai</title>
    <style>
        @media print {
          @page {
            size: legal landscape;
            margin: 1cm; 
          }
          
          body {
            font-family: 'Cambria', serif;
            font-size: 11pt;
            margin: 0;
            padding: 0;
          }

          h1 {
            font-size: 16pt;
          }
        }
    </style>
</head>
<body>
    <h2>Transkrip Nilai Details</h2>
    <p><strong>Taruna:</strong> <?php echo $transkrip_nilai->Taruna; ?></p>
    <p><strong>Ijazah:</strong> <?php echo $transkrip_nilai->Ijazah; ?></p>
    <p><strong>Program Studi:</strong> <?php echo $transkrip_nilai->Program_Studi; ?></p>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
