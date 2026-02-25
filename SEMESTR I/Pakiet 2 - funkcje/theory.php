<!-- 
 Funkcje


Co to jest funkcja?

Funkcja to fragment programu, który wykonuje określone działanie.
Można ją wielokrotnie wywoływać, przekazując różne dane.

Przykład funkcji PHP:

function add($a, $b) {
    return $a + $b;
}

function nazwaFunkcji($parametr1, $parametr2 = "domyślnie") {
    // ciało funkcji
    return $wartosc; // opcjonalnie
}


function — rozpoczyna definicję funkcji,
$parametr1 — nazwa parametru (zawsze z $),
return — zwraca wynik (jeśli nie ma return, funkcja zwróci NULL).


Co zwraca funkcja bez return? 

| Język          | Co się dzieje, gdy funkcja nie ma `return` | Typ zwracany |
| -------------- | ------------------------------------------ | ------------ |
| **PHP**        | Funkcja **zwraca wartość domyślną `NULL`** | `NULL`       |
| **JavaScript** | Funkcja **zwraca wartość `undefined`**     | `undefined`  |


Parametry vs argumenty

| W JS                                           | W PHP                                 |
| ---------------------------------------------- | ------------------------------------- |
| Parametr – zmienna w definicji funkcji         | Parametr – np. `$a`, `$b`             |
| Argument – wartość przekazywana przy wywołaniu | Argument – konkretna liczba lub tekst |


Różnice i podobieństwa z Javascript

| Zagadnienie        | JavaScript              | PHP                                   |
| ------------------ | ----------------------- | ------------------------------------- |
| Definicja          | `function nazwa() {}`   | `function nazwa() {}`                 |
| Zmienna w funkcji  | lokalna                 | lokalna                               |
| Return             | `return`                | `return`                              |
| Parametry domyślne | ES6: `function f(a=10)` | `function f($a=10)`                   |
| Typowanie          | dynamiczne              | dynamiczne, ale można jawnie rzutować |
| Koniec linii       | średnik ;               | średnik ;                             |
| Znaki tekstowe     | ' ', " "                | ' ', " ", interpolacja w "            |



PHP ma stan „niezdefiniowanej zmiennej” — ale to nie wartość, tylko ostrzeżenie wykonania,
PHP ma NULL — który oznacza brak wartości,
PHP ma isset() i empty(), żeby bezpiecznie sprawdzać istnienie zmiennych.

Przykład:
if (!isset($x)) {
    echo "Zmienna nie istnieje";
}


| Zagadnienie                                       | **JavaScript**                                                          | **PHP**                                                                                |
| ------------------------------------------------- | ----------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| **Interpolacja (wstawianie zmiennych do tekstu)** | działa tylko w **template literals** (backtick: `` ) z `${zmienna}`     | działa w **łańcuchach w cudzysłowie** (`" "`) – zmienne są interpolowane automatycznie |
| **Interpretacja znaków specjalnych**              |  \n, \t działają w " " i ``  (nie w ' ')                                | \n, \t działają tylko w " " (nie w ' ')                                                |
| **Brak interpolacji**                             | 'tekst' — literał tekstowy, bez wstawiania zmiennych                    | 'tekst'   — bez interpretacji i interpolacji zmiennych                                 |
| **Konkatenacja (łączenie tekstów)**               | +                                                                       | . (kropka)                                                                             |
| **Przykład interpolacji**                         |  `Cześć, ${name}!`                                                      | "Cześć, $imie!"                                                                        |
| **Przykład konkatenacji**                         | "Cześć, " + name + "!"                                                  | "Cześć, " . $imie . "!"                                                                |



----------------------------------------------------------
Przydatne źródła:
https://kursphp.com/rozdzial-3/funkcje/
https://www.php.net/docs.php 

-->
