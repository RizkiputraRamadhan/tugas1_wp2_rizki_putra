<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentsTableSeeder extends Seeder
{
    public function run()
    {
        $mhs = new Student();
        $mhs->nim = '12220010';
        $mhs->nama = 'Sukarno';
        $mhs->prodi = 'Sistem Informasi';
        $mhs->save();

        $mhs = new Student();
        $mhs->nim = '12220011';
        $mhs->nama = 'Suharto';
        $mhs->prodi = 'Sistem Informasi';
        $mhs->save();

        $mhs = new Student();
        $mhs->nim = '13220101';
        $mhs->nama = 'BJ Habibie';
        $mhs->prodi = 'Teknologi Komputer';
        $mhs->save();

        $mhs = new Student();
        $mhs->nim = '13220102';
        $mhs->nama = 'Megawati';
        $mhs->prodi = 'Teknologi Komputer';
        $mhs->save();

        $mhs = new Student();
        $mhs->nim = '11220001';
        $mhs->nama = 'Susilo Bambang Yudhonono';
        $mhs->prodi = 'Sistem Informasi Akuntansi';
        $mhs->save();
        
        $mhs = new Student();
        $mhs->nim = '11220002';
        $mhs->nama = 'Joko Widodo';
        $mhs->prodi = 'Sistem Informasi Akuntansi';
        $mhs->save();
    }
}
