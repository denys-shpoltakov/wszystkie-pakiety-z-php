<!--
Zad. 1
Napisz program, który:
- Utworzy tablicę liczb od 1 do 5 (indeksowaną).
- Doda liczbę 6 na końcu (array_push albo $tab[]).
- Wstawi liczbę 0 na początek (array_unshift).
- Usunie pierwsze wystąpienie liczby 3 (użyj array_search + unset).
- Wypisze wynikową tablicę (print_r).

Zad. 2
Napisz program, który:
- Ma zdefiniowany tekst (string).
- Zamieni go na wielkie litery (strtoupper).
- Sprawdzi, czy zaczyna się od litery "A" (str_starts_with w PHP 8+ lub substr).
- Podzieli tekst na słowa (explode) i wypisze liczbę słów (count).

Zad. 3
Napisz program, który:
- Utworzy tablicę z liczbami od 100 do 104.
- Wypisze pierwszy i ostatni element tablicy:
  * pierwszy: $arr[0]
  * ostatni: end($arr) lub $arr[array_key_last($arr)]
(W PHP nie ma at() jak w JS, użyj powyższych funkcji.)

Zad. 4
Napisz program, który:
- Wypisze liczby 1..10 pętlą for.
- Wypisze liczby 10..1 pętlą while.
- W pętli for:
  - przerwij (break), gdy napotkasz 5,
  - pomijaj (continue) wypisywanie 3.

Zad. 5
Napisz program, który:
- Zdefiniuje funkcję checkDay($dzien): string.
- Użyj switch, aby zwrócić:
  * "Weekend" dla "sobota" lub "niedziela",
  * "Dzień roboczy" dla pozostałych dni pn-pt,
  * "Niepoprawny dzień" w innym przypadku.
- Wywołaj funkcję kilka razy i wypisz wyniki (echo).

Zad. 6
Napisz program, który:
- Ma zdefiniowany wejściowy string.
- Spróbuje przekonwertować go na liczbę całkowitą (intval lub filter_var).
- Jeśli konwersja się nie powiedzie, rzuć Exception("Podana wartość nie jest liczbą!") i przechwyć.
- W przeciwnym razie wypisz: "Podano poprawną liczbę: X".

Zad. 7
Utwórz kilka zmiennych różnych typów (int, string, array, stdClass).
- Wypisz ich wartość oraz typ (gettype, is_array).
- Dla tablicy i obiektu użyj print_r lub var_dump, aby zobaczyć strukturę.

Zad. 8
Napisz program, który:
- Ma wartość jako tekst (np. "123abc").
- Spróbuje przekonwertować ją na int (intval) i wypisze wynik oraz typ.
- Jeśli tekst nie zawiera wiodących cyfr (wynik 0 i brak '0' wejściowo), wypisz komunikat o błędzie.

Zad. 9
Napisz program, który:
- Przyjmie trzy parametry: $title, $author, $year.
- Połączy je w jeden napis, korzystając z interpolacji w "" (np. "Książka '$title' ...").
- Wypisze zdanie w stylu:
  "Książka 'Hobbit' została napisana przez J.R.R. Tolkiena w roku 1937."

Zad. 10
Napisz program, który:
- Utworzy zmienną $points i przypisze jej wartość 0.
- Doda 10 punktów (+=).
- Odejmie 3 punkty (-=).
- Pomnoży wynik razy 2 (*=).
- Wypisze końcową liczbę punktów (echo).

Zad. 11
Napisz program, który sprawdza, czy uczeń może wziąć udział w wycieczce szkolnej.
Zasady:
- Utwórz zmienną $wiek (np. 15).
- Utwórz zmienną $zgodaRodzicow (true/false).
- Uczeń może jechać, jeśli:
  * ma co najmniej 18 lat, lub
  * ma mniej niż 18 lat i $zgodaRodzicow === true.
- Wypisz:
  * "Uczeń może jechać na wycieczkę" albo
  * "Uczeń nie może jechać na wycieczkę".

Zad. 12
Utwórz zmienną $i = 1 (licznik) oraz $sum = 0.
Użyj pętli while, która działa dopóki $i <= 100.
W pętli:
- dodaj $i do $sum,
- zwiększ $i o 1.
Po pętli wypisz:
- "Koniec pętli while"
- "Suma wartości: <tu suma>".

Zad. 13
Zdefiniuj funkcję showProductsList(array $shoppingList): void.
- Funkcja ma wypisać:
  "Lista zakupów:"
   a następnie każdy produkt w nowej linii z myślnikiem, np. "- mleko".
- Utwórz tablicę $shopping z kilkoma produktami (np. "mleko", "chleb", "masło").
- Wywołaj showProductsList($shopping).
(Użyj foreach do iteracji.)

Zad. 14
Napisz funkcje:
- celsiusToFahrenheit(float $c): float   -> F = C * 9/5 + 32
- fahrenheitToCelsius(float $f): float   -> C = (F - 32) * 5/9
Sprawdź działanie:
- 20°C -> ok. 68°F
- 86°F -> ok. 30°C
Wypisz w formacie:
- "20\xB0C to 68\xB0F"
- "86\xB0F to 30\xB0C"

Zad. 15 — prosta walidacja e-maila (bez regexów)
Cel: łańcuchy znaków, proste if, tablica błędów, echo.
Założenia:
- Minimalna długość: 6 znaków.
- Musi zawierać '@'.
- '@' nie może być na początku ani na końcu.
Instrukcja:
- Utwórz stałą/zmienną $email z przykładową wartością.
- Utwórz pustą tablicę $errors = [].
- Dodawaj komunikaty, jeśli:
  * strlen($email) < 6,
  * strpos($email, '@') === false,
  * pozycja '@' to 0 lub ostatnia.
- Jeśli są błędy: wypisz "Błędy:" i każdą pozycję w nowej linii.
- W przeciwnym razie wypisz "Email poprawny". 

-->
