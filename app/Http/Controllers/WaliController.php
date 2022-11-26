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
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class WaliController extends Controller
{
    public function mapelexport(){
        return Excel::download(new MapelExport,"Mapel.xlsx");
    }

    public function galkasexport(){
        return Excel::download(new GalkasExport,"GaleriKelas.xlsx");
    }

    public function wali(){
        $data = Siswa::paginate(3);
        $gal = Galfot::all();
        return view('walikls.wali',compact('data','gal'));
    }
    public function simpankas(Request $request){
        //dd($request->all());
        Keuangan::create([
            'siswa_id'=>$request->siswa_id,
            'harga'=>$request->harga,
            'keterangan'=>$request->keterangan,
            ]);
            Alert::success('Data Berhasil Masuk');
        return redirect('kls');
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
        $foto=Matapel::find($no);
        $foto->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('matapel');
    }

    // hapus adaptif
    public function hapus_produktif($no){
        $foto=Mapel::find($no);
        $foto->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('mapel');
    }

    public function pus($no){
        $gal=Galfot::find($no);
        $gal->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('galkas');
    }
    public function bayar(){
        $nama = Siswa::all();
        return view('bayar',compact('nama'));
    }
    public function keuangan(){
        $uang = Keuangan::paginate(10);
        return view('walikls.kas',compact('uang'));
    }
    public function cetakkeuangan(){
        $uang = Keuangan::all();

        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadview('walikls.cetakkas', compact('uang'));
        return $pdf -> download('laporan-keuangan-pdf');
    }
    public function daftar(){
        return view('walikls.daftar');
    }
    public function mapell(){
        return view('walikls.mapell');
    }
    public function tambah_kegiatan(){
        return view('walikls.tambah_kegiatan');
    }
    public function fotosiswa(){
        $nama = Siswa::all();
        return view('walikls.fotosiswa',compact('nama'));
    }
    public function fotoguru(){
        $guru = Galeriguru::all();
        return view('walikls.fotoguru',compact('guru'));
    }
    public function tambah_peminjaman(){
        $nama = Siswa::all();
        return view('walikls.tambah_peminjaman',compact('nama'));
    }

    public function galeri_murid(){
        $murid = Galfot::Paginate(6);
        return view('walikls.galeri_murid',compact('murid'));
    }
    public function galeri_guru(){
        $guru = Galeriguru::Paginate(6);
        return view('walikls.galeri_guru',compact('guru'));
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
    public function jadwalpelajaran(){
        $jadwal = Jadwal::paginate(3);
        return view('walikls.jadwalpelajaran',compact('jadwal'));
    }

    public function edit(){
        return view('walikls.edit');
    }
    public function jadwal(){
        $jadwal = Jadwal::all();
        $kejuruan = Mapel::all();
        $adaptif = Matapel::all();
        return view('user.jadwal',compact('jadwal','kejuruan','adaptif'));
    }

    public function masukan()
    {
        $masukan = Masukan::all();
        return view('walikls.masukan',compact('masukan'));
    }

    public function tambah_masukan() {
        $nama = Siswa::all();
        return view('walikls.tambah_masukan', compact('nama'));
    }

    public function data()
    {
        $data = User::all();
        return view('walikls.data',compact('data'));
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
    public function daftar_siswa(){
        $data = Siswa::paginate(10);
        return view('walikls.daftar_siswa',compact('data'));
    }
    public function dit($id)
    {
        $data= Siswa::find($id);
        return view('dit',compact('data'));
    }
    public function madit($id)
    {
        $foto= Jadwal::find($id);
        return view('madit',compact('foto'));
    }
    public function eddit($id)
    {
        $gal= Galfot::find($id);
        $nama = Galeriguru::all();
        return view('walikls.editsiswa',compact('gal','nama'));
    }
    public function editguru($id)
    {
        $gal= Galfot::find($id);
        $nama = Siswa::all();
        return view('walikls.editguru',compact('gal','nama'));
    }
    public function upmat(Request $request, $id)
    {
        $nm = $request->foto;
        $dtUpload = Jadwal::findorfail($id);
        if($request->file('featured_img') == ""){
    		$dtUpload->foto=$dtUpload->foto;

    	}
    	else{
    	$namaFile = time();
        $request->file('featured_img')->move("jadwal_pelajaran/", $namaFile);
	   	$dtUpload->foto = $namaFile;
	   }    
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = Jadwal::findorfail($id);
        $dtUpload->hari = $request->hari;
        $dtUpload->pelajaran = $request->pelajaran;
        $dtUpload->guru = $request->guru;
        $dtUpload->keterangan= $request->keterangan;
        $dtUpload->foto = $namaFile;

        $nm->move(public_path().'/jadwal_pelajaran', $namaFile);
        $dtUpload->update();

        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('jadwal');
    }
    public function upsiswa(Request $request, $id)
    {
        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = Galfot::findorfail($id);
        $dtUpload->siswa_id = $request->siswa_id;
        $dtUpload->ket = $request->ket;
        $dtUpload->foto = $namaFile;


        $nm->move(public_path().'/Galfot', $namaFile);
        $dtUpload->update();


        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('galkas');
    }
    public function upguru(Request $request, $id)
    {
        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = Galeriguru::findorfail($id);
        $dtUpload->jud = $request->jud;
        $dtUpload->ket = $request->ket;
        $dtUpload->foto = $namaFile;


        $nm->move(public_path().'/Galfot', $namaFile);
        $dtUpload->update();


        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('galkas');
    }
    public function updit(Request $req)
    {
        $data=Siswa::find($req->id);
        $data->nis=$req->nis;
        $data->nama=$req->nama;
        $data->jkel=$req->jkel;
        $data->jrs=$req->jrs;
        $data->ttg=$req->ttg;
        $data->bulan=$req->bulan;
        $data->tahun=$req->tahun;
        $data->save();
        Alert::success('Data Berhasil Disimpan');
        return redirect('muklas');
    }

    public function pelajaran_kejuruan(){
        $foto = Mapel::Paginate(7);
        return view('walikls.pelajaran_kejuruan',compact('foto'));
    }

    // Adaptif
    public function pelajaran_adaptif(){
        $adaptif = Matapel::Paginate(7);
        return view('walikls.pelajaran_adaptif',compact('adaptif'));
    }
    public function peminjaman_buku(){
        $pin = Buku::all();
        $nama = Siswa::all();
        return view('walikls.peminjaman_buku',compact('pin','nama'));
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
    public function register(){
        return view('register');
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