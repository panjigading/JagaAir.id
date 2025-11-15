<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembaruan Status Laporan</title>
    <style>
        body { font-family: sans-serif; background-color: #f7f7f7; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 20px 40px; border-top: 4px solid #3b82f6; }
        h1 { color: #1f2937; font-size: 24px; margin-bottom: 20px; }
        p { color: #4b5563; line-height: 1.5; margin-bottom: 15px; }
        .status { padding: 10px; border-radius: 4px; font-weight: bold; text-align: center; display: inline-block; margin-top: 10px; }
        .status-Pending { background-color: #fcd34d; color: #92400e; }
        .status-Processing { background-color: #93c5fd; color: #1e40af; }
        .status-Completed { background-color: #a7f3d0; color: #065f46; }
        .status-Rejected { background-color: #fecaca; color: #991b1b; }
        .details-box { border: 1px solid #e5e7eb; padding: 15px; border-radius: 4px; background-color: #f9fafb; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pembaruan Status Laporan #{{ $laporan->id }}</h1>
        
        <p>Yth. **{{ $laporan->pengguna->name ?? 'Pelapor' }}**, </p>
        
        <p>Kami ingin memberitahukan bahwa status laporan Anda mengenai **{{ $laporan->kategori }}** di **{{ $laporan->kecamatan }}** telah diperbarui.</p>
        
        <div class="details-box">
            <p style="margin-bottom: 5px;">**Status Terbaru:**</p>
            <div class="status status-{{ $latestStatus->status }}">
                {{ $latestStatus->status }}
            </div>
            
            <p style="margin-top: 15px; margin-bottom: 5px;">**Tanggapan dari Admin:**</p>
            <p style="white-space: pre-wrap; margin: 0;">{{ $latestStatus->tanggapan }}</p>
        </div>
        
        <p style="margin-top: 20px;">Anda dapat melihat detail laporan lengkap melalui link di bawah ini (jika tersedia):</p>
        <p><a href="" style="color: #3b82f6;">Lihat Detail Laporan</a></p>
        
        <p>Terima kasih atas laporan Anda.</p>
        <p>Hormat kami,<br>Tim Pelayanan Publik</p>
    </div>
</body>
</html>