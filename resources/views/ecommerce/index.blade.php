<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
</head>

<body>
    <div style="max-width: 600px; margin: 40px auto; background-color: #ffffff; border: 1px solid #f3c2d3; border-left: 6px solid #ec4899; padding: 24px; border-radius: 8px; font-family: 'Segoe UI', sans-serif; color: #333;">
        <h1 style="color: #be185d; font-size: 24px; margin-bottom: 16px;">Halo Nasywa, Wake Up 😑</h1>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 12px;">Anda telah menerima pesan baru dari pelanggan melalui website e-commerce Anda.</p>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 12px;"><strong>Detail Pesan </strong></p>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 8px;"><strong>Nama :</strong> {{ $name }}</p>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 8px;"><strong>Email :</strong> {{ $email }}</p>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 12px;"><strong>Pesan :</strong>
        </p>
        <div style="border: 1px solid #f472b6; padding: 15px; border-radius: 5px;">
            {{ $isi }}
        </div>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 12px;">
            <strong>Gambar Pesanan :</strong><br>
            @if(!empty($images) && isset($images[0]))
            <img src="{{ $images[0] }}" alt="Gambar Pesanan"
                style="max-width: 100%; height: auto; display: block; margin-top: 10px;">
            @else
            <em>Tidak ada gambar yang diunggah.</em>
            @endif
        </p>



        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 12px;"><strong>Jumlah Pesanan:</strong> {{ $quantity }}</p>
        <p style="font-size: 16px; line-height: 1.6; margin-bottom: 12px;">Silakan segera merespons untuk menjaga kepuasan pelanggan Anda.</p>
        <div style="font-size: 14px; color: #777; margin-top: 24px; border-top: 1px solid #eee; padding-top: 12px;">
            Email ini dikirim secara otomatis dari sistem e-commerce Anda.
        </div>
    </div>
</body>

</html>