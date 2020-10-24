<?php
function tanggal_indo($tanggal, $cetak_hari = false, $just_hari = false)
{
    $hari = array(
        1 =>    'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    );

    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = preg_split("[\D]", $tanggal);
    $tgl_indo = $split[0] . ' ' . $bulan[(int) $split[1]] . ' ' . $split[2];

    if ($cetak_hari) {
        $tanggal_baru = str_replace('/', '-', $tanggal);
        $num = date('N', strtotime($tanggal_baru));
        if ($just_hari) {
            return $hari[$num];
        } else {
            return $hari[$num] . ', ' . $tgl_indo;
        }
    }
    return $tgl_indo;
}

function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}
