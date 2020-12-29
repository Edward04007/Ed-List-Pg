<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeralController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AtividadesController;
use App\Http\Controllers\turmaController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\PerfilController;


/* Rota para página inicial quando não logado */
Route::get("/", [LoginController::class, 'index'])->name('index');
/* Rota para validar login */
Route::post("/", [LoginController::class, 'store'])->name('login.store');
/* Rota para página de login*/
Route::get("/login", [LoginController::class, 'index'])->name('login.index');
/* Rota para página de logout */
Route::get('/logout', [LoginController::class, 'lagout'])->name('lagout.lagout');





Route::middleware('check.session')->group(function(){
/* Rota para página inicial quando logado */
Route::get("/geral", [GeralController::class, 'index'])->name('geral.index');
/* Rota para atualizar status da atividade */
Route::put("/update/{id}",[AtividadesController::class,'update'])->name('update.update');
/* Rota para página de atividades a fazer */
Route::get("/atribuido", [AtividadesController::class,'lista_atribuida'])->name('fazer.lista_atribuida');
/* Rota para página de atividades feitas */
Route::get("/concluido", [AtividadesController::class,'lista_concluido'])->name('feito.lista_concluido');
/* Rota para página de perfil */
Route::get("/perfil", [PerfilController::class,'perfilShow'])->name('perfil.perfilShow');
/* Rota para atualizar perfil */
Route::post("/perfil_foto", [PerfilController::class,'FotoUpdate'])->name('perfil.FotoUpdate');
/* Rota para atualizar senha*/
Route::post("/perfil_senha", [PerfilController::class,'SenhaUpdate'])->name('perfil.SenhaUpdate');
/* Rota para página de vídeos gravados */
Route::get("/record", [RecordController::class,'recordShow'])->name('record.recordShow');
/* Rota para página da turma */
Route::get("/turma", [turmaController::class,'turmaShow'])->name('turma.turmaShow');
/* Rota para página adiminstrativa */
Route::get("/admin", [AdminController::class,'adminShow'])->name('admin.adminShow');
/* Form para adicionar a lista */
Route::post("/lista", [AdminController::class,'insertLista'])->name('lista.insertLista');
/* Form para adicionar aluno */
Route::post("/aluno", [AdminController::class,'insertAluno'])->name('aluno.insertAluno');
/* Form para adicionar vídeo */
Route::post("/video", [AdminController::class,'insertvideo'])->name('video.insertvideo');
});
