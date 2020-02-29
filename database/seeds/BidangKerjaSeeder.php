<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidangKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidang_kerja')->insert(
            //1
            [
                'name' => "Penalaran, Akademik, Dan Keilmuan",
                'abbr' => "PAK",
                'description' => "Bidang yang memfasilitasi dan membantu mahasiswa dalam berbagai kegiaatan akademik dan keilmuan seperti perlombaan kedokteran, pembentukan kelompok belajar, dan lain sebagainya",
                'chief_name' => "Liani Amelia Chandra",
                'chief_img_path' => "\image\bidang-kerja\bidang1-a.jpg",
                'vice_name' => "Dhiya' Fathiyyah Zen",
                'vice_img_path' => "\image\bidang-kerja\bidang1-b.jpg"
            ]
        );
        DB::table('bidang_kerja')->insert(
            [
                'name' => "Advokasi, Studi Gerakan. Dan Kajian Kebijakan",
                'abbr' => "ASK",
                'description' => "Bidang yang beregerak untuk mewadahi dan menyalurkan selurunh aspirasi Mahasiswa Program Studi Kedokteran, melakukan aksi strategis, serta melakukan pencerdasan. Kepada selruruh Mahasiswa Program Studi Kedokteran terhadap isu - isu terkini melalui pembuatan kajian",
                'chief_name' => "Faisal Muhammad Rifqi Aqil",
                'chief_img_path' => "\image\bidang-kerja\bidang2-a.jpeg",
                'vice_name' => "Nadya Neyza Shalshabilla",
                'vice_img_path' => "\image\bidang-kerja\bidang2-b.jpeg"
            ]
        );
        DB::table('bidang_kerja')->insert(
            [
                'name' => "Pengembangan Sumber Daya Mahasiswa",
                'abbr' => "PSDM",
                'description' => "Bidang yang berwenang untuk meningkatkan kualitas Mahasiswa Program Studi Pendidikan Dokter GKUB berbasis nilai religius, moralis, intelek, profesional. Berwenang untuk membantu kerangka, alur, sarana, dan kurikulum pengkaderan bagi HMPD dan Mahasiswa Program Studi Pendidikan Dokter FKUB",
                'chief_name' => "Almaz Rachmanda Rachmanto",
                'chief_img_path' => "\image\bidang-kerja\bidang3-a.jpg",
                'vice_name' => "Azizah Rizkynia Cahyaningati",
                'vice_img_path' => "\image\bidang-kerja\bidang3-b.jpg",
                'staff_name' => "M. Mukhlas Akhsan",
                'staff_img_path' => "\image\bidang-kerja\bidang3-c.jpg"
            ]
        );
        DB::table('bidang_kerja')->insert(
            [
                'name' => "Teknologi Informasi dan Komunikasi",
                'abbr' => "TIK",
                'description' => "Bidang yang berwenang untuk menjalankan manajemene Teknologi, Informasi, dan Komunikasi HMPD FKUB agar tercapainya branding HMPD FKUB yang baik",
                'chief_name' => "Chaerani Bahar",
                'chief_img_path' => "\image\bidang-kerja\bidang4-a.jpg",
                'vice_name' => "Dea Sabrina Mahirasani",
                'vice_img_path' => "\image\bidang-kerja\bidang4-b.jpg",
                'staff_name' => "Nabila Ramadhani",
                'staff_img_path' => "\image\bidang-kerja\bidang4-c.jpg"
            ]
        );
        DB::table('bidang_kerja')->insert(
            [
                'name' => "Pengembangan Masyarakat",
                'abbr' => "PENGMAS",
                'description' => "Bidang yang berwenang untuk melakukan fungsi pengembangan dan pemberdayaan masyarakat. Berwenang untuk meningkatkan kepedulian sosial mahasiswa Program Studi Pendidikan Dokter FKUB terhadap kondisi nyata masyarakat",
                'chief_name' => "Muhammad Rayyan Rakha Avianto",
                'chief_img_path' => "\image\bidang-kerja\bidang5-a.jpeg",
                'vice_name' => "Nikita Rizki Ayeza Lasandara",
                'vice_img_path' => "\image\bidang-kerja\bidang5-b.jpg",
                'staff_name' => "Chitra Octaviani Hadi Putri",
                'staff_img_path' => "\image\bidang-kerja\bidang5-c.jpg"
            ]
        );
        DB::table('bidang_kerja')->insert(
            [
                'name' => "Kesejahteraan Mahasiswa, Dana Usaha, dan Relasi Eksternal",
                'abbr' => "KDR",
                'description' => "Bidang yang berwenang untuk menyelenggarakan upaya penggalangan dana bagi keberlangsungan HMPD FKUP. Berwenang untuk meningkatkan kesejahteraan mahasiswa Program Studi Pendidikan Dokter FKUB",
                'chief_name' => "Shafira Ayu Purnama",
                'chief_img_path' => "\image\bidang-kerja\bidang6-a.jpg",
                'vice_name' => "Aura Madarina",
                'vice_img_path' => "\image\bidang-kerja\bidang6-b.jpg"
            ]
        );
    }
}
