<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        console.log(csrfToken);
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PEMROGRAMAN WEB LANJUT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       
        .student-info {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">UTS PEMROGRAMAN WEB LANJUT</h1>
        <h2 class="mt-5">NAMA ANGGOTA</h2>
        
        
        <div class="row">
            <div class="col-md-6">
                <div class="student-info">
                    <h2>Informasi Diri</h2>
                    <p><strong>Nama Lengkap:</strong> VIRGANDA RIMBA ASMARA</p>
                    <p><strong>NIM:</strong> 22104410010</p>
                    <p><strong>Jurusan:</strong> TEKNIK INFORMATIKA</p>
                    <p><strong>Semester:</strong> 4</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="student-info">
                    <h2>Informasi Diri</h2>
                    <p><strong>Nama Lengkap:</strong> ZOULVIA HANEST KHINANTI</p>
                    <p><strong>NIM:</strong> 22104410011</p>
                    <p><strong>Jurusan:</strong> TEKNIK INFORMATIKA</p>
                    <p><strong>Semester:</strong> 4</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="student-info">
                    <h2>Informasi Diri</h2>
                    <p><strong>Nama Lengkap:</strong> RIZKY YUNIZ TERESYA</p>
                    <p><strong>NIM:</strong> 22104410013</p>
                    <p><strong>Jurusan:</strong> TEKNIK INFORMATIKA</p>
                    <p><strong>Semester:</strong> 4</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="student-info">
                    <h2>Informasi Diri</h2>
                    <p><strong>Nama Lengkap:</strong> KHARIRATUL ISQTILALIYA</p>
                    <p><strong>NIM:</strong> 22104410026</p>
                    <p><strong>Jurusan:</strong> TEKNIK INFORMATIKA</p>
                    <p><strong>Semester:</strong> 4</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="student-info">
                    <h2>Informasi Diri</h2>
                    <p><strong>Nama Lengkap:</strong>BINTANG LAILATUL MUKHAROMAH</p>
                    <p><strong>NIM:</strong> 22104410062</p>
                    <p><strong>Jurusan:</strong> TEKNIK INFORMATIKA</p>
                    <p><strong>Semester:</strong> 4</p>
                </div>
            </div>
        </div>

      
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var message = "{{ Session::get('kunci') }}";
            if (message && message.length > 0) {
                alert(message);
            }
        });
    </script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
