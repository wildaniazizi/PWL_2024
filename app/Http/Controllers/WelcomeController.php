<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function greeting(){
        return view('blog.hello')
            ->with('name', 'Andi')
            ->with('occupation', 'Astronaut');
        //when type like above, the parameter 'name' have a value that
        //is Andi, so if you call in hello.blade.php the result if you
        //call $name, the result will be Andi
    } 
}
