<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // mengarahkan ke file index students yang berisi seluruh record tabel students
    public function index()
    {
        $mhs = Student::orderBy('id', 'desc')->paginate(5);
        return view('students.index', compact('mhs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    // membuka view create untuk input data baru
    public function tambah()
    {
        return view('students.create');
    }
    // menyimpan record baru ke tabel students dari request dari view create
    public function simpan(Request $request)
    {
        $request->validate([
            'nim' => 'required|max:8',
            'nama' => 'required|max:30',
            'prodi' => 'required|max:30',
        ]);
        // lakukan create/insert data ke tabel database
        $mhs = Student::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
        ]);
        // bisa juga langsung menggunakan request all untuk create data
        // Student::create($request->all());
        return redirect('/students')->with('success', 'Students created successfully.');
    }
    // menampilkan salah satu record berdasarkan $id ke view show
    public function tampil($id)
    {
        $mhs = Student::findOrFail($id);
        return view('students.show', compact('mhs'));
    }
    // membuka view edit untuk edit data dari record terpilih berdasarkan $id
    public function ubah($id)
    {
        $mhs = Student::findOrFail($id);
        return view('students.edit', compact('mhs'));
    }
    // perbarui/update record sesuai perubahan data dari request view edit
    public function perbarui(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|max:8',
            'nama' => 'required|max:30',
            'prodi' => 'required|max:30',
        ]);
        // Cari data sesuai parameter $id yg dikirim form
        $mhs = Student::findOrFail($id);
        // lakukan update data tabel dari seluruh request
        $mhs->update($request->all());
        return redirect('/students')->with('success', 'Students updated successfully.');
    }
    // menghapus data dari record terpilih berdasarkan $id
    public function hapus($id)
    {
            $mhs = Student::where('id', $id)->delete();
            return redirect('/students')->with('success', 'Students deleted successfully.');
    }
}
