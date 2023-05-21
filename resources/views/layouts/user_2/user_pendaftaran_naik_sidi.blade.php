@include('layouts.user_2.style')
@include('layouts.user_2.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Naik Sidi HKBP Palmarum</title>
    <link rel="stylesheet" href="../styles/styles.css">
    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    
</head>
<body>
    <header class="hero">
       <H1><span>Palmarum</span></H1>
        <p>Pendaftaran Naik Sidi HKBP Palmarum</p>
        
        <div class="mouse">
            <ion-icon name="arrow-down-circle-outline"></ion-icon>
        </div>
    </header>
    <main>
    
        <h1>Sidi HKBP Palmarum</h1>

        <div class="card">
            <div class="image-container">
              <img class="foto_sidi" src=".{{ asset('image/sidi.JPG') }}" alt="gambar">
            </div>
            <div class="text-container">
              <h3>Judul</h3>
              <p>ext commonly used to demonstrate the visual form of a 
                    document or a typeface without relying on meaningful content. 
                    Lorem ipsum may be used as a placeholder before final copy is 
                    available. It is also used to temporarily replace text in a
                     process called greeking, which allows designers to consider</p>
            </div>
          </div>
          
          <div class="card_1">
            <h1 style="align-items: center; text-align: center; padding-right: 200px;"> <span style="display:inline-block; border-bottom: 1px solid black; width: 50px; margin-right: 10px; margin-bottom: 9px;">
            </span>Pendaftaran Sidi HKBP Palmarum<strong><span style="display:inline-block; border-bottom: 1px solid black; width: 50px; margin-left: 10px; margin-bottom: 9px;"></span></strong>
        </h1>

     
            <form>
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap Anda" />
              </div>
              <div class="form-group">
                <label for="name">Nama Ayah</label>
                <input type="text" id="nama Ayah" name="name" placeholder="Masukkan Nama Ayah" />
              </div>     
              <div class="form-group">
                <label for="name">Nama Ibu</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Nama Ibu A" />
              </div>
              <div class="form-group">
                <label for="name">Alamat</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Alamat Anda" />
              </div>
              <div class="form-group">
                <label for="name">Wijk</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Wijk" />
              </div>
              <div class="form-group">
                <label for="name">Email</label>
                <input type="text" id="email" name="name" placeholder="Masukkan Email Anda" />
              </div>
              <div class="form-group">
                <label for="name">No Handphone</label>
                <input type="text" id="name" name="name" placeholder="Masukkan NomorHandphone Anda" />
              </div>
              <!-- upload foto -->
              <div class="form-group foto_1">
                <label for="foto">Upload Foto</label>
                <input type="file" id="foto" name="foto">
                <span>Drag and drop file here or click to upload <br> Ukuran foto harus .png</span>
              </div>
              <!-- upload foto -->
              
              <div style="text-align: right; margin-top: 40px;">
                 <input type="submit" value="Submit"/>
              </div>
             
            </form>
          </div>
          
          
 
    </main>
    <footer>
       <div class="footer_1">
        <img src="{{ asset('image/logo_putih.png') }}" alt="Foto">
            <div class="teks">
            <h1>
                PALMARUM
            </h1>
            <P>Stadion Tarutung,        <br>
                Hutatoruan VI,          <br>
                Kec. Tarutung,          <br>
                Kabupaten Tapanuli      <br>
                Utara, Sumatera Utara   <br>
                22411</P> 
            </div>
            
       </div>
	
	</footer>
    <script src="{{ asset('js/style.js') }}"></script>
   
</body>
</html>