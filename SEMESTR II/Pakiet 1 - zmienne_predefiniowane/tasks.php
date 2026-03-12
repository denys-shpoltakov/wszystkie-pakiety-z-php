<?php

/*

Zad. 1
Dlaczego nie powinno się trzymać hasła w $_GET?

Hasło będzie widać w url

Zad. 2
Czym różni się $_SESSION od $_COOKIE pod względem bezpieczeństwa?

W sesjach dane są przechowywane na serwerze, a cookie w przegłądarce

Zad. 3
Co się stanie, jeśli zapomnisz session_start()?

nie można będzie korzystać z zmiennej $_SESSION

Zad. 4
Dlaczego dane z $_POST trzeba walidować?

Dlatego że walidacja chroni aplikację naprzykład od SQL-injekcji

Zad. 5
Utwórz plik index.php, który wyświetli tekst:
Witaj, [imię pobrane z paska adresu].



Zad. 6
Użyj tej samej zmiennej predefiniowanej do pobrania
liczby z paska adresu. Do pobranej liczby dodaj i przypisz 15,
a następnie wyświetl zarówno pobraną liczbę, jak i wynik po
zwiększeniu.

Zad. 7
Stwórz prosty formularz, który będzie pobierał od użytkownika
imię oraz wiek. Po kliknięciu wyślij, wyświetl w nagłówku informację
Cześć, [pobrane imię]. Cieszę się, że masz już [wiek].

Zad. 8
Zrób licznik odwiedzin strony. Przy każdym odświeżeniu strony zwiększaj
wartość licznika o 1. Wyświetl w stopce strony informację:
Strona odwiedzona [wartość licznika] razy.

Zad. 9
Stwórz formularz do wysyłki imienia. Zapisz imię do sesji, a następnie
wyświetl je na osobnej stronie w formie powitania:
Witaj, [imię pobrane z sesji]

Zad. 10
Stwórz nowy licznik strony, ale tym razem skorzystaj ze zmiennej predefiniowanej
odpowiedzialnej za ustawienie ciasteczka. Ciasteczko powinno być ważne 24h.


*/
