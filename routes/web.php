<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Client\ConfirmController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Client\QuestionController;
use App\Http\Controllers\Client\InformationController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\Client\ProgramController;
use App\Http\Controllers\Client\QuestionafterthreeController;
use App\Http\Controllers\Client\TermController;
use App\Http\Controllers\Client\ThankPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [HomeController::class, 'index'])->name('home');
Route::group(["namespace" => "client"], function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/postRegiester', [LoginController::class, 'postRegiester'])->name('postRegiester');
    Route::post('/login', [LoginController::class, 'login'])->name('post.login');
    Route::get('/searchid', [SearchController::class, 'index'])->name('search');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/editInformation/{id}', [InformationController::class, 'editInformation'])->name('editInformation');
    Route::post('/editInformation/{id}',[InformationController::class, 'postEditInformation'])->name('postEditInformation');
    Route::post('/postSearchId', [SearchController::class, 'postSearchId'])->name('postSearchId');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::group(["middleware" => ["checkUser"]], function () {
        Route::get('/confirmInformation', [ConfirmController::class, 'index'])->name('confirmInformation');
        Route::group(['middleware' => ['checkInfor']], function() {
            Route::get('/term', [TermController::class, 'index'])->name('term');
            Route::get('/post-term', [TermController::class, 'postConfirm'])->name('post.term');
            Route::get("/information", [InformationController::class, 'index'])->name('information');
        });

            Route::get('/myPage', [HomeController::class, 'redirectToMyPage'])->name('myPage');
            Route::get('/program/{id}', [ProgramController::class, 'index'])->name('program');
            Route::get('/question', [QuestionController::class, 'oneMonth'])->name('oneMonth');
            Route::get('/info', [QuestionController::class, 'info'])->name('user.info');
            Route::post('/inforQuestion', [QuestionController::class, 'postInfo'])->name('user.postInfo');
            Route::get('/confirmQuestionInfor',[QuestionController::class, 'confirmInfor'])->name('confirmInfor');
            Route::group(['middleware' => ['dietInformation']], function() {
                Route::get('/question-page-1', [QuestionController::class, 'zeroMonthPageOne'])->name('zero.one.question');
                Route::post('/postQuestionPageOne', [QuestionController::class, 'postQuestionPageOne'])->name('postQuestionPageOne');
                Route::get('/question-page-2', [QuestionController::class, 'zeroMonthPageTwo'])->name('zero.two.question');
                Route::post('/postQuestionPageTwo', [QuestionController::class, 'postQuestionPageTwo'])->name('postQuestionPageTwo');
                Route::get('/question-page-3', [QuestionController::class, 'zeroMonthPageThree'])->name('zero.three.question');
                Route::post('/postQuestionPageThree', [QuestionController::class, 'postQuestionPageThree'])->name('postQuestionPageThree');
                Route::get('/question-page-4', [QuestionController::class, 'zeroMonthPageFour'])->name('zero.four.question');
                Route::get('/confirmquestion', [ConfirmController::class, 'confirmquestion'])->name('confirmquestion');
                Route::post('/postQuestionConfirm', [ConfirmController::class, 'postConfirmquestion'])->name('postConfirmquestion');
                Route::get('/checkBim', [QuestionController::class, 'afterThree'])->name('afterThree');
                Route::post('/updateBmi',[QuestionController::class, 'updateBmi'])->name('updateBmi');
                Route::get('/oneQuestionAfterThree',[QuestionafterthreeController::class, 'oneQuestionAfterThree'])->name('oneQuestionAfterThree');
                Route::post('/postQuestionAfterThree',[QuestionafterthreeController::class, 'postQuestionAfterThree'])->name('postQuestionAfterThree');
                // Route::get('/thanksPageQuestion',[ThankPageController::class, 'index'])->name('thankspage');
                Route::get('/thanks', [ThankPageController::class, 'thanks'])->name('thanks.question');
            });
        Route::post('/postInformationafterTerm', [ConfirmController::class, 'postInforUser'])->name('postInforUser');
    });
    Route::get('/thankyou', [ThankPageController::class, 'thankspage'])->name('thanks.info');
    Route::group(['namespace' => 'Admin'], function() {
        Route::get('/admin', [AdminLoginController::class, 'index'])->name('admin');
        Route::post('/admin', [AdminLoginController::class, 'login'])->name('post.login.admin');
        Route::group(['middleware' => ['check.admin.login'], 'prefix' => 'admin'], function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/detail/{param}', [DashboardController::class, 'detail'])->name('admin.detail.user');
        Route::post('/detail/{param}', [DashboardController::class, 'postChecked'])->name('admin.checked');
        });
    });
});
