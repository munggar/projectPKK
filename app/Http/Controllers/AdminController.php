<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Exports\AdminExport;
use App\Exports\BeritaExport;
use App\Exports\KompetensiExport;
use App\Imports\KompetensiImport;
use App\Imports\AdminImport;
use App\Imports\BeritaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pesan;
use App\Models\Galeriguru;
use App\Models\Berita;
use App\Models\Keuangan;
use App\Models\Kompetensi;
use App\Models\Galfot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function adminexport(){
        return Excel::download(new AdminExport,"Admin.xlsx");
    }
    public function beritaexport(){
        return Excel::download(new BeritaExport,"Berita.xlsx");
    }
    public function kompetensiexport(){
        return Excel::download(new KompetensiExport,"Kompetensi.xlsx");
    }
    public function kompetensiimport(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Kompetensi Foto',$namaFile);

        Excel::import(new KompetensiImport, public_path('/Kompetensi Foto/'.$namaFile));
        Alert::success('Data Berhasil Masuk');
        return redirect('kompetensi');
    }
    public function adminimport(Request $req){
        $file = $req->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Galeri',$namaFile);

        Excel::import(new AdminImport, public_path('/Galeri/'.$namaFile));
        Alert::success('Data Berhasil Masuk');
        return redirect('gale');
    }
    public function beritaimport(Request $req){
        $file = $req->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Berita',$namaFile);

        Excel::import(new BeritaImport, public_path('/Berita/'.$namaFile));
        Alert::success('Data Berhasil Masuk');
        return redirect('ber');
    }
    public function admin(){
        return view('admin');
    }

    public function register(){
        return view('register');
    }
    public function kompetensi(){
        $foto = Kompetensi::Paginate(5);
        return view('kompetensi',compact('foto'));
    }
    public function gale(){
        $gal = Galeri::Paginate(5);
        return view('gale',compact('gal'));
    }
    public function school(){
        $gal = Galeri::Paginate(6);
        $beritaa = Berita::Paginate(6);
        $foto = Kompetensi::Paginate(6);
        return view('school',compact('gal','foto','beritaa'));
    }
    public function simpanpesan(Request $request)
    {
        // dd($request->all());
        Pesan::create([
        'name'=>$request->name,
        'kelas'=>$request->kelas,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'message'=>$request->message,
        ]);
        Alert::success('Berhasil!!!');
        return redirect('school');
    }
    public function kontak(){
        $pesan = Pesan::paginate(10);
        return view('kontak',compact('pesan'));
    }
    public function pengguna(){
        $data = User::Paginate(10);
        return view('pengguna',compact('data'));
    }
    public function hpus($no)
    {
        $data=User::find($no);
        $data->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('pengguna');
    }
    public function delete($no)
    {
        $pesan=Pesan::find($no);
        $pesan->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('kontak');
    }
    public function hap($no)
    {
        $foto=Kompetensi::find($no);
        $foto->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('kompetensi');
    }
    public function updategal(Request $request, $id)
    {
        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = Galeri::findorfail($id);
        $dtUpload->jud = $request->jud;
        $dtUpload->ket = $request->ket;
        $dtUpload->foto = $namaFile;


        $nm->move(public_path().'/img', $namaFile);
        $dtUpload->update();


        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('gale');
    }
    public function updateber(Request $request, $id)
    {
        $nm = $request->subfoto;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = Berita::findorfail($id);
        $dtUpload->subjudul = $request->subjudul;
        $dtUpload->subket = $request->subket;
        $dtUpload->subfoto = $namaFile;


        $nm->move(public_path().'/Berita', $namaFile);
        $dtUpload->update();


        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('ber');
    }
    public function update(Request $request, $id)
    {
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = Kompetensi::findorfail($id);
        $dtUpload->judul = $request->judul;
        $dtUpload->keterangan= $request->keterangan;
        $dtUpload->gambar = $namaFile;


        $nm->move(public_path().'/img', $namaFile);
        $dtUpload->update();


        Alert::success('Berhasil', 'Data Disimpan');
        return redirect('kompetensi');
    }

    public function pus($no)
    {
        $gal=Galeri::find($no);
        $gal->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('gale');
    }
    public function puspus($no)
    {
        $beritaa=Berita::find($no);
        $beritaa->delete();
        Alert::success('Data Berhasil Dihapus');
        return redirect('ber');
    }
    public function ber(){
        $beritaa = Berita::Paginate(5);
        return view('ber',compact('beritaa'));
    }
    
    public function simpangambar(Request $request)
    {

        // dd($request->all());
       $nm = $request->gambar;
       $namafile = $nm->getClientOriginalName();

       $dtupload = new Kompetensi;
       $dtupload->judul = $request->judul;
       $dtupload->keterangan = $request->keterangan;

       $dtupload->gambar = $namafile;

       $nm->move(public_path().'/image',$namafile);
       $dtupload->save();

       Alert::success('Data Berhasil Masuk');
       return redirect('kompetensi');
    }
    public function create()
    {
        return view('create');
    }
    public function buat()
    {
        return view('buat');
    }
    public function buatber()
    {
        return view('buatber');
    }
    public function simpangaleri(Request $request)
    {

        // dd($request->all());
       $nm = $request->foto;
       $namafile = $nm->getClientOriginalName();

       $dtupload = new Galeri;
       $dtupload->jud = $request->jud;
       $dtupload->ket = $request->ket;

       $dtupload->foto = $namafile;

       $nm->move(public_path().'/image',$namafile);
       $dtupload->save();

       Alert::success('Data Berhasil Masuk');
       return redirect('gale');
    }
    public function simpanber(Request $request)
    {

        // dd($request->all());
       $nm = $request->subfoto;
       $namafile = $nm->getClientOriginalName();

       $dtupload = new Berita;
       $dtupload->subjudul = $request->subjudul;
       $dtupload->subket = $request->subket;

       $dtupload->subfoto = $namafile;

       $nm->move(public_path().'/Berita',$namafile);
       $dtupload->save();

       Alert::success('Data Berhasil Masuk');
       return redirect('ber');
    }
    public function edit($id)
    {
        $foto= Kompetensi::find($id);
        return view('edit',compact('foto'));
    }
    public function edd($id)
    {
        $gal= Galeri::find($id);
        return view('edd',compact('gal'));
    }
    public function ditdit($id)
    {
        $beritaa= Berita::find($id);
        return view('ditdit',compact('beritaa'));
    }
    public function editah($id)
    {
            $data= User::find($id);
            return view('editah',compact('data'));
    }
    public function edituser(Request $request, $id){

        $nm = $request->foto;
       $namafile = $nm->getClientOriginalName();

       $dtupload = User::findorfail($id);
       $dtupload->name = $request->name;
       $dtupload->username = $request->username;
       $dtupload->email = $request->email;
       $dtupload->level = $request->level;
       $dtupload->password = bcrypt($request->password);
       
       $dtupload->foto = $namafile;

       $nm->move(public_path().'/User',$namafile);
       $dtupload->save();

       Alert::success('Berhasil membuat Akun baru');
       return redirect('admin');
    }
    
}
