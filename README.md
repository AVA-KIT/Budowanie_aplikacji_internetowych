# Budowanie_aplikacji_internetowych_cz_1
Szkolenie z budowania aplikacji internetowych - Zachodniopomorska Szkoła Biznesu w Szczecinie - Zadania z PHP - Zmienne i operacje, pętle i instrukcje warunkowe, operacje na tablicach i stringach, funkcje

Zadanie 1 -
Napisz program, który wyświetli twoje. Zapisz go w pliku name.php

Zadanie 2 -
Stwórz program, w którym zdefiniujesz 4 zmienne, po jednej dla każdego wcześniej poznanego typu. Przypisz im wartości: true , 1, 1.0 i '1’ Następnie wyświetl je za pomocą funkcji var_dump. 
Zapisz go w pliku vars.php.

Zadanie 3 -
Jaki będzie wynik poniższych
a. 2 * 2 + 2
b. 3 + 2 * 2
c. 2 * 3 ** 4
d. 3 ** 4 * 2 ** 2

Zadanie 4 -
Zmodyfikuj program z pierwszego zadania tak by:
a.Twoje imię było zapisane w zmiennej
b.Program wyświetlał napis: Witaj {tutaj twoje imię}!
Użyj poznanych operatorów.

Zadanie 5 -
Napisz program, który będzie sprawdzał parzystość liczby.
Dla liczb parzystych program ma wypisać:
Liczba X jest parzysta!
Dla liczb nieparzystych program ma wypisać:
Liczba X jest nieparzysta!
Zapisz go w pliku ods.php.

Zadanie 6 -
Napisz prostą grę w statki na planszy o rozmiarach 5 x 5. Rozmieszczenie statków zdefiniuj bezpośrednio w kodzie. Na planszy należy umieścić: 1 statek potrójny, 1 podwójny i 1 pojedynczy. 
Gra na wejściu przyjmie 2 parametry tj. koordynaty strzału:
php ships.php B 3
w odpowiedzi ma podać informację czy na zadanej pozycji jest trafienie czy pudło w następującej postaci:
(Trafienie|Pudło) dla pola B3 
Parametry wejściowe skryptu są w tablicy: argv począwszy od indeksu 1.

Zadanie 7 -
Napisz 4 skrypty: errors.php, warnings.php, notices.phporaz syntax.php.
Każdy ze skryptów niech wywoła jeden z poznanych typów błędów:
error.php-> E_ERROR
warnings.php-> E_WARNING
notices.php-> E_NOTICE
syntax.php-> E_PARSE

Zadanie 8 -
Napisz program, który będzie liczył pole i obwód koła o zadanej przez użytkownika średnicy podanej w centymetrach.
Program zapisz w pliku wheel.php.
Twój program musi skorzystać ze stałej.
Wynik zaprezentuj na ekranie w następującej postaci:
Koło o średnicy X ma obwód równy OB cm i pole równe PL cm2.

Zadanie 9 -
Napisz program, który ustali którą pizzę bardziej opłaca się kupić.
Program przyjmie 2 pary wartości wejściowych: średnicę pizzy i jej cenę.
Program powinien wyświetlić informację w postaci:
Kup pizzę X cm za Y zł.
Program zapisz w pliku pizza.php

Zadanie 10 -
Przepisz program z zadania 4 tak by korzystał z poznanej właśnie pętli.
Program zapisz w pliku pizza2.php

Zadanie 11 -
Napisz program, który wypisze imiona wszystkich studentów z poniższej tablicy:
$students= [
['Ala' => 'Kowalska', 'Andrzej' => 'Fidor'],
['Ela' => 'Nowak', 'Janusz' => 'Pospolity'],
];
Program zapisz w pliku students_name.php

Zadanie 12 -
Napisz program, który wypisze wszystkie liczby parzyste w przedziale od Y do X. Y i X będą podane jako parametry wejściowe skryptu.
Każdą kolejną liczbę parzystą wpisz w nowej linii.
Program zapisz w pliku odd_numbers.php.

Zadanie 13 -
Napisz program, który wypisze na ekran wszystkie przekazane na wejściu parametry. Każdy parametr powinien być wypisany w nowej linii.
Do realizacji tego zadania program musi wykorzystać dowolną pętlę.
Program zapisz w pliku params.php.

Zadanie 14 -
Napisz program, który wypisze na ekran wszystkie przekazane parametry oraz ich długość. 
Program ma pominąć wyświetlanie tych parametrów, które nie są napisami. Skorzystaj z funkcji gettype-> http://php.net/manual/en/function.gettype.php
Program zapisz w pliku lengths.php.

Zadanie 15 -
Napisz program, który sprawdzi podane na wejściu napisy, czy mogą być poprawnym adresem email. 
Przykładowe:
-prawidłowe adresy: ala@kot.pl; ala@a.com
-błędne adresy: ala@.pl; @Janusz_com
Program zapisz w pliku emails.php.

Zadanie 16 -
Napisz program, który z podanego na wejściu napisu usunie wszystkie samogłoski. 
Program zapisz w pliku vowel.php.

Zadanie 17 -
Napisz program, który dla podanego na wejściu zakresu liczb całkowitych od X do Y (podanego w postaci X;Y) stworzy 2 tablice -jedną na liczby parzyste a drugą na liczby podzielne przez 3.
Program zapisz w pliku oddsAndThrees.php

Zadanie 18 -
Napisz funkcję, która będzie sumowała dwie liczby całkowite a i b.
Następnie korzystając z tej funkcji napisz program, który będzie sumował podane na wejściu wartości.
Program zapis w pliku sum.php

Zadanie 19 -
Napisz funkcję, która będzie przyjmowała na wejściu podstawę i wykładnik potęgi a na wyjściu będzie podawała wynik potęgowania. Następnie napisz program, który będzie używał tej funkcji na podanych na wejściu parametrach. 
Zapisz go w pliku power.php.

Zadanie 20 -
Napisz program, który w sposób rekurencyjny wypisze wszystkie liczby całkowite od 1 do X, gdzie X zostanie podane jako parametr wejściowy.
Zapisz program w pliku reccuring.php

Zadanie 21 -
Korzystając z danych z pliku students.php ustal który ze studentów jest najmłodszy.
Zapisz program w pliku rok.php

Zadanie 22 -
Napisz program, który zamieni liczbę na jej reprezentację tekstową.
666 -> sześćset sześćdziesiąt sześć
1000000 -> jeden milion
Program zapisz w pliku stringify.php
123,45 -> sto dwadzieścia trzy i czterdzieści pięć setnych*
