<?php
    namespace App;
    use Illuminate\Database\Eloquent\Model;
    class Letter extends Model
    {
        protected $table = "letters";
        protected $fillable = ["title", "text", 'created_at', 'updated_at'];
    }