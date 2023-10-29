<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Upload extends Model
{
    use HasFactory;
    public function getCreateAtShamsi()
    {
        return new Verta($this->created_at);
    }
}
