<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'frontEndController@index')->name('home');
Route::get('/about', 'frontEndController@about')->name('about');

Route::group(['prefix' => 'admin'], function()
{
	Route::get('/home', 'backEndController@index')->name('admin.index');

	// Route Untuk Artikel dan foto Artikel
	
	Route::get('/showArtikel/editFoto/{id}', 'backController\artikelController@showFoto')->name('admin.editFotoArt');
	Route::get('/showArtikel/editFoto/delete/{id}', 'backController\artikelController@destroyFoto')->name('admin.deleteFotoArt');
	Route::get('/showArtikel/fotoArtikel/Trash', 'backController\artikelController@FotoTrash')->name('admin.trashFotoArtikel');
	Route::get('/showArtikel/fotoArtikel/restore/{id}','backController\artikelController@restoreFoto')->name('admin.restoreFotoArt');
	Route::get('/showArtikel/fotoArtikel/restoreAll/','backController\artikelController@restoreFotoAll')->name('admin.restoreFotoArtAll');
	Route::get('/showArtikel/fotoArtikel/delete/{id}', 'backController\artikelController@forceDelFoto')->name('admin.forceDeleteFotoArt');
	Route::get('/showArtikel/fotoArtikel/delete/', 'backController\artikelController@forceDelFotoAll')->name('admin.forceDeleteFotoArtAll');
	Route::get('/inputFotoArt/{id}', 'backController\artikelController@inputFoto')->name('admin.inputFotoArt');
	Route::post('/inputFotoArt/', 'backController\artikelController@storeFoto')->name('admin.storeFotoArt');

	Route::get('/showArtikel/editArtikel/delete/{id}', 'backController\artikelController@destroyArtikel')->name('admin.deleteArtikel');
	Route::get('/showArtikel/Artikel/Trash', 'backController\artikelController@ArtikelTrash')->name('admin.trashArtikel');
	Route::get('/showArtikel/Artikel/restore/{id}','backController\artikelController@restoreArtikel')->name('admin.restoreArtikel');
	Route::get('/showArtikel/Artikel/restoreAll/','backController\artikelController@restoreArtikelAll')->name('admin.restoreArtikelAll');
	Route::get('/showArtikel/Artikel/delete/{id}', 'backController\artikelController@forceDelArtikel')->name('admin.forceDeleteArtikel');
	Route::get('/showArtikel/Artikel/delete/', 'backController\artikelController@forceDelArtikelAll')->name('admin.forceDeleteArtikelAll');
	Route::resource('/ArtikelIn', 'backController\artikelController');

	// route Kegiatan
	Route::get('/showKegiatan/editKegiatan/delete/{id}', 'backController\kegiatanController@destroyKegiatan')->name('admin.deleteKegiatan');
	Route::get('/showKegiatan/Kegiatan/Trash', 'backController\kegiatanController@KegiatanTrash')->name('admin.trashKegiatan');
	Route::get('/showKegiatan/Kegiatan/restore/{id}','backController\kegiatanController@restoreKegiatan')->name('admin.restoreKegiatan');
	Route::get('/showKegiatan/Kegiatan/restoreAll/','backController\kegiatanController@restoreKegiatanAll')->name('admin.restoreKegiatanAll');
	Route::get('/showKegiatan/Kegiatan/delete/{id}', 'backController\kegiatanController@forceDelKegiatan')->name('admin.forceDeleteKegiatan');
	Route::get('/showKegiatan/Kegiatan/delete/', 'backController\kegiatanController@forceDelKegiatanAll')->name('admin.forceDeleteKegiatanAll');

	// route pemasukan
	Route::get('/showPemasukan/editPemasukan/delete/{id}', 'backController\pemasukanController@destroyPemasukan')->name('admin.deletePemasukan');
	Route::get('/showPemasukan/Pemasukan/Trash', 'backController\pemasukanController@PemasukanTrash')->name('admin.trashPemasukan');
	Route::get('/showPemasukan/Pemasukan/restore/{id}','backController\pemasukanController@restorePemasukan')->name('admin.restorePemasukan');
	Route::get('/showPemasukan/Pemasukan/restoreAll/','backController\pemasukanController@restorePemasukanAll')->name('admin.restorePemasukanAll');
	Route::get('/showPemasukan/Pemasukan/delete/{id}', 'backController\pemasukanController@forceDelPemasukan')->name('admin.forceDeletePemasukan');
	Route::get('/showPemasukan/Pemasukan/delete/', 'backController\pemasukanController@forceDelPemasukanAll')->name('admin.forceDeletePemasukanAll');
	Route::get('/showPemasukan/editFoto/delete/{id}', 'backController\pemasukanController@destroyFoto')->name('admin.deleteFotoIn');
	Route::get('/showPemasukan/fotoPemasukan/Trash', 'backController\pemasukanController@FotoTrash')->name('admin.trashFotoPemasukan');
	Route::get('/showPemasukan/fotoPemasukan/restore/{id}','backController\pemasukanController@restoreFoto')->name('admin.restoreFotoIn');
	Route::get('/showPemasukan/fotoPemasukan/restoreAll/','backController\pemasukanController@restoreFotoAll')->name('admin.restoreFotoInAll');
	Route::get('/showPemasukan/fotoPemasukan/delete/{id}', 'backController\pemasukanController@forceDelFoto')->name('admin.forceDeleteFotoIn');
	Route::get('/showPemasukan/fotoPemasukan/delete/', 'backController\pemasukanController@forceDelFotoAll')->name('admin.forceDeleteFotoInAll');
	// Route::get('/inputFotoArt/{id}', 'backController\pemasukanController@inputFoto')->name('admin.inputFotoArt');
	// Route::post('/inputFotoArt/', 'backController\pemasukanController@storeFoto')->name('admin.storeFotoArt');
	Route::get('/PemasukanIn/foto/{id}', 'backController\pemasukanController@showFotoIn')->name('admin.showFotoIn');
	Route::get('/inputFotoIn/{id}', 'backController\pemasukanController@inputFoto')->name('admin.inputFotoIn');
	Route::post('/inputFotoIn/', 'backController\pemasukanController@storeFoto')->name('admin.storeFotoIn');

	// route pengeluaran
	Route::get('/showPengeluaran/editPengeluaran/delete/{id}', 'backController\pengeluaranController@destroyPengeluaran')->name('admin.deletePengeluaran');
	Route::get('/showPengeluaran/Pengeluaran/Trash', 'backController\pengeluaranController@PengeluaranTrash')->name('admin.trashPengeluaran');
	Route::get('/showPengeluaran/Pengeluaran/restore/{id}','backController\pengeluaranController@restorePengeluaran')->name('admin.restorePengeluaran');
	Route::get('/showPengeluaran/Pengeluaran/restoreAll/','backController\pengeluaranController@restorePengeluaranAll')->name('admin.restorePengeluaranAll');
	Route::get('/showPengeluaran/Pengeluaran/delete/{id}', 'backController\pengeluaranController@forceDelPengeluaran')->name('admin.forceDeletePengeluaran');
	Route::get('/showPengeluaran/Pengeluaran/delete/', 'backController\pengeluaranController@forceDelPengeluaranAll')->name('admin.forceDeletePengeluaranAll');
	Route::get('/showPengeluaran/editFoto/delete/{id}', 'backController\pengeluaranController@destroyFoto')->name('admin.deleteFotoOut');
	Route::get('/showPengeluaran/fotoPengeluaran/Trash', 'backController\pengeluaranController@FotoTrash')->name('admin.trashFotoPengeluaran');
	Route::get('/showPengeluaran/fotoPengeluaran/restore/{id}','backController\pengeluaranController@restoreFoto')->name('admin.restoreFotoOut');
	Route::get('/showPengeluaran/fotoPengeluaran/restoreAll/','backController\pengeluaranController@restoreFotoAll')->name('admin.restoreFotoOutAll');
	Route::get('/showPengeluaran/fotoPengeluaran/delete/{id}', 'backController\pengeluaranController@forceDelFoto')->name('admin.forceDeleteFotoOut');
	Route::get('/showPengeluaran/fotoPengeluaran/delete/', 'backController\pengeluaranController@forceDelFotoAll')->name('admin.forceDeleteFotoOutAll');
	Route::get('/PengeluaranOut/foto/{id}', 'backController\pengeluaranController@showFotoOut')->name('admin.showFotoOut');
	Route::get('/inputFotoOut/{id}', 'backController\pengeluaranController@inputFoto')->name('admin.inputFotoOut');
	Route::post('/inputFotoOut/', 'backController\pengeluaranController@storeFoto')->name('admin.storeFotoOut');

	// route resource
	Route::resource('/PrestasiIn', 'backController\prestasiController');
	Route::resource('/ArtikelIn', 'backController\artikelController');
	Route::resource('/PemasukanIn', 'backController\pemasukanController');
	Route::resource('/PengeluaranIn', 'backController\pengeluaranController');	
	Route::resource('/KegiatanIn', 'backController\kegiatanController');
	Route::get('/inputKegiatan', 'backController\kegiatanController@inputKegiatan')->name('admin.inputKegiatan');
	Route::get('/showKegiatan', 'backController\kegiatanController@showKegiatan')->name('admin.showKegiatan');
});
