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