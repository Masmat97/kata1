<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory;

     // Campi assegnabili in massa
     protected $fillable = ['titolo', 'descrizione', 'stato', 'data_creazione', 'data_chiusura', 'operatore_id'];

     // Relazione con Operatore
     public function operatore()
     {
         return $this->belongsTo(Operatore::class);
     }
 
     // Relazione con Categorie (molti a molti)
     public function categorie()
     {
         return $this->belongsToMany(Categoria::class, 'ticket_categoria', 'ticket_id', 'categoria_id');
     }
}
