1. Nella cartella RESOURCES -> VIEWS create le cartelle: Layouts & Partials;

2. Nella cartella Layouts ho creato il file app.blade.php in cui ho costruito l'html di base, con i tags header, main e footer, e lo stile CSS.

3. Nella cartella VIEWS ho eliminato il file welcome.blade.php e creati sia il file home.blade.php sia il file comics.blade.php

4. Nella cartella ROUTES, nel file web.php:
    -nel metodo view() del return della prima Route, ho sostituito il nome del file, da welcome in home, e le ho assegnato il nome home [con il metodo name()];
    -ho creato una seconda Route, sempre con metodo get, per l'url comics, a cui ho assegnato il nome comics.

5. Nella cartella Partials ho creato i files header.blade.php & footer.blade.php che ho poi incluso in app.blade.php [@include('nome_cartella.nome_file')].
    Nel file header ho inserito i links Home e Comics (i cui url sono stati collegati, nell'href, tramite il metodo {{ route('nome_url') }} con le rispettive Routes::get del file web.php);
    Nel footer ho inserito il contenuto 

6. In app.blade.php, nel main, ho sfruttato il metodo @yield('content') come segnaposto, così da inserire il contenuto in base al link su cui si clicca.

7. Ho collegato l'url del link Home nell'header con il rispettivo file home.blade.php, che ha esteso il file app.blade.php [@extends('layouts.app')], così da inserire il suo contenuto mediante il metodo @section('content')//@endsection
[N.B. il nome_segnaposto deve essere identico a quello dello @yield(), nel main di app.blade.php, in cui si vuole sostituire il contenuto]

8. Ho collegato l'url del link Comics nell'header con il rispettivo file comics.blade.php, che ha esteso il file app.blade.php [@extends('layouts.app')], così da inserire il suo contenuto mediante il metodo @section('content')//@endsection
[N.B. il nome_segnaposto deve essere identico a quello dello @yield(), nel main di app.blade.php, in cui si vuole sostituire il contenuto]

9. Ho sostituito nel <title></title> del file app.blade.php, mediante il metodo @yield('title'), il nome della pagina da visualizzare nel browser, assegnando nei file home.blade.php & comics.blade.php il rispettivo sostituto con il metodo @section('title', 'nome_sostitutivo')
[N.B. per le stringhe è possibile assegnare 2 parametri a @section(), dove il primo paramentro corrisponde al nome del segnaposto, in questo caso 'title', lo stesso nello @yeld(), il secondo parametro è il valore che andrà a sostituire il nome del segnaposto]

10. DOPO AVER INSTALLATO IL PACK: composer require pacificdev/laravel_9_preset
BOOTSTRAP: php artisan preset:ui bootstrap
NODE_MODULES: npm install
All'interno del file web.php, nella Route::get(...)->comics, ho creato una variabile per leggere l'array del file comics., inserito nella cartella CONFIG, tramite il metodo config('nome_file').

Successivamente, affinchè potessi leggerne i valori nella pagina comics.blade.php, in view('...') ho assegnato come secondo parametro il metodo compact('nome_variabile')
[MODO 2: come secondo parametro posso inserire un array ['key' => $variabile] (stessa di config)]

11. Nel file app.blade.php prima del <title> ho sfruttato la direttiva @vite per collegarmi il file app.js [@vite('resources/js/app.js')]

12. Ho applicato le classi bootstrap dove necessario & aggiunto altre classi creando poi dei fogli di stile scss nella cartella RESOURCES->SCSS->PARTIALS ed importandomi tutti questi file nel file generale app.scss (RESOURCES->SCSS) [@use './partials/nome_file';]

13. Nel file comics.blade.php ho sfruttato il ciclo Foreach per ciclare l'array passato come parametro al metodo view nella Route::get->comics.
    @foreach($array as $elemento) // @endforeach
    (N.B. Per prendere i valori all'interno dell'array: $elemento['chiave'])

14. Avendo salvato una cartella IMAGE nella cartella RESOURCES, nel file header.blade.php, per recuperare l'immagine del logo, è stato necessario usare il metodo Vite::asset(), che restituirà l'URL per una determinata risorsa:
    [<img src="{{Vite::asset('resoruces/image/nome_file')}}" alt="..." />]