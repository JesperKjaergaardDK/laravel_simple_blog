<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   protected $fillable = ['title', 'content'];
   
   //ways to maupulate data that already exist 
   /* All()
   Find()
   Create()
   Update()
   Delete() */

   //Exist
   /* function all() {
   
   } */

   //Dont exist
   /* function alltest() {
   
   } */
}
