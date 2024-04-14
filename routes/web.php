<?php

use App\Http\Middleware\AuthUser;
use App\Http\Middleware\Is_locked;
use App\Http\Middleware\Is_verfiy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\EventController;
use App\Models\Event;





Route::get('/',[AuthController::class,'registerForm'])->name('user.registerForm');

Route::prefix('user')->group(function(){
    Route::get('/Login/form',[AuthController::class,'loginForm'])->name('user.loginForm');
    Route::get('/verify/form',[AuthController::class,'verifyForm'])->name('user.verifyForm');
    Route::post('/register',[AuthController::class,'register'])->name('user.register');
    Route::post('/Login',[AuthController::class,'Login'])->name('user.Login');
    Route::post('/verify',[AuthController::class,'verify'])->name('user.verify')->middleware(AuthUser::class);
    Route::get('/logout',[AuthController::class,'logout'])->name('user.logout');
    Route::get('/lock/screen', [AuthController::class, 'lockedPage'])->
  name('user.lockScreen');


  Route::post('/locked',[AuthController::class,'locked'])
  ->name('user.locked')
  ->middleware(AuthUser::class);

});

Route::middleware([AuthUser::class,Is_verfiy::class,Is_locked::class])->prefix('profile')->group(function(){
    Route::get('/', [ProfileController::class, 'profile'])->name('user.profile');
    Route::get('/setting', [ProfileController::class, 'setting'])->name('user.setting');
    Route::post('/update/{id}', [ProfileController::class, 'update'])->name('user.update');

    Route::post('/notifications/read', [ProfileController::class, 'notificationsRead'])->name('read.notifications');
    Route::get('/notifications', [ProfileController::class, 'notifications'])->name('notifications.index');



});

Route::middleware([AuthUser::class,Is_verfiy::class,Is_locked::class])->prefix('skills')->group(function(){

    Route::get('/create/form', [SkillsController::class, 'create'])->name('skills.create');
    Route::get('/edit/form/{id}', [SkillsController::class, 'edit'])->name('skills.editForm');
    Route::post('/store', [SkillsController::class, 'store'])->name('skills.store');

     Route::post('/update/{id}', [SkillsController::class, 'update'])->name('skills.update');
     Route::delete('/delete/{id}', [SkillsController::class, 'delete'])->name('skills.delete');



});
Route::prefix('password')->group(function(){

    Route::get('/forget/form', [PasswordResetController::class, 'forgetPasswordForm'])->name('user.forgetPasswordForm');
    Route::get('/reset/form', [PasswordResetController::class, 'resetPasswordForm'])->name('user.resetPasswordForm');
    Route::post('/forget', [PasswordResetController::class, 'forgetPassword'])->name('user.forgetPassword');
    Route::post('/reset', [PasswordResetController::class, 'resetPassword'])->name('user.resetPassword');



});


Route::middleware([AuthUser::class,Is_verfiy::class,Is_locked::class])->prefix('status')->group(function(){

    Route::get('/all', [StatusController::class, 'index'])->name('status.index');
    Route::post('/create', [StatusController::class, 'create'])->name('status.create');
    Route::delete('/delete/{id}', [StatusController::class, 'delete'])->name('status.delete');
    Route::get('/edit/{id}', [StatusController::class, 'edit'])->name('status.edit');
    Route::put('/update/{id}', [StatusController::class, 'update'])->name('status.update');


});
Route::middleware([AuthUser::class,Is_verfiy::class,Is_locked::class])->prefix('event')->group(function(){

    Route::get('/createForm', [EventController::class, 'createForm'])->name('event.createForm');
    Route::post('/store', [EventController::class, 'store'])->name('event.store');
    Route::get('/index', [EventController::class, 'index'])->name('event.index');
    Route::get('/timeline', [EventController::class, 'timeline'])->name('event.timeline');
    Route::post('/close/{id}', [EventController::class, 'close'])->name('event.close');
    Route::post('/cancel/{id}', [EventController::class, 'cancel'])->name('event.cancel');
    Route::post('/accept/{id}', [EventController::class, 'accept'])->name('event.accept');
    Route::patch('/update/{id}', [EventController::class, 'update'])->name('event.update');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::get('/search', [EventController::class, 'search'])->name('event.search');
    Route::get('/remind', [EventController::class, 'remind'])->name('event.remind');


});


// Route::get('/remind',function(){
//     use App\Jobs\EventReminderJob;
//     use Carbon\Carbon;
   
   
// // Create the event
// $event =Event::find(20);
// // Set the event details

// // Calculate the delay until the event starts
// $eventStartTime = Carbon::parse($event->date->format('Y-m-d') . ' ' . $event->from);
// $delay = $eventStartTime->diffInSeconds(Carbon::now());


//  // Dispatch the job with the calculated delay
// EventReminderJob::dispatch($event)->delay($delay);


// });





















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




