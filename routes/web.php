<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WaliController;

/*
|--------------------------------------------------------------------------
| Web Routes

|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// login
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('proses_login',[AuthController::class,'proses_login']);
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('registrasi',[AuthController::class,'registrasi'])->name('registrasi');

// halaman user
Route::get('rpl',[KelasController::class,'rpl']);
Route::get('/galeriguru',[KelasController::class,'galeriguru']);
Route::get('murid',[KelasController::class,'murid']);
Route::get('/jadwal&kegiatan',[KelasController::class,'jadwal']);

// adaptif
Route::get('pelajaran_adaptif/{id}',[KelasController::class,'pelajaran_adaptif']);

// produktif
Route::get('pelajaran_produktif/{id}',[KelasController::class,'pelajaran_produktif']);

// jadwal_pelajaran
Route::get('jadwal_pelajaran/{id}',[KelasController::class,'jadwal_pelajaran']);

Route::post('simpanpesan',[KelasController::class,'simpanpesan'])->name('simpanpesan');
Route::get('guru',[KelasController::class,'guru'])->name('guru');
Route::get('bayar',[KelasController::class,'bayar'])->name('bayar');
Route::get('murid',[KelasController::class,'murid'])->name('murid');
Route::get('editah',[AdminController::class,'editah'])->name('editah');

Route::group(['middleware'=> ['auth']],function(){
    Route::group(['middleware'=> ['cek_login:walikelas']], function(){
        Route::get('wali',[WaliController::class,'wali']);
        Route::get('keuangan',[WaliController::class,'keuangan']);

        Route::get('/keuangan/cetakkeuangan',[WaliController::class,'cetakkeuangan']);

        Route::get('/daftar_siswa',[WaliController::class,'daftar_siswa']);
        Route::get('/pelajaran_adaptif',[WaliController::class,'pelajaran_adaptif']);
        Route::get('/pelajaran_kejuruan',[WaliController::class,'pelajaran_kejuruan']);
        Route::get('/jadwalpelajaran',[WaliController::class,'jadwalpelajaran']);
        Route::get('/peminjaman_buku',[WaliController::class,'peminjaman_buku']);
        Route::get('/data_akun',[WaliController::class,'data_akun']);
        Route::get('/galeri_murid',[WaliController::class,'galeri_murid']);
        Route::get('/galeri_guru',[WaliController::class,'galeri_guru']);

    });

    Route::group(['middleware'=> ['cek_login:ketuamurid']], function(){

        //edit siswa
        Route::get('edit_siswa/{id}', [KelasController::class, 'edit_siswa']);
        Route::post('update_siswa/{id}', [KelasController::class, 'update_siswa']);

        // jadwal pelajaran
        Route::get('/pengeluaran',[KelasController::class,'pengeluaran']);
        Route::post('simpan_pengeluaran', [KelasController::class, 'simpan_pengeluaran']);

        Route::get('tambah_kegiatan', [KelasController::class, 'tambah_kegiatan']);
        Route::post('simpankegiatan', [KelasController::class, 'simpankegiatan']);

        Route::get('/jadwalpel',[KelasController::class,'jadwalpel']);

        Route::get('kls',[KelasController::class,'kls'])->name('kls');
        Route::get('edit',[KelasController::class,'edit']);
        Route::get('daftar',[KelasController::class,'daftar'])->name('daftar');
        Route::get('muklas',[KelasController::class,'muklas'])->name('muklas');
        Route::get('pinjam',[KelasController::class,'pinjam'])->name('pinjam');
        Route::get('kas',[KelasController::class,'kas'])->name('kas');
        Route::get('/kas/cetakkas',[KelasController::class,'cetakkas']);
        Route::get('mk', [KelasController::class, 'mk']);
        Route::get('mapke', [KelasController::class, 'mapke']);
        Route::post('make', [KelasController::class, 'make']);
        Route::get('del/{id}', [KelasController::class, 'del']);
        Route::get('ed/{id}', [KelasController::class, 'ed']);

        Route::get('masukan', [KelasController::class, 'masukan']);

        Route::get('data', [KelasController::class, 'data']);

        Route::get('hps/{id}', [KelasController::class, 'delete']);
        Route::get('pus/{id}', [KelasController::class, 'pus']);

        // aksi pelajaran adaptif
        Route::get('madit/{id}', [KelasController::class, 'madit']);
        Route::post('update_adaptif/{id}', [KelasController::class, 'update_adaptif']);
        Route::get('hapus_adaptif/{id}', [KelasController::class, 'hapus_adaptif']);

        // aksi pelajaran produktif
        Route::get('edit_kejuruan/{id}', [KelasController::class, 'edit_kejuruan']);
        Route::post('update_kejuruan/{id}', [KelasController::class, 'update_kejuruan']);
        Route::get('hapus_kejuruan/{id}', [KelasController::class, 'hapus_kejuruan']);

        // aksi jadwal
        Route::get('tambah_kegiatan', [KelasController::class, 'tambah_kegiatan']);
        Route::get('edit_jadwal/{id}', [KelasController::class, 'edit_jadwal']);
        Route::post('update_jadwal/{id}', [KelasController::class, 'update_jadwal']);
        Route::get('hapus_jadwal/{id}', [KelasController::class, 'hapus_jadwal']);

        // hapus masukan
        Route::get('hapus_masukan/{id}', [KelasController::class, 'hapus_masukan']);


        // aksi pinjam buku
        Route::get('edit_buku/{id}', [KelasController::class, 'edit_buku']);
        Route::post('/update_buku/{id}', [KelasController::class, 'update_buku']);
        Route::get('hapus_buku/{id}', [KelasController::class, 'hapus_buku']);

        Route::get('hapus/{id}', [KelasController::class, 'hapus']);
        Route::get('mapelexport', [KelasController::class, 'mapelexport'])->name('mapelexport');
        Route::get('siswaexport', [KelasController::class, 'siswaexport'])->name('siswaexport');
        Route::get('galkasexport', [KelasController::class, 'galkasexport'])->name('galkasexport');

        // edit galeri
        Route::get('eddit/{id}', [KelasController::class, 'eddit']);
        Route::post('upsiswa/{id}', [KelasController::class, 'upsiswa']);

        Route::get('editguru/{id}', [KelasController::class, 'editguru']);
        Route::post('upguru/{id}', [KelasController::class, 'upguru']);
        Route::get('hapus_galgur/{id}', [KelasController::class, 'hapus_galgur']);

        Route::get('mapell', [KelasController::class, 'mapell']);

        Route::get('galkas',[KelasController::class,'galkas']);
        Route::get('galerigur',[KelasController::class,'galgur']);

        Route::get('tambah_peminjaman', [KelasController::class, 'tambah_peminjaman']);
        Route::get('fotosiswa', [KelasController::class, 'fotosiswa']);
        Route::get('fotoguru', [KelasController::class, 'fotoguru']);
        Route::get('matapel', [KelasController::class, 'matapel']);
        Route::get('adaptiff', [KelasController::class, 'adaptif']);
        Route::get('matapell', [KelasController::class, 'matapell']);
        Route::post('simpanadaptif', [KelasController::class, 'simpanadaptif']);

        Route::post('siswaimport', [KelasController::class, 'siswaimport']);
        Route::post('mapelimport', [KelasController::class, 'mapelimport']);
        Route::post('galkasimport', [KelasController::class, 'galkasimport']);
        Route::post('simpankas',[KelasController::class,'simpankas'])->name('simpankas');
        Route::post('simpandaftar',[KelasController::class,'simpandaftar'])->name('simpandaftar');
        Route::post('simpankejuruan', [KelasController::class, 'simpankejuruan'])->name('simpankejuruan');
        Route::post('simpanbuku', [KelasController::class, 'simpanbuku'])->name('simpanbuku');
        Route::get('hapusbuku/{id}', [KelasController::class, 'hapusbuku']);
        Route::post('simpansiswa',[KelasController::class,'simpansiswa']);
        Route::post('simpanguru',[KelasController::class,'simpanguru']);
        Route::get('tambah_masukan',[KelasController::class,'tambah_masukan'])->name('simpanpesan');
        Route::post('store_pesan',[KelasController::class,'simpanpesan']);
    });
});


Route::get('delete/{id}', [AdminController::class, 'delete']);
Route::get('hap/{id}', [AdminController::class, 'hap']);
Route::get('puspus/{id}', [AdminController::class, 'puspus']);
Route::get('hpus/{id}', [AdminController::class, 'hpus']);
Route::get('edit/{id}', [AdminController::class, 'edit']);
Route::get('kontak',[AdminController::class,'kontak'])->name('kontak');
Route::get('pengguna',[AdminController::class,'pengguna'])->name('pengguna');

Route::get('ber',[AdminController::class,'ber'])->name('ber');
Route::get('create',[AdminController::class,'create'])->name('create');

Route::get('buat',[AdminController::class,'buat'])->name('buat');
Route::get('buatber',[AdminController::class,'buatber'])->name('buatber');
Route::get('gale',[AdminController::class,'gale'])->name('gale');
Route::get('edd/{id}', [AdminController::class, 'edd']);
Route::get('ditdit/{id}', [AdminController::class, 'ditdit']);

Route::get('adminexport', [AdminController::class, 'adminexport'])->name('adminexport');
Route::get('kompetensiexport', [AdminController::class, 'kompetensiexport'])->name('kompetensiexport');
Route::get('beritaexport', [AdminController::class, 'beritaexport'])->name('beritaexport');
Route::post('update/{id}', [AdminController::class, 'update']);
Route::post('updategal/{id}', [AdminController::class, 'updategal']);
Route::post('updateber/{id}', [AdminController::class, 'updateber']);
Route::post('kompetensiimport', [AdminController::class, 'kompetensiimport'])->name('kompetensiimport');
Route::post('beritaimport', [AdminController::class, 'beritaimport'])->name('beritaimport');
Route::post('adminimport', [AdminController::class, 'adminimport'])->name('adminimport');
Route::post('simpangal',[AdminController::class,'simpangaleri'])->name('simpangal');
Route::post('simpangambar', [AdminController::class,'simpangambar'])->name('simpangambar');
Route::post('simpanber', [AdminController::class,'simpanber'])->name('simpanber');
Route::post('edituser', [AdminController::class,'edituser'])->name('edituser');
