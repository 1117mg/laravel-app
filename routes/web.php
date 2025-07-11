<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/articles/create', function () {
        return view('articles/create');
    });

    Route::post('/articles', function (Request $request) {
        // 비어있지 않고, 문자열이고, 255자를 넘지 않을 것
        $input = $request->validate([
            'body' => [
                'required',
                'string',
                'max:255'
            ]
        ]);

        //dd($input);

        // $host = config('database.connections.mysql.host');
        // $dbname = config('database.connections.mysql.database');
        // $username = config('database.connections.mysql.username');
        // $password = config('database.connections.mysql.password');
        
        // // 글 저장
        // // pdo 객체 생성
        // $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // // 쿼리 준비
        // $stmt = $conn->prepare("INSERT INTO articles (body, user_id) VALUES (:body, :userId)");

        //dd($request->collect());
        //$body = $request->input('body');
        //dd($body);

        // 쿼리 값 설정
        // $stmt->bindValue(':body', $input['body']);
        // $stmt->bindValue(':userId', Auth::id());
        // 실행

        DB::statement(
            "INSERT INTO articles (body, user_id) VALUES (:body, :userId)",
            [
                'body' => $input['body'],
                'userId' => Auth::id()
            ]
        );

        return 'hello';
    });
});

require __DIR__.'/auth.php';