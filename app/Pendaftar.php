<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model {
    protected $keyType = "string";
    protected $table = 'pendaftar';
    protected $primaryKey = 'nik';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'asal_sekolah',
        'jenis_kelamin', 'agama', 'no_seluler', 'tlp_rumah',
        'email', 'alamat', 'pilihan1', 'pilihan2', 'pilihan3'
    ];

    public function pilihan1() {
        return $this->belongsTo('App\Prodi', 'pilihan1')->first();
    }

    public function pilihan2()
    {
        return $this->belongsTo('App\Prodi', 'pilihan2')->first();
    }

    public function pilihan3()
    {
        return $this->belongsTo('App\Prodi', 'pilihan3')->first();
    }

}
