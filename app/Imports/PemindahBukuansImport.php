<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\PemindahBukuan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PemindahBukuansImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $tanggal_masuk = Date::excelToDateTimeObject($row['tanggal_masuk']);

            if (empty($row['tanggal_bukti_pbk'])) {
                $hari_ke = now()->diffInDays($tanggal_masuk);
            } else {
                $hari_ke = -1;
            }

            if (empty($row['tanggal_lap'])) {
                $tanggal_lap = null;
            } else {
                $tanggal_lap = Date::excelToDateTimeObject($row['tanggal_lap']);
            }

            if (empty($row['tanggal_bukti_pbk'])) {
                $tanggal_bukti_pbk = null;
            } else {
                $tanggal_bukti_pbk = Date::excelToDateTimeObject($row['tanggal_bukti_pbk']);
            }

            PemindahBukuan::updateOrCreate([
                'nomor' => $row['no'],
            ], [
                'nama' => $row['nama'],
                'npwp' => $row['npwp'],
                'tanggal_masuk' => $tanggal_masuk,
                'petugas' => $row['petugas'],
                'jatuh_tempo' => Carbon::parse($tanggal_masuk)->addDays(30),
                'hari_ke' => $hari_ke,
                'nomor_lap' => $row['nomor_lap'],
                'tanggal_lap' => $tanggal_lap,
                'nomor_bukti_pbk' => $row['nomor_bukti_pbk'],
                'tanggal_bukti_pbk' => $tanggal_bukti_pbk,
            ]);
        }
    }

    // /**
    //  * @param array $row
    //  *
    //  * @return \Illuminate\Database\Eloquent\Model|null
    //  */
    // public function model(array $row)
    // {
    //     $tanggal_masuk = Date::excelToDateTimeObject($row['tanggal_masuk']);

    //     if (empty($row['tanggal_bukti_pbk'])) {
    //         $row['hari_ke'] = now()->diffInDays($tanggal_masuk);
    //     } else {
    //         $row['hari_ke'] = -1;
    //     }

    //     if (empty($row['tanggal_lap'])) {
    //         $row['tanggal_lap'] = null;
    //     } else {
    //         $row['tanggal_lap'] = Date::excelToDateTimeObject($row['tanggal_lap']);
    //     }

    //     if (empty($row['tanggal_bukti_pbk'])) {
    //         $row['tanggal_bukti_pbk'] = null;
    //     } else {
    //         $row['tanggal_bukti_pbk'] = Date::excelToDateTimeObject($row['tanggal_bukti_pbk']);
    //     }

    //     return new PemindahBukuan([
    //         'nomor' => $row['no'],
    //         'nama' => $row['nama'],
    //         'npwp' => $row['npwp'],
    //         'tanggal_masuk' => $tanggal_masuk,
    //         'petugas' => $row['petugas'],
    //         'jatuh_tempo' => Carbon::parse($tanggal_masuk)->addDays(30),
    //         'hari_ke' => $row['hari_ke'],
    //         'nomor_lap' => $row['nomor_lap'],
    //         'tanggal_lap' => $row['tanggal_lap'],
    //         'nomor_bukti_pbk' => $row['nomor_bukti_pbk'],
    //         'tanggal_bukti_pbk' => $row['tanggal_bukti_pbk'],
    //     ]);
    // }
}
