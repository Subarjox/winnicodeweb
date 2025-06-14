<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

   protected $table = 'berita';
   protected $primaryKey = 'id_berita';

   // Field yang boleh diisi lewat mass assignment (create/update)
   protected $fillable = [
       'judul', 'kategori', 'gambar', 'deskripsi', 'changed_at',
       'likes', 'dislikes', 'views', 'id_penulis', 'created_at', 'updated_at'
   ];
}
