<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;
  
class Contact extends Model
{
    use HasFactory;
  
    protected $table = 'mail';

    public $fillable = ['name', 'email', 'message'];
  

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "info@linvity.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
