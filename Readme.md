# Atsakymai

```php
Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1');
```
Ši funkcija duoda rezultatą 6. Funkcijoje nurodyta, kad priimami tik 'integer' tipo parametrai, tačiau šiame faile nėra deklaruota, kad 'strict_types=1' ir reiktų atsižvelgti į gaunamo parametro tipą. Todėl PHP pirmiausia, jei įmanoma, verčia neteisingo tipo reikšmes į numatytąjį tipą. Šiuo atveju antrasis parametras yra 'float', o trečiasis 'string', kurie nėra 'integer' tipo, todėl pakeičiami į sveikuosius skaičius. 2.2 yra apvalinamas žemyn iki artimiausio sveikojo skaičiaus t.y. 2, o '1' iš teksto pakeičiamas į sveikąjį skaičių t.y. 1, todėl funkcija grąžina 3+2+1=6.

```php
Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');
```
Kitaip nei faile, kuriame yra funkcija *Nfq\Akademija\Soft\calculateHomeWorkSum()*, funkcijos *Nfq\Akademija\Strict\calculateHomeWorkSum()* faile yra deklaruota, kad 'strict_types=1', todėl vykdant funkciją su tais pačiais parametrais gaunama klaida:

**Fatal error: Uncaught TypeError: Argument 2 passed to Nfq\Akademija\Strict\calculate() must be of the type integer, float given ....... Next TypeError: Argument 3 passed to Nfq\Akademija\Strict\calculate() must be of the type integer, string given .......** 

Šiuo atveju perduodamų parametrų tipai turi tiksliai sutapti su nurodytais, kitaip grąžinama 'TypeError' klaida. 