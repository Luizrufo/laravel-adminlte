<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autorlivro extends Model
{
    public function up()
    {
        Schema::create('autor_livro',function(Blueprint $table){
            $table->id();
            $table->foreiglnd('autor_id')->constrained('autores')->onDelete('cascade');
            $table->foreiglnd('livro_id')->constrained('livros')->onDelete('cascade');
            $table->timestamp();
        
    }
    );
    }
}
