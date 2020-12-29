<?php

namespace App\Controllers;

use App\Models\SiswaModel;
use App\Models\UserModel;

class HomeController extends BaseController
{

	public function index()
	{
		return view('front/index');
	}

	public function login()
	{
		if (session()->has("auth")) {
			return redirect()->to("admin");
		}

		$request = $this->request;

		$username = $request->getVar("username");
		$password = $request->getVar("password");

		if ($username && $password) {

			$user = new UserModel();

			$result = $user->where('username', $username)->where('password', $password)->find();

			if (count($result)) {
				session()->set("auth", $result);

				return redirect()->to("admin");
			}

			session()->setFlashdata("failed", "Username / Password tidak sesuai!");

			return redirect()->back();
		}
		return view('back/login');
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to("login");
	}

	public function cek_pengumuman()
	{
		$search = $this->request->getVar('search');

		if ($search) {

			print_r("yooo");
			$siswa = new SiswaModel();

			$results = $siswa->where('NIS', $search)->orLike('nama_Lengkap', $search)->findAll();

			return view('front/cek_pengumuman', ['results' => $results]);
		}

		return view('front/cek_pengumuman');
	}
}
