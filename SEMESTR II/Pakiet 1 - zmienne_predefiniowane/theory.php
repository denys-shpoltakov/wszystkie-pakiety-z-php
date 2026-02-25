<?php

/* Zmienne predefiniowane (superglobalne) w PHP

W PHP istnieją tzw. superglobals – specjalne tablice asocjacyjne dostępne w każdym miejscu skryptu
(bez użycia global).

Najczęściej używane przy pracy z formularzami i danymi użytkownika:

$_GET
$_POST
$_SESSION
$_COOKIE

Są to tablice asocjacyjne, czyli:

$_GET['nazwa_parametru'];
$_POST['nazwa_pola'];
$_SESSION['klucz'];
$_COOKIE['nazwa_cookie'];


$_GET - do czego służy?

$_GET służy do odbierania danych przekazanych w adresie URL (metoda GET).

Przykład adresu:

https://example.com/index.php?name=paniStarsza&age=31

Dane po znaku ? to parametry GET.

echo $_GET['name'];
echo $_GET['age'];

Jak to działa?
adres_strony?klucz=wartosc&klucz2=wartosc2
PHP automatycznie tworzy tablicę asocjacyjną:

$_GET = [
  'klucz' => 'wartosc',
  'klucz2' => 'wartosc2'
];

Kiedy używać?

* filtrowanie (np. ?page=2)
* wyszukiwarki (?search=php)
* przekazywanie ID (?id=15)
* paginacja

------------------------------------------------------------------------

$_POST - do czego służy?

$_POST służy do odbierania danych z formularza HTML przesłanych metodą POST.

Przykład formularza:

<form method="POST">
  <input type="text" name="username">
  <button type="submit">Wyślij</button>
</form>

W kodzie PHP:
echo $_POST['username'];

Różnica GET vs POST:

| GET                 | POST                   |
| ------------------- | ---------------------- |
| Dane w URL          | Dane niewidoczne w URL |
| Ograniczona długość | Większa ilość danych   |
| Do filtrowania      | Do formularzy          |


Kiedy używać POST?

* logowanie
* rejestracja
* formularze kontaktowe
* przesyłanie danych do bazy

Pamiętaj - zawsze sprawdzaj, czy pole istnienie.

if (isset($_POST['username'])) {
    echo $_POST['username'];
}

------------------------------------------------------------------------

$_SESSION - do czego służy?

$_SESSION przechowuje dane po stronie serwera pomiędzy kolejnymi odświeżeniami strony.

Działa dopóki:

* użytkownik nie zamknie przeglądarki
* sesja nie wygaśnie
* nie użyjesz session_destroy()

Aby używać sesji, na początku pliku PHP należy uruchomić:
session_start();

Przykład prostego logowania:

session_start();

$_SESSION['logged'] = true;

if ($_SESSION['logged']) {
    echo "Zalogowany";
}

------------------------------------------------------------------------

$_COOKIE - do czego służy?

$_COOKIE przechowuje dane po stronie użytkownika (w przeglądarce).

Session vs Cookie - różnice:

| SESSION            | COOKIE                  |
| ------------------ | ----------------------- |
| Po stronie serwera | Po stronie przeglądarki |
| Bezpieczniejsze    | Można podejrzeć         |

Tworzenie cookie:
setcookie("user", "starszaPani", time() + 3600);

W przypadku PHP czas liczymy w sekundach, a nie milisekundach jak w JavaScript.
Powyższy przykład oznacza, że ciasteczko zostało ustawione na godzinę.

*/

?>

