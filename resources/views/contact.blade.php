<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/blog">Blog</a>
    <a href="/about">About</a>
    <a href="/contact">Contact</a>
    <h1>Halaman home</h1>
    <p>Ini adalah halaman home</p>


    <header>
        <h1>Hubungi kami</h1>
        <p>
            Silahkan isi formulir dibawah ini untuk menghubungi kami
        </p>
    </header>

    <main>
        <form action="/contact" method="POST">
            <label for="nama">Ardian</label><br />
            <input type="text" id="nama" name="nama" required /> <br/><br/>
            
            <label for="email">ciptoardian@gmail.com</label><br/>
            <input type="text" id="email" name="email" required /> <br/><br/>

            <button type="submit">kirim</button>
        
        </form>
    </main>

    <footer>
        <p>&copy; 2025</p>
    </footer>

</body>
</html>