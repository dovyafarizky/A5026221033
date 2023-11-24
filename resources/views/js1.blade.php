<html>

<head>
    <title>Js1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script>
        function changeText() {
            var span = document.getElementById("output");
            var textBox = document.getElementById("textbox");
            textbox.style.color = "black";
            //<input type="text" style="color:red;">
            //span.innerHTML="Sistem Informasi" ;
            span.innerHTML = textBox.value; //mengganti isi
            span.className = "text-primary"; //mengganti class CSS
        }

    </script>
    <!-- library sendiri -->
    <script src="myfunction.js"></script>

</head>

<body>
    <script>
        function showAlert() {
            alert("Selamat Anda Memenangkan Undian 100 Jt !");
        }
    </script>
    <button class="btn btn-danger" onclick="showAlert();">Klik Disini</button>
    <br>
    <button onclick="changeText();" class="btn btn-success">Click me!</button>
    <span id="output">replace me</span>
    <input id="textbox" type="text" class="form-control" />
    <br>
    <div class="form-group">
        <label for="bil1">Bilangan 1 :</label>
        <input id="bil1" type="number" class="form-control" placeholder="Masukkan bilangan 1" />
    </div>
    <div class="form-group">
        <label for="bil2">Bilangan 2 :</label>
        <input id="bil2" type="number" class="form-control" placeholder="Masukkan bilangan 2" />
    </div>
    <div class="btn-group">
        <button onclick="tambah();" class="btn btn-success">Penjulahan</button>
        <button onclick="kali();" class="btn btn-warning">Perkalian</button>
    </div>
    <h2>Hasil Operasi = <div id="hasil"></div></h2>

</body>

</html>