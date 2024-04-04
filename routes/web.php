<?php

use App\Http\Middleware\AuthUser; 
use App\Http\Middleware\Is_verfiy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProfileController;


Route::get('/',[AuthController::class,'registerForm'])->name('user.registerForm');

Route::prefix('user')->group(function(){
    Route::get('/Login/form',[AuthController::class,'loginForm'])->name('user.loginForm');
    Route::get('/verify/form',[AuthController::class,'verifyForm'])->name('user.verifyForm');
    Route::post('/register',[AuthController::class,'register'])->name('user.register');
    Route::post('/Login',[AuthController::class,'Login'])->name('user.Login');
    Route::post('/verify',[AuthController::class,'verify'])->name('user.verify')->middleware(AuthUser::class);
    Route::get('/logout',[AuthController::class,'logout'])->name('user.logout');
});

Route::middleware([AuthUser::class,Is_verfiy::class])->prefix('profile')->group(function(){
    Route::get('/', [ProfileController::class, 'profile'])->name('user.profile');
    Route::get('/setting', [ProfileController::class, 'setting'])->name('user.setting'); 
    Route::post('/update/{id}', [ProfileController::class, 'update'])->name('user.update');

 
    
});

Route::middleware([AuthUser::class,Is_verfiy::class])->prefix('skills')->group(function(){

    Route::get('/create/form', [SkillsController::class, 'create'])->name('skills.create');
    Route::get('/edit/form/{id}', [SkillsController::class, 'edit'])->name('skills.editForm'); 
    Route::post('/store', [SkillsController::class, 'store'])->name('skills.store');

     Route::post('/update/{id}', [SkillsController::class, 'update'])->name('skills.update'); 
     Route::delete('/delete/{id}', [SkillsController::class, 'delete'])->name('skills.delete');


    
});






Route::get('/test/test', function (){
    return view('projects.analytics');

})->name('project.Analytics');

Route::prefix('projects')->group(function (){
    Route::get('/create', function (){
        return view('projects.create');

    })->name('project.create');

    Route::get('/all', function (){
        return view('projects.index');

    })->name('projects.index');

    Route::get('/show', function (){
        return view('projects.show');

    })->name('projects.show');
});




Route::prefix('workspace')->group(function (){
    Route::get('/all', function (){
        return view('workspace.index');

    })->name('workspaces.all');


    Route::get('/create', function (){
        return view('workspace.create');

    })->name('workspaces.create');


});



Route::prefix('company')->group(function (){
    Route::get('/all', function (){
        return view('company.index');

    })->name('companies.all');




});



Route::prefix('crypto')->group(function (){
    Route::get('/' ,function(){
        return view('crypto.analytics');
    })->name('crypto.analytics');


    Route::get('/transactions' ,function(){
        return view('crypto.transactions');
    })->name('crypto.transactions');

    Route::get('/wallet' ,function(){
        return view('crypto.wallet');
    })->name('crypto.wallet');

    Route::get('create' ,function(){
        return view('crypto.createWalet');
    })->name('create.wallet');

    Route::get('goals' ,function(){
        return view('crypto.goals');
    })->name('crypto.goals');


    Route::get('expensess' ,function(){
        return view('crypto.expensess');
    })->name('crypto.expensess');


    Route::get('transfer' ,function(){
        return view('crypto.transfer');
    })->name('crypto.transfer');
    Route::get('income' ,function(){
        return view('crypto.income');
    })->name('crypto.income');
});


Route::prefix('course')->group(function(){



    Route::get('' ,function(){
        return view('course.analytics');
    })->name('course.analytics');

    Route::get('list' ,function(){
        return view('course.list');
    })->name('course.index');
    Route::get('create' ,function(){
        return view('course.create');
    })->name('course.create');
    Route::get('overview' ,function(){
        return view('course.overview');
    })->name('course.show');

});

Route::prefix('lessons')->group(function(){



    Route::get('' ,function(){
        return view('lesson.overview');
    })->name('lesson.index');



});



Route::prefix('user')->group(function(){

Route::get('/signup' ,function(){
    return view('authentication.signUp');
})->name('user.signup');

    Route::get('/signIn' ,function(){
        return view('authentication.signIn');
    })->name('user.signIn');

    Route::get('/resetPassword' ,function(){
        return view('authentication.resetPassword');
    })->name('user.resetpassword');


    Route::get('/lockScreen' ,function(){
        return view('authentication.lockScreen');
    })->name('lockScreen');



    Route::get('/verification' ,function(){
        return view('authentication.verification ');
    })->name('verification');

    Route::get('/createPassword' ,function(){
        return view('authentication.createPassword');
    })->name('user.createPassword');


});


Route::prefix('tasks')->group(function(){



    Route::get('' ,function(){
        return view('task.kanban');
    })->name('tasks.index');


    Route::get('create' ,function(){
        return view('task.create');
    })->name('tasks.create');
    Route::get('show' ,function(){
        return view('task.show');
    })->name('tasks.show');


    Route::get('listView' ,function(){
        return view('task.listView');
    })->name('tasks.listView');


});




Route::prefix('calendar')->group(function(){
    Route::get('/', function (){
        return view('event.calendar');

    })->name('event.calendar');



    Route::get('/timeline', function (){
        return view('event.timeline');

    })->name('event.timeline');
});





Route::prefix('team')->group(function(){
    Route::get('/show', function (){
        return view('team.show');

    })->name('team.show');

    Route::get('/', function (){
        return view('team.index');

    })->name('team.index');


    Route::get('/create', function (){
        return view('team.create');

    })->name('team.create');
});





Route::prefix('blog')->group(function(){
    Route::get('/', function (){
        return view('blog.index');

    })->name('index.blog');

    Route::get('/category', function (){
        return view('blog.category');

    })->name('blog.category');


    // Route::get('/create', function (){
    //     return view('team.create');

    // })->name('team.create');
});





 