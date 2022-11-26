<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\MapelExport;
use App\Exports\GalkasExport;
use App\Imports\MapelImport;
use App\Imports\GalkasImport;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Pesan;
use App\Models\Mapel;
use App\Models\Matapel;
use App\Models\Buku;
use App\Models\Masukan;
use App\Models\Jadwal;
use App\Models\Keuangan;
use App\Models\Galfot;
use App\Models\Galeriguru;
use App\Models\Pengeluaran;
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    public function mapelexport(){
        return Excel::download(new MapelExport,"Mapel.xlsx");
    }

    public function galkasexport(){
        return Excel::download(new GalkasExport,"GaleriKelas.xlsx");
    }

    public function kls(){
        $data = Siswa::paginate(3);
        $gal = Galfot::all();
        return view('adminkls.kls',compact('data','gal'));
    }
    public function simpankas(Request $request){
        //dd($request->all());
        Keuangan::create([
            'siswa_id'=>$request->siswa_id,
            'harga'=>$request->harga,
            'keterangan'=>$request->keterangan,
            ]);
            Alert::success('Data Berhasil Masuk');
        return redirect('kas');
      }
    public function simpan_pengeluaran(Request $request){
        //dd($request->all());
        Pengeluaran::create([
            'pengeluaran'=>$request->pengeluaran,
            'keterangan'=>$request->keterangan,
            ]);
            Alert::success('Data Berhasil Masuk');
        return redirect('kas');
      }

      public function simpanbuku(Request $request){
        //dd($request->all());
        Buku::create([
            'siswa_id'=>$request->siswa_id,
            'nmbuku'=>$request->nmbuku,
            'keterangan'=>$request->keterangan,
            ]);
            Alert::success('Data Berhasil Masuk');
        return redirect('pinjam');
      }

      public function hapusbuku($id){
        $pin = Buku::findorfail($id);
        $pin->delete();

        Alert::success('Data Berhasil Dihapus');
        return redirect('pinjam');
      }

      public function delete($no)
    {
        $data=Siswa::findorfail($no);
        $data->delete();

        Alert::success('Data Berhasil Dihapus');
        return redirect('muklas');
    }

    // hapus kas
      public function hapus($no){
        $uang=Keuangan::find($no);
        $uang->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('kas');
    }

    // hapus adaptif
    public function hapus_adaptif($no){
        $kejuruan=Mapel::find($no);
        $kejuruan->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('adaptif');
    }

    // hapus kejuruan
    public function hapus_kejuruan($no){
        $foto=Mapel::find($no);
        $foto->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('matapel');
    }

    public function hapus_jadwal($id){
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('jadwalpel');
    }

    public function hapus_buku($id){
        $pin = Buku::find($id);
        $pin->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('pinjam');
    }

    public function hapus_masukan($id){
        $masukan = Masukan::find($id);
        $masukan->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('masukan');
    }

    public function hapus_galgur($id){
        $guru=Galeriguru::find($id);
        $guru->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('galerigur');
    }
    public function bayar(){
        $nama = Siswa::all();
        return view('bayar',compact('nama'));
    }
    public function kas(){
        $uang = Keuangan::paginate(10);
        $keluar = Pengeluaran::all();
        return view('adminkls.kas',compact('uang','keluar'));
    }
    public function cetakkas(){
        $uang = Keuangan::all();
        $keluar = Pengeluaran::all();

        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadview('adminkls.cetakkas', compact('uang','keluar'));
        return $pdf -> stream();
    }
    public function pengeluaran(){
        return view('adminkls.pengeluaran');
    }
    public function daftar(){
        return view('adminkls.daftar');
    }
    public function mapell(){
        return view('adminkls.mapell');
    }
    public function tambah_kegiatan(){
        return view('adminkls.tambah_kegiatan');
    }
    public function fotosiswa(){
        $nama = Siswa::all();
        return view('adminkls.fotosiswa',compact('nama'));
    }
    public function fotoguru(){
        $guru = Galeriguru::all();
        return view('adminkls.fotoguru',compact('guru'));
    }
    public function tambah_peminjaman(){
        $nama = Siswa::all();
        return view('adminkls.tambah_peminjaman',compact('nama'));
    }

    public function galkas(){
        $murid = Galfot::Paginate(8);
        return view('adminkls.galkas',compact('murid'));
    }
    public function galgur(){
        $guru = Galeriguru::Paginate(8);
        return view('adminkls.galgur',compact('guru'));
    }

    public function rpl(Request $request){
        $gal = Galfot::Paginate(6);
        $kejuruan = Mapel::all();
        $adaptif = Matapel::all();

        $uang = Siswa::paginate(10);
        $uang = Keuangan::paginate(10);
        $masukan = Masukan::all();
        $pin = Buku::all();
        return view('user.rpl', ['nama' => $uang], compact('masukan','uang','pin','kejuruan','gal','adaptif'));
    }

    public function galeriguru(){
        $galeri = galeriguru::all();
        return view('user.guru', compact('galeri'));
    }

    public function murid(){
        $murid = Galfot::all();
        $buku = Buku::all();
        return view('user.murid',compact('murid','buku'));
    }
    public function jadwalpel(){
        $jadwal = Jadwal::paginate(3);
        return view('adminkls.jadwalpel',compact('jadwal'));
    }

    public function edit(){
        return view('adminkls.edit');
    }
    public function jadwal(){
        $jadwal = Jadwal::all();
        $kejuruan = Mapel::all();
        $adaptif = Matapel::all();
        return view('user.jadwal',compact('jadwal','kejuruan','adaptif'));
    }

    public function pelajaran_produktif($id){
        $kejuruan = Mapel::find($id);
        return view('user.pelajaran_produktif',compact('kejuruan'));
    }

    public function pelajaran_adaptif($id){
        $adaptif = Matapel::find($id);
        return view('user.pelajaran_adaptif',compact('adaptif'));
    }

    public function jadwal_pelajaran($id){
        $jadwal = Jadwal::find($id);
        return view('user.jadwal_pelajaran',compact('jadwal'));
    }

    public function masukan()
    {
        $masukan = Masukan::all();
        return view('adminkls.masukan',compact('masukan'));
    }

    public function tambah_masukan() {
        $nama = Siswa::all();
        return view('adminkls.tambah_masukan', compact('nama'));
    }

    public function data()
    {
        $data = User::all();
        return view('adminkls.data',compact('data'));
    }

    public function simpanpesan(Request $request)
    {
        // dd($request->all());
        Masukan::create([
        'nama'=>$request->nama,
        'nis'=>$request->nis,
        'email'=>$request->email,
        'masukan'=>$request->masukan,
        ]);
        Alert::success('Berhasil', 'Terimakasih atas masukan anda');
        return redirect('rpl');
    }


    public function simpandaftar(Request $request)
    {
        //dd($request->all());
        siswa::create([
        'nis'=>$request->nis,
        'nama'=>$request->nama,
        'jkel'=>$request->jkel,
        'jrs'=>$request->jrs,
        'ttg'=>$request->ttg,
        'bulan'=>$request->bulan,
        'tahun'=>$request->tahun,
        ]);
        Alert::success('Berhasil', 'Berhasil Menambahkan data Siswa');
        return redirect('muklas');
    }
    public function muklas(){
        $data = Siswa::paginate(10);
        return view('adminkls.muklas',compact('data'));
    }

    public function galkasimport(Request $req){
        $file = $req->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('GaleriKelas',$namaFile);

        Excel::import(new GalkasImport, public_path('/GaleriKelas/'.$namaFile));
        Alert::success('Data Berhasil Masuk');
        return redirect('galkas');
    }
    public function mapelimport(Request $req){
        $file = $req->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Mapel',$namaFile);

        Excel::import(new MapelImport, public_path('/Mapel/'.$namaFile));
        Alert::success('Data Berhasil Masuk');
        return redirect('matapel');
    }
    public function siswaexport(){
        return Excel::download(new SiswaExport,"siswa.xlsx");
    }

    // Edit siswa
    public function edit_siswa($id)
    {
        $data= Siswa::find($id);
        return view('adminkls.edit_siswa',compact('data'));
    }

    public function update_siswa(Request $req)
    {
        $data=Siswa::find($req->id);
        $data->nis=$req->nis;
        $data->nama=$req->nama;
        $data->jkel=$req->jkel;
        $data->ttg=$req->ttg;
        $data->bulan=$req->bulan;
        $data->tahun=$req->tahun;
        $data->save();
        Alert::success('Data Berhasil Disimpan');
        return redirect('muklas');
    }

    // import excel siswa
    public function siswaimport(Request $req){
        $file = $req->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Siswa',$namaFile);

        Excel::import(new SiswaImport, public_path('/Siswa/'.$namaFile));
        Alert::success('Data Berhasil Masuk');
        return redirect('muklas');
    }

    // edit adaptif
    public function madit($id)
    {
        $adaptif= Matapel::find($id);
        return view('adminkls.edit_adaptif',compact('adaptif'));
    }

    public function update_adaptif(Request $request, $id)
    {
        if ($request->gambar) {
            $nm = $request->gambar;
            $dtUpload = Matapel::findorfail($id);
            $namaFile = $nm->getClientOriginalName();

        $dtUpload = Matapel::findorfail($request->id)->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'gambar' => $namaFile,
        ]);
        }
        $dtUpload = Matapel::findorfail($request->id)->update([
        'judul' => $request->judul,
        'keterangan' => $request->keterangan,
    ]);
    if ($request->gambar) {
        $nm->move(public_path().'/adaptif', $namaFile);
    }

        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('adaptiff');
    }

    // edit kejuruan
    public function edit_kejuruan($id)
    {
        $kejuruan= Mapel::find($id);
        return view('adminkls.edit_kejuruan',compact('kejuruan'));
    }

    public function update_kejuruan(Request $request, $id)
    {
        if ($request->gambar) {
            $nm = $request->gambar;
            $dtUpload = Mapel::findorfail($id);
            $namaFile = $nm->getClientOriginalName();
            $dtUpload = Mapel::findorfail($request->id)->update([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
            ]);
        }
        $dtUpload = Mapel::findorfail($request->id)->update([
        'judul' => $request->judul,
        'keterangan' => $request->keterangan,
    ]);
    if ($request->gambar) {
        $nm->move(public_path().'/kejuruan', $namaFile);
    }

        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('matapel');
    }

    // edit jadwal
    public function edit_jadwal($id)
    {
        $jadwal= Jadwal::find($id);
        return view('adminkls.edit_jadwal',compact('jadwal'));
    }

    public function update_jadwal(Request $request, $id)
    {
        if ($request->foto) {
            $nm = $request->foto;
            $dtUpload = Jadwal::findorfail($id);
            $namaFile = $nm->getClientOriginalName();
            $dtUpload = Jadwal::findorfail($request->id)->update([
                'hari' => $request->hari,
                'guru' => $request->guru,
                'pelajaran' => $request->pelajaran,
                'keterangan' => $request->keterangan,
                'foto' => $namaFile,
            ]);
        }

        $dtUpload = Jadwal::findorfail($request->id)->update([
        'hari' => $request->hari,
        'guru' => $request->guru,
        'pelajaran' => $request->pelajaran,
        'keterangan' => $request->keterangan,
    ]);

    if ($request->foto) {
        $nm->move(public_path().'/jadwal', $namaFile);
    }

        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('jadwalpel');
    }

    public function edit_buku($id)
    {
        $pin= Buku::find($id);
        $siswa = Siswa::all();
        return view('adminkls.edit_buku',compact('pin','siswa'));
    }

    public function update_buku(Request $request, $id)
    {
        $dtUpload = Buku::findorfail($request->id)->update([
        'siswa_id' => $request->siswa_id,
        'nmbuku' => $request->nmbuku,
        'keterangan' => $request->keterangan,
    ]);
        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('pinjam');
    }

    public function eddit($id)
    {
        $gal= Galfot::find($id);
        $nama = Siswa::all();
        return view('adminkls.editsiswa',compact('gal','nama'));
    }
    public function editguru($id)
    {
        $guru= Galeriguru::find($id);
        return view('adminkls.editguru',compact('guru'));
    }

    public function upsiswa(Request $request, $id)
    {
        if ($request->foto) {
            $nm = $request->foto;
            $dtUpload = Galfot::findorfail($id);
            $namaFile = $nm->getClientOriginalName();
            $dtUpload = Galfot::findorfail($request->id)->update([
                'siswa_id' => $request->siswa_id,
                'keterangan' => $request->keterangan,
                'foto' => $namaFile,
            ]);
        }

        $dtUpload = Galfot::findorfail($request->id)->update([
        'siswa_id' => $request->siswa_id,
        'keterangan' => $request->keterangan,
    ]);

    if ($request->foto) {
        $nm->move(public_path().'/Galfot', $namaFile);
    }

    Alert::success('Berhasil', 'Data Disimpan');
    return redirect('galkas');
}
public function upguru(Request $request, $id)
{
    if ($request->foto) {
        $nm = $request->foto;
        $dtUpload = Galeriguru::findorfail($id);
        $namaFile = $nm->getClientOriginalName();
        $dtUpload = Galeriguru::findorfail($request->id)->update([
            'jud' => $request->jud,
            'keterangan' => $request->keterangan,
            'foto' => $namaFile,
        ]);
    }
        $dtUpload = Galeriguru::findorfail($request->id)->update([
            'ket' => $request->keterangan,
            'jud' => $request->jud,
        ]);

        if ($request->foto) {
            $nm->move(public_path().'/Guru', $namaFile);
        }

        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('galerigur');
    }


    public function matapel(){
        $foto = Mapel::Paginate(7);
        return view('adminkls.matapel',compact('foto'));
    }

    // Adaptif
    public function adaptif(){
        $adaptif = Matapel::Paginate(7);
        return view('adminkls.adaptif',compact('adaptif'));
    }
    public function matapell(){
        return view('adminkls.matapell');
    }
    public function simpanadaptif(Request $request){
        // dd($request->all());
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Matapel;
        $dtUpload->judul = $request->judul;
        $dtUpload->keterangan= $request->keterangan;
        $dtUpload->gambar = $namaFile;


        $nm->move(public_path() . '/Adaptif', $namaFile);
        $dtUpload->save();


        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('adaptiff');
    }
    public function pinjam(){
        $pin = Buku::all();
        $nama = Siswa::all();
        return view('adminkls.pinjam',compact('pin','nama'));
    }
    public function simpankejuruan(Request $request)
    {

        // dd($request->all());
       $nm = $request->gambar;
       $namafile = $nm->getClientOriginalName();

       $dtupload = new Mapel;
       $dtupload->judul = $request->judul;
       $dtupload->keterangan = $request->keterangan;

       $dtupload->gambar = $namafile;

       $nm->move(public_path().'/Matpel',$namafile);
       $dtupload->save();

       Alert::success('Data Berhasil Masuk');
       return redirect('matapel');
    }
    public function simpankegiatan(Request $request)
    {

        // dd($request->all());
       $nm = $request->foto;
       $namafile = $nm->getClientOriginalName();

       $dtupload = new Jadwal;
       $dtupload->hari = $request->hari;
       $dtupload->pelajaran = $request->pelajaran;
       $dtupload->guru = $request->guru;
       $dtupload->keterangan = $request->keterangan;

       $dtupload->foto = $namafile;

       $nm->move(public_path().'/jadwal_pelajaran',$namafile);
       $dtupload->save();

       Alert::success('Data Berhasil Masuk');
       return redirect()->intended('jadwalpel');
    }

    public function simpansiswa(Request $request)
    {

        // dd($request->all());
       $nm = $request->foto;
       $namafile = $nm->getClientOriginalName();

       $dtupload = new Galfot;
       $dtupload->siswa_id = $request->siswa_id;
       $dtupload->ket = $request->ket;

       $dtupload->foto = $namafile;

       $nm->move(public_path().'/Galfot',$namafile);
       $dtupload->save();

       Alert::success('Data Berhasil Masuk');
       return redirect('galkas');
    }

public function simpanguru(Request $request)
{

    // dd($request->all());
   $nm = $request->foto;
   $namafile = $nm->getClientOriginalName();

   $dtupload = new Galeriguru;
   $dtupload->jud = $request->jud;
   $dtupload->ket = $request->ket;

   $dtupload->foto = $namafile;

   $nm->move(public_path().'/Guru',$namafile);
   $dtupload->save();

   Alert::success('Data Berhasil Masuk');
   return redirect('galerigur');
}
}
