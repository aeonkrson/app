<?php

namespace App\Models;

use CodeIgniter\Model;

class MMahasiswa extends Model
{
    // Note: We use "mahasiswa" as the table name
    protected $table = "mahasiswa";

    public function getMahasiswa($id = false)
    {
        if ($id === false) {
            return $this->table('mahasiswa')
                ->orderBy('id', 'DESC')
                ->get();
        } else {
            return $this->table('mahasiswa')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function saveRegMahasiswa($data)
    {
        $query = $this->db->table('mahasiswa')->insert($data);
        return $query;
    }

    public function get_IdMahasiswa($id = false)
    {
        return $this->db->table('mahasiswa')
            ->where('id', $id)
            ->get()
            ->getResultArray();
    }

    public function UpdateRegMahasiswa($data, $id)
    {
        $query = $this->db->table('mahasiswa')->update($data, ['id' => $id]);
        return $query;
    }

    public function delete_data($table, $key, $id)
    {
        return $this->db->table($table)->delete([$key => $id]);
    }
}