<div style="border:1px solid #ddd; padding:15px; width:250px; border-radius:10px; display:inline-block; margin:10px;">

    <!-- Cover (Icon) -->
    <div style="font-size:40px; text-align:center;">
        📘
    </div>

    <!-- Judul -->
    <h3 style="margin:5px 0;">{{ $buku->judul }}</h3>

    <!-- Pengarang -->
    <p><b>Pengarang:</b> {{ $buku->pengarang }}</p>

    <!-- Harga -->
    <p><b>Harga:</b> Rp {{ number_format($buku->harga, 0, ',', '.') }}</p>

    <!-- Stok -->
    <p><b>Stok:</b> {{ $buku->stok }}</p>

    <!-- Kategori Badge -->
    <span style="background: #0d6efd; color:white; padding:3px 8px; border-radius:5px;">
        {{ $buku->kategori }}
    </span>

    <br><br>

    <!-- Status Ketersediaan -->
    @if($buku->stok > 0)
        <span style="background:green; color:white; padding:5px;">Tersedia</span>
    @else
        <span style="background:red; color:white; padding:5px;">Habis</span>
    @endif

    <br><br>

    <!-- Actions -->
    @if($showActions)
        <a href="/buku/{{ $buku->id }}" style="margin-right:5px;">Detail</a>
        <a href="/buku/{{ $buku->id }}/edit">Edit</a>
    @endif

</div>