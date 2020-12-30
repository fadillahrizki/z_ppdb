<?php

namespace App\Controllers;

use App\Database\Migrations\MataPelajaran;
use App\Database\Migrations\SiswaNilai;
use App\Models\GelombangModel;
use App\Models\JurusanModel;
use App\Models\MataPelajaranModel;
use App\Models\TahunModel;
use App\Models\SiswaAsalModel;
use App\Models\SiswaAyahModel;
use App\Models\SiswaIbuModel;
use App\Models\SiswaModel;
use App\Models\SiswaNilaiModel;
use App\Models\SiswaPrestasiAkademikModel;
use App\Models\SiswaPrestasiNonAkademikModel;

class AdminController extends BaseController
{

	function index()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		$siswa = new SiswaModel();
		$tahun = new TahunModel();
		$gelombang = new GelombangModel();
		$jurusan = new JurusanModel();
		$mata_pelajaran = new MataPelajaranModel();
		$data = [
			'tahun' => $tahun->countAll(),
			'siswa' => $siswa->countAll(),
			'gelomang' => $gelombang->countAll(),
			'jurusan' => $jurusan->countAll(),
			'mata_pelajaran' => $mata_pelajaran->countAll(),
		];
		return view('back/index', $data);
	}

	function tahun()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new TahunModel();
		$data = [
			'data' => $model->findAll()
		];
		return view('back/tahun/index', $data);
	}

	function tahun_create()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		return view('back/tahun/create');
	}

	function tahun_insert()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new TahunModel();

		$request = $this->request;

		$data = [
			'tahun' => $request->getVar('tahun'),
			'status'    => $request->getVar('status'),
		];

		if ($model->protect(false)->insert($data)) {

			session()->setFlashdata('success', 'Berhasil membuat Tahun!');

			return redirect()->to('/admin/tahun/');
		}
	}

	function tahun_edit($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new TahunModel();
		$data = [
			'data' => $model->find($id)
		];
		return view('back/tahun/edit', $data);
	}

	function tahun_update()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new TahunModel();

		$request = $this->request;

		$data = [
			'id' => $request->getVar('id'),
			'tahun' => $request->getVar('tahun'),
			'status'    => $request->getVar('status'),
		];

		if ($model->protect(false)->save($data)) {

			session()->setFlashdata('success', 'Berhasil mengedit Tahun!');

			return redirect()->to('/admin/tahun/');
		}
	}

	function tahun_delete($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new TahunModel();

		if ($model->protect(false)->delete($id)) {

			session()->setFlashdata('success', 'Berhasil menghapus Tahun!');

			return redirect()->to('/admin/tahun/');
		}
	}

	function jurusan()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new JurusanModel();
		$data = [
			'data' => $model->findAll()
		];
		return view('back/jurusan/index', $data);
	}

	function jurusan_create()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		return view('back/jurusan/create');
	}

	function jurusan_insert()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new JurusanModel();

		$request = $this->request;

		$data = [
			'nama'    => $request->getVar('nama'),
		];

		if ($model->protect(false)->insert($data)) {

			session()->setFlashdata('success', 'Berhasil membuat jurusan!');

			return redirect()->to('/admin/jurusan/');
		}
	}

	function jurusan_edit($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new JurusanModel();
		$data = [
			'data' => $model->find($id)
		];
		return view('back/jurusan/edit', $data);
	}

	function jurusan_update()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new JurusanModel();

		$request = $this->request;

		$data = [
			'id' => $request->getVar('id'),
			'nama'    => $request->getVar('nama'),
		];

		if ($model->protect(false)->save($data)) {

			session()->setFlashdata('success', 'Berhasil mengedit jurusan!');

			return redirect()->to('/admin/jurusan/');
		}
	}

	function jurusan_delete($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new JurusanModel();

		if ($model->protect(false)->delete($id)) {

			session()->setFlashdata('success', 'Berhasil menghapus jurusan!');

			return redirect()->to('/admin/jurusan/');
		}
	}

	function mata_pelajaran()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new MataPelajaranModel();
		$data = [
			'data' => $model->findAll()
		];
		return view('back/mata_pelajaran/index', $data);
	}

	function mata_pelajaran_create()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		return view('back/mata_pelajaran/create');
	}

	function mata_pelajaran_insert()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new MataPelajaranModel();

		$request = $this->request;

		$data = [
			'nama'    => $request->getVar('nama'),
			'tahun'    => $request->getVar('tahun'),
		];

		if ($model->protect(false)->insert($data)) {

			session()->setFlashdata('success', 'Berhasil membuat Mata Pelajaran!');

			return redirect()->to('/admin/mata-pelajaran/');
		}
	}

	function mata_pelajaran_edit($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new MataPelajaranModel();
		$data = [
			'data' => $model->find($id)
		];
		return view('back/mata_pelajaran/edit', $data);
	}

	function mata_pelajaran_update()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new MataPelajaranModel();

		$request = $this->request;

		$data = [
			'id' => $request->getVar('id'),
			'nama'    => $request->getVar('nama'),
			'tahun'    => $request->getVar('tahun'),
		];

		if ($model->protect(false)->save($data)) {

			session()->setFlashdata('success', 'Berhasil mengedit Mata Pelajaran!');

			return redirect()->to('/admin/mata-pelajaran/');
		}
	}

	function mata_pelajaran_delete($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new MataPelajaranModel();

		if ($model->protect(false)->delete($id)) {

			session()->setFlashdata('success', 'Berhasil menghapus Mata Pelajaran!');

			return redirect()->to('/admin/mata-pelajaran/');
		}
	}

	function gelombang()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new GelombangModel();
		$data = [
			'data' => $model->getData()
		];
		return view('back/gelombang/index', $data);
	}

	function gelombang_create()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$tahun = new TahunModel();
		$data = [
			'tahun' => $tahun->findAll()
		];
		return view('back/gelombang/create', $data);
	}

	function gelombang_insert()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new GelombangModel();

		$request = $this->request;

		$data = [
			'nama' => $request->getVar('nama'),
			'tahun_id'    => $request->getVar('tahun_id'),
			'tanggal_buka'    => $request->getVar('tanggal_buka'),
			'tanggal_tutup'    => $request->getVar('tanggal_tutup'),
			'kuota'    => $request->getVar('kuota'),
		];

		if ($model->protect(false)->insert($data)) {

			session()->setFlashdata('success', 'Berhasil membuat gelombang!');

			return redirect()->to('/admin/gelombang/');
		}
	}

	function gelombang_edit($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new GelombangModel();
		$tahun = new TahunModel();
		$data = [
			'data' => $model->find($id),
			'tahun' => $tahun->findAll()
		];
		return view('back/gelombang/edit', $data);
	}

	function gelombang_update()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new GelombangModel();

		$request = $this->request;

		$data = [
			'id' => $request->getVar('id'),
			'nama' => $request->getVar('nama'),
			'tahun_id'    => $request->getVar('tahun_id'),
			'tanggal_buka'    => $request->getVar('tanggal_buka'),
			'tanggal_tutup'    => $request->getVar('tanggal_tutup'),
			'kuota'    => $request->getVar('kuota'),
		];

		if ($model->protect(false)->save($data)) {

			session()->setFlashdata('success', 'Berhasil mengedit gelombang!');

			return redirect()->to('/admin/gelombang/');
		}
	}

	function gelombang_delete($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new GelombangModel();

		if ($model->protect(false)->delete($id)) {

			session()->setFlashdata('success', 'Berhasil menghapus gelombang!');

			return redirect()->to('/admin/gelombang/');
		}
	}

	function siswa()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		$model = new SiswaModel();
		$data = [
			'data' => $model->findAll()
		];
		return view('back/siswa/index', $data);
	}

	public function siswa_create()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}


		$gelombang = new GelombangModel();
		$jurusan = new JurusanModel();
		$mata_pelajaran = new MataPelajaranModel();
		$data = [
			'jurusan' => $jurusan->findAll(),
			'gelombang' => $gelombang->findAll(),
			'mata_pelajaran' => $mata_pelajaran->findAll(),
		];
		return view('back/siswa/create', $data);
	}

	public function siswa_insert()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		$request = $this->request;

		$siswa_data = $request->getVar("siswa");
		$siswa_data['user_id'] = session("auth")[0]['id'];
		$siswa_data['tanggal'] = date("Y-m-d H:i:s");

		$siswa = new SiswaModel();
		$tahun = new TahunModel();

		$id = count($siswa->findAll()) + 1;

		$siswa_data['no_pendaftaran'] = date("Y") . date("m") . date("d") . $siswa_data['jurusan_id'] . $siswa_data['gelombang_id'] . "00" . $id;

		$siswa_data['tahun_id'] = $tahun->where('status', 'Aktif')->find()['id'];
		$siswa_data['status'] = 'Menunggu Keputusan';

		if ($siswa->protect(false)->insert($siswa_data)) {

			$ayah_data = $request->getVar("ayah");
			$ibu_data = $request->getVar("ibu");
			$nilai_data = $request->getVar("nilai");
			$asal_sekolah_data = $request->getVar("asal_sekolah");
			$prestasi_akademik_data = $request->getVar("prestasi_akademik");
			$prestasi_non_akademik_data = $request->getVar("prestasi_non_akademik");

			$ayah_data['siswa_id'] = $siswa->getInsertID();
			$ibu_data['siswa_id'] = $siswa->getInsertID();
			$asal_sekolah_data['siswa_id'] = $siswa->getInsertID();

			$ayah = new SiswaAyahModel();
			$ibu = new SiswaIbuModel();
			$nilai = new SiswaNilaiModel();
			$asal_sekolah = new SiswaAsalModel();
			$prestasi_akademik = new SiswaPrestasiAkademikModel();
			$prestasi_non_akademik = new SiswaPrestasiNonAkademikModel();

			if ($ayah->protect(false)->insert($ayah_data) && $ibu->protect(false)->insert($ibu_data) && $asal_sekolah->protect(false)->insert($asal_sekolah_data)) {

				foreach ($prestasi_akademik_data as $akademik) {

					if ($akademik['nama'] && $akademik['juara'] && $akademik['tingkat'] && $akademik['penyelenggara']) {
						$akademik['siswa_id'] = $siswa->getInsertID();

						if (!$prestasi_akademik->protect(false)->insert($akademik)) {
							continue;
						}
					}
				}

				foreach ($prestasi_non_akademik_data as $non_akademik) {
					if ($non_akademik['nama'] && $non_akademik['juara'] && $non_akademik['tingkat'] && $non_akademik['penyelenggara']) {
						$non_akademik['siswa_id'] = $siswa->getInsertID();

						if (!$prestasi_non_akademik->protect(false)->insert($non_akademik)) {
							continue;
						}
					}
				}

				foreach ($nilai_data as $nilai) {

					if ($nilai['nilai'] && $nilai['mata_pelajaran_id']) {
						$nilai['siswa_id'] = $siswa->getInsertID();

						if (!$nilai->protect(false)->insert($nilai)) {
							continue;
						}
					}
				}

				session()->setFlashdata('success', 'Berhasil menambah siswa!');

				return redirect()->to('/admin/siswa/');
			}
		}
	}
	function siswa_edit($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		$gelombang = new GelombangModel();
		$jurusan = new JurusanModel();
		$mata_pelajaran = new MataPelajaranModel();
		$siswa = new SiswaModel();

		$d = $siswa->find($id);

		$data = [
			'jurusan' => $jurusan->findAll(),
			'gelombang' => $gelombang->findAll(),
			'mata_pelajaran' => $mata_pelajaran->findAll(),
			'data' => $d,
			'ayah' => $siswa->getAyah($d['id']),
			'ibu' => $siswa->getIbu($d['id']),
			'asal_sekolah' => $siswa->getAsalSekolah($d['id']),
			'nilai' => $siswa->getNilai($d['id']),
			'prestasi_akademik' => $siswa->getPrestasiAkademik($d['id']),
			'prestasi_non_akademik' => $siswa->getPrestasiNonAkademik($d['id']),
		];
		return view('back/siswa/edit', $data);
	}

	function siswa_single($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		$siswa = new SiswaModel();

		$d = $siswa->find($id);

		$data = [
			'data' => $d,
			'ayah' => $siswa->getAyah($d['id']),
			'ibu' => $siswa->getIbu($d['id']),
			'asal_sekolah' => $siswa->getAsalSekolah($d['id']),
			'nilai' => $siswa->getNilai($d['id']),
			'prestasi_akademik' => $siswa->getPrestasiAkademik($d['id']),
			'prestasi_non_akademik' => $siswa->getPrestasiNonAkademik($d['id']),
			'tahun' => $siswa->getTahun($d['tahun_id']),
			'gelombang' => $siswa->getGelombang($d['gelombang_id']),
			'jurusan' => $siswa->getJurusan($d['jurusan_id']),
		];
		return view('back/siswa/single', $data);
	}

	function siswa_update()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		$model = new SiswaModel();
		$tahun = new TahunModel();

		$request = $this->request;

		$data = [
			'id' => $request->getVar('id'),
			'nama' => $request->getVar('nama'),
			'tahun_id'    => $tahun->where('status', 'Aktif')->find()['id'],
			'tanggal_buka'    => $request->getVar('tanggal_buka'),
			'tanggal_tutup'    => $request->getVar('tanggal_tutup'),
			'kuota'    => $request->getVar('kuota'),
		];

		if ($model->protect(false)->save($data)) {

			session()->setFlashdata('success', 'Berhasil mengedit gelombang!');

			return redirect()->to('/admin/gelombang/');
		}
	}

	function siswa_delete($id)
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		$model = new SiswaModel();

		if ($model->protect(false)->delete($id)) {

			session()->setFlashdata('success', 'Berhasil menghapus siswa!');

			return redirect()->to('/admin/siswa/');
		}
	}

	function kelulusan()
	{

		if (!session()->has("auth")) {
			return redirect()->to("login");
		}

		if (session("auth")[0]["level"] != "admin") {
			return redirect()->to("admin");
		}

		$model = new SiswaModel();

		if ($this->request->getMethod() == "post") {
			$status = $this->request->getVar("status");

			foreach ($status as $st) {
				if ($model->protect(false)->save([
					'id' => $st,
					'status' => 'Lulus'
				])) {
					session()->setFlashdata("success", "Berhasil mengupdate kelulusan!");
				}
			}
		}


		$data = [
			'data' => $model->getKelulusan()
		];

		return view('back/kelulusan/index', $data);
	}
}
