<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MMahasiswa; // <-- Use the new model

class Mahasiswa extends BaseController
{
    // This is the main page (READ)
    public function index()
    {
        $model = new MMahasiswa();
        $data['mahasiswa'] = $model->getMahasiswa()->getResult();
        $data['icon'] = 'nav-icon fas fa-user-graduate';
        $data['title'] = "Data Mahasiswa";
        $data['content'] = 'mahasiswa/list_mahasiswa';
        return view('layout/v_wrapper', $data);
    }
    public function create()
    {
        $data['icon'] = 'nav-icon fas fa-user-graduate';
        $data['title'] = "Add Data Mahasiswa";
        $data['content'] = 'mahasiswa/create_form';
        return view('layout/v_wrapper', $data);
    }

    public function saveRegMahasiswa()
    {
        $session = session();
        $data = [
            'npm'     => $this->request->getPost('npm'),
            'nama'    => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'ukm'     => $this->request->getPost('ukm'),
        ];

        $insSaveReg = $this->mahasiswa->saveRegMahasiswa($data);

        if ($insSaveReg) {
            session()->setFlashData('success', 'Data Mahasiswa Berhasil di entri');
            return redirect()->to(base_url() . '/mahasiswa');
        } else {
            session()->setFlashData('warning', 'Failed registrasi mahasiswa');
            return redirect()->to(base_url() . '/mahasiswa');
        }
    }

    public function vEditMahasiswa()
    {
        $id = service('request')->getPost('id');
        $data = $this->mahasiswa->get_IdMahasiswa($id);
        echo json_encode($data);
    }

    public function UpdateRegMahasiswa()
    {
        $session = session();
        $id = $this->request->getPost('IdMahasiswa');
        $data = [
            'npm'     => $this->request->getPost('npm'),
            'nama'    => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'ukm'     => $this->request->getPost('ukm'),
        ];

        $insSaveReg = $this->mahasiswa->UpdateRegMahasiswa($data, $id);

        if ($insSaveReg) {
            session()->setFlashData('success', 'Update Mahasiswa Berhasil');
            return redirect()->to(base_url() . '/mahasiswa');
        } else {
            session()->setFlashData('warning', 'Failed update mahasiswa');
            return redirect()->to(base_url() . '/mahasiswa');
        }
    }
    public function deleteMahasiswa($id)
    {
        $table = "mahasiswa";
        $key = 'id';
        $this->mahasiswa->delete_data($table, $key, $id);
        session()->setFlashData('success', 'Data mahasiswa berhasil di delete !');
        return redirect()->to(base_url('mahasiswa'));
    }
}