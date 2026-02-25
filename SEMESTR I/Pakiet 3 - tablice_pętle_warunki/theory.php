 <!-- 

############################### TABLICE #######################

Tablice (ang. arrays) w PHP to uporządkowane, mutowalne struktury danych,
które mogą przechowywać wiele wartości pod jednym kluczem.
PHP rozróżnia tablice indeksowane (numeryczne) i asocjacyjne (z kluczami tekstowymi).

###################### Tworzenie tablic ######################

Tablica indeksowana:
$liczby = [10, 20, 30];

Tablica asocjacyjna:
$osoba = [
  "imie" => "Ala",
  "wiek" => 25,
  "miasto" => "Kraków"
];

Wypisanie tablicy:
print_r($liczby);
print_r($osoba);

###################### Dodawanie elementów ######################

Na koniec tablicy:
$liczby[] = 40; // automatycznie przypisze kolejny indeks
array_push($liczby, 50); // funkcja push
print_r($liczby); // [10, 20, 30, 40, 50]

Na początek tablicy:
array_unshift($liczby, 5);
print_r($liczby); // [5, 10, 20, 30, 40, 50]

###################### Usuwanie elementów ######################

array_pop($liczby); // usuwa ostatni element
array_shift($liczby); // usuwa pierwszy element

###################### Łączenie tablic ######################

$a = [1, 2, 3];
$b = [4, 5];
$c = array_merge($a, $b);
print_r($c); // [1, 2, 3, 4, 5]

###################### Wycinek tablicy ######################

$lista = [10, 20, 30, 40, 50];
$fragment = array_slice($lista, 1, 3);
print_r($fragment); // [20, 30, 40]

###################### Sortowanie ######################

sort($lista);        // sortuje rosnąco po wartościach
rsort($lista);       // sortuje malejąco
asort($osoba);       // sortuje tablicę asocjacyjną po wartościach
ksort($osoba);       // sortuje tablicę asocjacyjną po kluczach

###################### Sprawdzanie elementów ######################

in_array(20, $lista);      // true, jeśli element istnieje
array_key_exists("wiek", $osoba); // true, jeśli klucz istnieje
array_search(30, $lista);  // zwraca indeks znalezionego elementu lub false

###################### Filtrowanie i mapowanie ######################

$liczby = [1, 2, 3, 4, 5];

$podwojone = array_map(fn($x) => $x * 2, $liczby);
print_r($podwojone); // [2, 4, 6, 8, 10]

$duze = array_filter($liczby, fn($x) => $x > 3);
print_r($duze); // [4, 5]

###################### Redukcja ######################

$suma = array_reduce($liczby, fn($acc, $x) => $acc + $x, 0);
echo $suma; // 15

###################### Odwracanie ######################

$odwrocone = array_reverse($liczby);
print_r($odwrocone); // [5, 4, 3, 2, 1]

###################### Iteracja ######################

foreach ($osoba as $klucz => $wartosc) {
  echo "$klucz: $wartosc\n";
}

###################### Liczba elementów ######################

echo count($liczby); // 5


############################### STRINGI #######################

W PHP string to ciąg znaków ujęty w "" lub ''.
W "" działa interpolacja zmiennych (np. "$imie ma $wiek lat")
W '' wszystko jest traktowane dosłownie.

Przykład:
$tekst = "php jest super";

###################### Najważniejsze funkcje stringów ######################

strlen() – długość łańcucha
echo strlen($tekst); // 13

strtoupper(), strtolower()
echo strtoupper($tekst); // "PHP JEST SUPER"
echo strtolower($tekst); // "php jest super"

substr()
echo substr($tekst, 0, 3); // "php"
echo substr($tekst, 4, 4); // "jest"

strpos() – pozycja wystąpienia podciągu
echo strpos($tekst, "jest"); // 4

str_replace()
$nowy = str_replace("super", "świetny", $tekst);
echo $nowy; // "php jest świetny"

explode() – dzieli string na tablicę
$slowa = explode(" ", $tekst);
print_r($slowa); // ["php", "jest", "super"]

implode() – łączy tablicę w string
$polaczony = implode("-", $slowa);
echo $polaczony; // "php-jest-super"

trim()
echo trim("   test   "); // "test"

starts_with(), ends_with() (PHP 8+)
$str = "hello world";
var_dump(str_starts_with($str, "hello")); // true
var_dump(str_ends_with($str, "world"));   // true


############################### INSTRUKCJE WARUNKOWE #######################

if, elseif, else

$wiek = 20;

if ($wiek < 18) {
  echo "Niepełnoletni";
} elseif ($wiek < 65) {
  echo "Dorosły";
} else {
  echo "Senior";
}

###################### switch ######################

$kolor = "zielony";

switch ($kolor) {
  case "czerwony":
    echo "Stop!";
    break;
  case "zielony":
    echo "Idź!";
    break;
  default:
    echo "Nieznany kolor";
    break;
}


############################### OBSŁUGA WYJĄTKÓW #######################

try {
  if (true) {
    throw new Exception("Błąd testowy");
  }
} catch (Exception $e) {
  echo "Złapano wyjątek: " . $e->getMessage();
} finally {
  echo "Zawsze się wykona";
}


############################### PĘTLE #######################

###################### for ######################

for ($i = 0; $i < 5; $i++) {
  echo "Iteracja nr $i\n";
}

###################### while ######################

$licznik = 0;
while ($licznik < 3) {
  echo "Licznik = $licznik\n";
  $licznik++;
}

###################### do...while ######################

$x = 0;
do {
  echo "x = $x\n";
  $x++;
} while ($x < 3);

###################### foreach ######################

$liczby = [10, 20, 30];
foreach ($liczby as $liczba) {
  echo "Element: $liczba\n";
}

foreach z kluczami:
foreach ($osoba as $klucz => $wartosc) {
  echo "$klucz = $wartosc\n";
}

###################### break i continue ######################

for ($i = 1; $i <= 5; $i++) {
  if ($i == 3) continue; // pomija iterację
  if ($i == 5) break;    // przerywa pętlę
  echo $i . "\n";
}

###################### Różnice między pętlami ######################

for - gdy znasz liczbę iteracji
while - gdy liczba iteracji zależy od warunku
do...while - gdy chcesz wykonać kod przynajmniej raz
foreach - do iteracji po tablicach

###################### Przydatne źródła ######################

https://www.php.net/manual/en/index.php
https://www.w3schools.com/php/
https://kursphp.com/rozdzial-2/

 -->
