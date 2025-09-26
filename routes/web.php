<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    SejarahController, VisiMisiTujuanController, DashboardController,
    ProfilPimpinanController, ProfilStaffDosenController,PanduanPendidikanController,
    ProgramStudiController, FasilitasController, AkreditasiController,
    KalenderAkademikController, AgendaController, BeasiswaController, InformasiController,
    PrestasiMahasiswaController,PengumumanController, YudisiumWisudaController,
    PendaftaranController, TentangAlumniController, IkatanAlumniController,
    TracerStudyController, PeluangKerjaController, OrmawaController,
    PaktaIntegritasController, AturanGratifikasiController, DokumenZonaIntegritasController,
    UnibaMaduraExpoController, SOPController,

};
use App\Http\Controllers\{
    ProfilController, HomeController, AkademikController, KemahasiswaanController, BeritaController, InformasiPublikController, AlumniController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/', '/home');
Route::get('/home',                                                [HomeController::class, 'index'])->name('home');

// PROFIL
Route::get('/profil/sejarah-fh/',                                 [ProfilController::class, 'sejarah'])->name('guest.sejarah');
Route::get('/profil/visi-misi-tujuan-fh/',                        [ProfilController::class, 'visiMisiTujuanFeb'])->name('guest.visi-misi');
Route::get('/profil/pimpinan-fh/',                                [ProfilController::class, 'pimpinanFeb'])->name('guest.pimpinan');
Route::get('/profil/staff-dosen-fh/',                             [ProfilController::class, 'staffDosenFeb'])->name('guest.staff-dosen-fh');
Route::get('/profil/rencana-strategis-fh/',                       [ProfilController::class, 'rencanaStrategis'])->name('guest.rencana-strategis-fh');
Route::get('/profil/fasilitas-fh/',                               [ProfilController::class, 'fasilitas'])->name('guest.fasilitas-fh');
Route::get('/profil/akreditasi-fh/',                              [ProfilController::class, 'akreditasi'])->name('guest.akreditasi-fh');
// Route::get('/profil/struktur-organisasi-fh/',                  [ProfilController::class, 'strukturOrganisasi'])->name('guest.struktur-organisasi-fh');

// AKADEMIK
Route::get('/akademik/panduan-pendidikan-fh/',                    [AkademikController::class, 'panduanPendidikanFeb'])->name('guest.panduan-pendidikan-fh');
Route::get('/akademik/buku-pedoman-skripsi-fh/',                  [AkademikController::class, 'bukuPedomanSkripsiFeb'])->name('guest.buku-pedoman-skripsi-fh');
Route::get('/akademik/program-studi-fh/manajemen',                [AkademikController::class, 'manajemen'])->name('guest.manajemen-fh');
Route::get('/akademik/program-studi-fh/akuntansi',                [AkademikController::class, 'akuntansi'])->name('guest.akuntansi-fh');
Route::get('/akademik/program-studi-fh/teknik-industri',          [AkademikController::class, 'teknikIndustri'])->name('guest.teknik-industri-fh');
Route::get('/akademik/kalender-akademik-fh/',                     [AkademikController::class, 'kalenderAkademikFeb'])->name('guest.kalender-akademik-fh');
Route::get('/akademik/yudisium-dan-wisuda/',                       [AkademikController::class, 'yudisiumDanWisuda'])->name('guest.yudisium-dan-wisuda-fh');

// KEMAHASISWAAN
Route::get('/kemahasiswaan/info-kemahasiswaan/beasiswa',           [KemahasiswaanController::class, 'beasiswa'])->name('guest.beasiswa-fh');
Route::resource('info-kemahasiswaan-beasiswa',                     KemahasiswaanController::class);
Route::get('/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa', [KemahasiswaanController::class, 'prestasiMahasiswa'])->name('guest.prestasi-mahasiswa-fh');
Route::resource('info-kemahasiswaan/prestasi-mahasiswa',           KemahasiswaanController::class);
Route::resource('info-kemahasiswaan/ormawa-fh',                   KemahasiswaanController::class);

// BERITA
Route::get('/berita/informasi-fh',                                [BeritaController::class, 'informasi'])->name('guest.informasi-fh');
Route::resource('berita-informasi-fh',                            BeritaController::class);
Route::resource('berita-pengumuman-fh',                           BeritaController::class);
Route::get('/berita/pengumuman-fh',                               [BeritaController::class, 'pengumuman'])->name('guest.pengumuman-fh');
Route::get('/berita/agenda-fh',                                   [BeritaController::class, 'agenda'])->name('guest.agenda-fh');

// ALUMNI
Route::get('/alumni/tentang-alumni-fh',                           [AlumniController::class, 'tentang'])->name('guest.tentang-alumni-fh');
Route::resource('alumni-tentang-alumni-fh',                       AlumniController::class);
Route::get('/alumni/ikatan-alumni-fh',                            [AlumniController::class, 'ikatan'])->name('guest.ikatan-alumni-fh');
Route::resource('peluang-kerja-fh',                               AlumniController::class);
Route::get('/alumni/peluang-kerja-fh',                            [AlumniController::class, 'peluang'])->name('guest.peluang-kerja-fh');

// INFORMASI PUBLIK
Route::get('/alumni/zona-integritas/pakta-integritas-fh',         [InformasiPublikController::class,  'pakta'])->name('guest.pakta-integritas-fh');
Route::get('/alumni/zona-integritas/aturan-gratifikasi-fh',       [InformasiPublikController::class,  'aturan'])->name('guest.aturan-gratifikasi-fh');
Route::get('/alumni/zona-integritas/dokumen-zona-integritas-fh',  [InformasiPublikController::class,  'dokumen'])->name('guest.dokumen-zona-integritas-fh');
Route::get('/alumni/zona-integritas/uniba-expo-fh',               [InformasiPublikController::class,  'expo'])->name('guest.dokumen-zona-integritas-fh');
Route::get('/alumni/zona-integritas/sop-fh',                      [InformasiPublikController::class,  'sop'])->name('guest.dokumen-zona-integritas-fh');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // HOME
    Route::get('/dashboard',                                                                [DashboardController::class, 'index'])->name('dashboard');

    // PROFIL
    Route::get('Akreditasi-fh',                                                            [AkreditasiController::class,                  'show'])    ->name('akreditasi-fh.show');
    Route::post('admin/profil/akreditasi-fh/header',                                       [AkreditasiController::class,                  'header'])  ->name('akreditasi-fh.header');
    Route::resource('admin/profil/akreditasi-fh',                                          AkreditasiController::class)        ->except(['show']);

    Route::get('fasilitas-fh',                                                             [FasilitasController::class,                  'show'])    ->name('fasilitas-fh.show');
    Route::post('admin/profil/fasilitas-fh/header',                                        [FasilitasController::class,                  'header'])  ->name('fasilitas-fh.header');
    Route::resource('admin/profil/fasilitas-fh',                                           FasilitasController::class)        ->except(['show']);

    Route::get('sejarah-fh',                                                               [SejarahController::class,                  'show'])    ->name('sejarah-fh.show');
    Route::post('admin/profil/sejarah-fh/header',                                          [SejarahController::class,                  'header'])  ->name('sejarah-fh.header');
    Route::resource('admin/profil/sejarah-fh',                                             SejarahController::class)        ->except(['show']);

    Route::get('visi-misi-tujuan-fh',                                                      [VisiMisiTujuanController::class,           'show'])    ->name('visi-misi-tujuan-fh.show');
    Route::post('admin/profil/visi-misi-tujuan-fh/header',                                 [VisiMisiTujuanController::class,           'header'])  ->name('visi-misi-tujuan-fh.header');
    Route::resource('admin/profil/visi-misi-tujuan-fh',                                    VisiMisiTujuanController::class) ->except(['show']);

    Route::get('pimpinan-fh',                                                              [ProfilPimpinanController::class,           'show'])    ->name('pimpinan-fh.show');
    Route::post('admin/profil/pimpinan-fh/header',                                         [ProfilPimpinanController::class,           'header'])  ->name('pimpinan-fh.header');
    Route::resource('admin/profil/pimpinan-fh',                                            ProfilPimpinanController::class) ->except(['show']);

    Route::get('staff-dosen-fh',                                                           [ProfilStaffDosenController::class,         'show'])    ->name('staff-dosen-fh.show');
    Route::post('admin/profil/staff-dosen-fh/header',                                      [ProfilStaffDosenController::class,         'header'])  ->name('staff-dosen-fh.header');
    Route::resource('admin/profil/staff-dosen-fh',                                         ProfilStaffDosenController::class)->except(['show']);

    // Route::post('admin/profil/identitas-fh/header',                                      [IdentitasFSTController::class,             'header']) ->name('identitas-fh.header');
    // Route::get('identitas-fh',                                                           [IdentitasFSTController::class,             'show'])   ->name('identitas-fh.show');
    // Route::resource('admin/profil/identitas-fh',                                         IdentitasFSTController::class)    ->except(['show']);

    // AKADEMIK
    Route::get('panduan-pendidikan-fh',                                                    [PanduanPendidikanController::class,            'show'])            ->name('panduan-pendidikan-fh.show');
    Route::post('admin/akademik/panduan-pendidikan-fh/header',                             [PanduanPendidikanController::class,            'header'])          ->name('panduan-pendidikan-fh.header');
    Route::resource('admin/akademik/panduan-pendidikan-fh',                                PanduanPendidikanController::class)   ->except(['show']);

    Route::post('admin/akademik/program-studi-fh/header',                                  [ProgramStudiController::class,             'header'])          ->name('program-studi-fh.header');
    Route::resource('admin/akademik/program-studi-fh',                                     ProgramStudiController::class);
    Route::post('admin/akademik/program-studi-fh/{id?}/create',                            [ProgramStudiController::class,             'detailStore']) ->name('program-studi-fh.detail.store');
    Route::post('admin/akademik/program-studi-fh/{id?}/update',                            [ProgramStudiController::class,             'detailUpdate']) ->name('program-studi-fh.detail.update');
    Route::post('admin/akademik/program-studi-fh/{id?}/edit',                              [ProgramStudiController::class,               'detailEdit']) ->name('program-studi-fh.detail.edit');
    Route::delete('admin/akademik/program-studi-fh/{id?}/delete',                          [ProgramStudiController::class,               'detailDestroy']) ->name('program-studi-fh.detail.destroy');

    Route::get('kalender-akademik-fh',                                                     [KalenderAkademikController::class,            'show'])            ->name('kalender-akademik-fh.show');
    Route::post('admin/akademik/kalender-akademik-fh/header',                              [KalenderAkademikController::class,            'header'])          ->name('kalender-akademik-fh.header');
    Route::resource('admin/akademik/kalender-akademik-fh',                                 KalenderAkademikController::class)   ->except(['show']);

    Route::get('yudisium-wisuda-fh',                                                       [YudisiumWisudaController::class,            'show'])            ->name('yudisium-wisuda-fh.show');
    Route::post('admin/akademik/yudisium-wisuda-fh/header',                                [YudisiumWisudaController::class,            'header'])          ->name('yudisium-wisuda-fh.header');
    Route::resource('admin/akademik/yudisium-wisuda-fh',                                   YudisiumWisudaController::class)   ->except(['show']);

    Route::resource('admin/akademik/pendaftaran-fh',                                       PendaftaranController::class)   ->except(['show']);

    // KEMAHASISWAAN
    Route::resource('admin/kemahasiswaan/info-kemahasiswaan/beasiswa-fh',                  BeasiswaController::class)   ->except(['show']);
    Route::get('beasiswa-fh',                                                              [BeasiswaController::class,            'show'])            ->name('beasiswa-fh.show');
    Route::post('admin/kemahasiswaan/info-kemahasiswaan/beasiswa-fh/header',               [BeasiswaController::class,            'header'])          ->name('beasiswa-fh.header');

    Route::resource('admin/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa-fh',        PrestasiMahasiswaController::class)   ->except(['show']);
    Route::get('prestasi-mahasiswa-fh',                                                    [PrestasiMahasiswaController::class,            'show'])            ->name('prestasi-mahasiswa-fh.show');
    Route::post('admin/kemahasiswaan/info-kemahasiswaan/prestasi-mahasiswa-fh/header',     [PrestasiMahasiswaController::class,            'header'])          ->name('prestasi-mahasiswa-fh.header');

    Route::resource('admin/kemahasiswaan/ormawa-fh',                                      OrmawaController::class)   ->except(['show']);
    Route::post('admin/kemahasiswaan/ormawa/BEM-fh/header',                                [OrmawaController::class,            'header'])          ->name('ormawa-fh.header');

    // BERITA
    Route::resource('admin/berita/informasi-fh',                                           InformasiController::class)   ->except(['show']);
    Route::get('informasi-fh',                                                             [InformasiController::class,            'show'])            ->name('informasi-fh.show');
    Route::post('admin/berita/informasi-fh/header',                                        [InformasiController::class,            'header'])          ->name('informasi-fh.header');

    Route::resource('admin/berita/pengumuman-fh',                                          PengumumanController::class)   ->except(['show']);
    Route::get('pengumuman-fh',                                                            [PengumumanController::class,            'show'])            ->name('pengumuman-fh.show');
    Route::post('admin/berita/pengumuman-fh/header',                                       [PengumumanController::class,            'header'])          ->name('pengumuman-fh.header');

    Route::resource('admin/berita/agenda-fh',                                              AgendaController::class)   ->except(['show']);
    Route::get('agenda-fh',                                                                [AgendaController::class,            'show'])            ->name('agenda-fh.show');
    Route::post('admin/berita/agenda-fh/header',                                           [AgendaController::class,            'header'])          ->name('agenda-fh.header');

    // ALUMNI
    Route::resource('admin/alumni/tentang-alumni-fh',                                      TentangAlumniController::class)   ->except(['show']);
    Route::get('tentang-alumni-fh',                                                        [TentangAlumniController::class,            'show'])            ->name('tentang-alumni-fh.show');
    Route::post('admin/alumni/tentang-alumni-fh/header',                                   [TentangAlumniController::class,            'header'])          ->name('tentang-alumni-fh.header');

    Route::resource('admin/alumni/ikatan-alumni-fh',                                       IkatanAlumniController::class)   ->except(['show']);
    Route::get('ikatan-alumni-fh',                                                         [IkatanAlumniController::class,            'show'])            ->name('ikatan-alumni-fh.show');
    Route::post('admin/alumni/ikatan-alumni-fh/header',                                    [IkatanAlumniController::class,            'header'])          ->name('ikatan-alumni-fh.header');

    Route::resource('admin/alumni/tracer-study-fh',                                        TracerStudyController::class)   ->except(['show']);

    Route::resource('admin/alumni/peluang-kerja-fh',                                       PeluangKerjaController::class)   ->except(['show']);
    Route::get('peluang-kerja-fh',                                                         [PeluangKerjaController::class,            'show'])            ->name('peluang-kerja-fh.show');
    Route::post('admin/alumni/peluang-kerja-fh/header',                                    [PeluangKerjaController::class,            'header'])          ->name('peluang-kerja-fh.header');

    // INFORMASI PUBLIK
    Route::resource('admin/informasi-publik/zona-integritas/pakta-integritas-fh',          PaktaIntegritasController::class)   ->except(['show']);
    Route::get('pakta-integritas-fh',                                                      [PaktaIntegritasController::class,            'show'])            ->name('pakta-integritas-fh.show');
    Route::post('admin/informasi-publik/zona-integritas/pakta-integritas-fh/header',       [PaktaIntegritasController::class,            'header'])          ->name('pakta-integritas-fh.header');

    Route::resource('admin/informasi-publik/zona-integritas/aturan-gratifikasi-fh',        AturanGratifikasiController::class)   ->except(['show']);
    Route::get('aturan-gratifikasi-fh',                                                    [AturanGratifikasiController::class,            'show'])            ->name('aturan-gratifikasi-fh.show');
    Route::post('admin/informasi-publik/zona-integritas/aturan-gratifikasi-fh/header',     [AturanGratifikasiController::class,            'header'])          ->name('aturan-gratifikasi-fh.header');

    Route::resource('admin/informasi-publik/zona-integritas/dokumen-zona-integritas-fh',   DokumenZonaIntegritasController::class)   ->except(['show']);
    Route::get('dokumen-zona-integritas-fh',                                               [DokumenZonaIntegritasController::class,            'show'])            ->name('dokumen-zona-integritas-fh.show');
    Route::post('admin/informasi-publik/zona-integritas/dokumen-zona-integritas-fh/header',[DokumenZonaIntegritasController::class,            'header'])          ->name('dokumen-zona-integritas-fh.header');


    Route::resource('admin/informasi-publik/download-dokumen/uniba-madura-expo-fh',               UnibaMaduraExpoController::class)   ->except(['show']);
    Route::get('uniba-madura-expo-fh',                                                     [UnibaMaduraExpoController::class,            'show'])            ->name('uniba-madura-expo-fh.show');
    Route::post('admin/informasi-publik/download-dokumen/uniba-madura-expo-fh/header',     [UnibaMaduraExpoController::class,            'header'])          ->name('uniba-madura-expo-fh.header');

    Route::resource('admin/informasi-publik/download-dokumen/sop-fh',                      SOPController::class)   ->except(['show']);
    Route::get('sop-fh',                                                                   [SOPController::class,            'show'])            ->name('sop-fh.show');
    Route::post('admin/informasi-publik/download-dokumen/sop-fh/header',                   [SOPController::class,            'header'])          ->name('sop-fh.header');



});
// profil
// Route::get('profil/visi-misi-tujuan-fh',           [ProfilController::class, 'visiMisiIndex']);            //index
// Route::get('profil/staff-dosen',                    [ProfilController::class, 'staffDosenIndex']);          //index
// Route::get('profil/tenaga-kependidikan',            [ProfilController::class, 'tendikIndex']);              //index
// Route::get('profil/pimpinan-fakultas',              [ProfilController::class, 'pimFakIndex']);              //index
// Route::get('profil/identitas-fh',                  [ProfilController::class, 'identitasIndex']);           //index
// Route::get('profil/struktur-organisasi',            [ProfilController::class, 'strukOrgIndex']);            //index

// // akademik
// Route::get('akademik/panduan-pendidikan-fh',       [AkademikController::class, 'panPendikIndex']);         //index
// Route::get('akademik/program-studi',                [AkademikController::class, 'progStuIndex']);           //index
// Route::get('akademik/kalender-akademik',            [AkademikController::class, 'kalAkIndex']);             //index
// Route::get('akademik/kemahasiswaan',                [AkademikController::class, 'KemHasIndex']);            //index

// // penelitian
// Route::resource('penelitian',                       PenelitianController::class);                           //resources

// // berita
// Route::get('berita/terkini',                        [BeritaController::class, 'berTerIndex']);              //index
// Route::get('berita/agenda',                         [BeritaController::class, 'berAgenIndex']);             //index
// Route::get('berita/laporan',                        [BeritaController::class, 'berLapIndex']);              //index
