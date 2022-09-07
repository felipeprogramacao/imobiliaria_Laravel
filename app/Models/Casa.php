<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;
	
	//para resolver problema de MassAssignmentException
	
	protected $fillable=array('imovel','proprietario','pecas_no_imovel','garagem','descricao','valor');
}
