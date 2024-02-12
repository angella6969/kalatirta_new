<?php

namespace App\Http\Controllers;

use App\Models\Kalatirta_permintaan_data;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKalatirta_permintaan_dataRequest;
use App\Http\Requests\UpdateKalatirta_permintaan_dataRequest;
use App\Models\Kalatirta_new;
use App\Models\Survey;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KalatirtaPermintaanDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.form.kalatirta.index', [
            'datas' => Kalatirta_permintaan_data::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.formdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKalatirta_permintaan_dataRequest $request)
    {
        $date = Carbon::now();
        $formattedDate = $date->format('M/y');
        $lastRegistration = Kalatirta_permintaan_data::latest()->pluck('nomor_registrasi')->first();
        if ($lastRegistration) {
            $parts = explode('/', $lastRegistration);
            $lastNumber = intval($parts[0]);
            $lastNumber1 = ($parts[2]) . "/" . ($parts[3]);
            if ($date->format('M/y') === $lastNumber1) {
                $newNumber = $lastNumber + 1;
            } else {
                $newNumber = 1;
            }
        } else {
            $newNumber = 1;
        }
        $newNumberFormatted = sprintf('%04d', $newNumber);
        $noReg = $newNumberFormatted . '/PPID/' . $formattedDate;



        $validatedData = $request->validate([
            'nama' => ['required', 'max:254'],
            'alamat' => ['required', 'max:254'],
            'nohp' => ['required', 'regex:/^\d{10,15}$/'],
            'email' => ['required', 'max:254', 'email:dns'],
            'pekerjaan' => ['required', 'max:254'],
            'alamatkantor' => ['required', 'max:254'],
            'tujuan' => ['required'],
            'informasi' => ['required'],
            'memperoleh' => ['required'],
            'mengirim' => ['required'],
            'keterangan' => ['nullable'],
            'nomor_registrasi' => ['nullable'],
            'alamat_kirim' => ['nullable', 'max:254'],
            'ktp' => ['file', 'max:5120', 'mimetypes:image/jpeg,image/png,image/gif,application/pdf', 'required'],
        ]);
        $validatedData['nomor_registrasi'] = $noReg;
        // dd($validatedData['nomor_registrasi']);
        DB::beginTransaction();
        try {

            if ($request->hasFile('ktp')) {
                // $file = $request->file('ktp');
                // $originalFileName = $file->getClientOriginalName();
                // dd($originalFileName);
                $petaPdfPath = $request->file('ktp')->store('public/images/kalatirta');
                $validatedData['ktp'] = $petaPdfPath;
            }
            // db::commit();
            return redirect('/kalatirta-so/form-permohonan-data/survey')->with('data', $validatedData);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function create1()
    {
        $data = session('data');
        return view('content.survey', [
            'data' => $data
        ]);
    }

    public function store1(StoreKalatirta_permintaan_dataRequest $request)
    {
        $data = json_decode($request->input('data'), true);
        if ($data === null) {
            return redirect()->route('kalatirta.create')->with('fail', 'Data Kosong / Silahkan Isi Data Terlebih dahulu');
        }
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $nohp  = $data['nohp'];
        $email  = $data['email'];
        $pekerjaan = $data['pekerjaan'];
        $alamatkantor = $data['alamatkantor'];
        $tujuan  = $data['tujuan'];
        $informasi = $data['informasi'];
        $memperoleh  = $data['memperoleh'];
        $mengirim  = $data['mengirim'];
        $ktp  = $data['ktp'];
        $alamat_kirim  = $data['alamat_kirim'];
        $nomor_registrasi  = $data['nomor_registrasi'];

        $validatedData = $request->validate([
            'jenis_kelamin' => ['required', 'max:254'],
            'pekerjaan' => ['required', 'max:254'],
            'mewakili' => ['required',  'max:254'],
            'jenis_pelayanan' => ['required',  'max:254'],
            'mudah_dipahami' => ['required',  'max:254'],
            'waktu' => ['required',  'max:254'],
            'biaya' => ['required',  'max:254'],
            'standar_pelayanan' => ['required',  'max:254'],
            'kopetensi' => ['required',  'max:254'],
            'sikap_petugas' => ['required',  'max:254'],
            'fasilitas' => ['required',  'max:254'],
            'pengguna_layanan' => ['required',  'max:254'],
            'kritik_saran' => ['required',  'max:254'],

        ]);
        DB::beginTransaction();
        try {
            Kalatirta_permintaan_data::create([
                'nama' => $nama,
                'alamat' => $alamat,
                'nohp' => $nohp,
                'email' => $email,
                'pekerjaan' => $pekerjaan,
                'alamatkantor' => $alamatkantor,
                'tujuan' => $tujuan,
                'informasi' => $informasi,
                'memperoleh' => $memperoleh,
                'mengirim' => $mengirim,
                'ktp' => $ktp,
                'alamat_kirim' => $alamat_kirim,
                'nomor_registrasi' => $nomor_registrasi,
            ]);
            Survey::create($validatedData);
            DB::commit();

            return redirect('/kalatirta-so/permohonan-data')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('fail', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kalatirta_permintaan_data $kalatirta_permintaan_data)
    {
        //
    }
    public function show1()
    {
        $data = Kalatirta_permintaan_data::latest()->get();
        return view('content.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kalatirta_permintaan_data $kalatirta_permintaan_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKalatirta_permintaan_dataRequest $request, Kalatirta_permintaan_data $kalatirta_permintaan_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kalatirta_permintaan_data $kalatirta_permintaan_data)
    {
        //
    }

    public function formKeberatan()
    {
        return view('content.formkeberatan');
    }
    public function formKeberatan_search(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_registrasi' => ['nullable', 'max:250'],
            'nohp' => ['required', 'regex:/^\d{10,15}$/'],
        ]);

        $data = Kalatirta_new::where('nomor_registrasi', $validatedData['nomor_registrasi'])
            ->where('nohp', $validatedData['nohp'])
            ->get();

        if ($data->isEmpty()) {
            return redirect()->back()->with('fail', 'Data tidak ditemukan');
        }

        return view('content.dataformkeberatan', [
            'data' => $data
        ]);
    }

    public function showPortal()
    {
        // $data = Kalatirta::latest()->get();
        return view('content.portal', [
            // 'data' => $data
        ]);
    }
}
