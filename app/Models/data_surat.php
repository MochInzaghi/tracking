<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_surat extends Model
{
    protected $table = 'data_surats';
    protected $fillable = ['no_agenda','no_surat','tanggal','alamat_penerima','perihal','file','arsip','pengirim_surat','penerima_surat','seksi','bukti'];
    public function getFile()
    {
        return "/storage/" . $this->file;
    }
}
