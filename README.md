In this PHP code, I implemented a Calculator trait to provide fundamental mathematical operations such as addition, subtraction, multiplication, division, and square root calculation. I also included specific methods to compute the area, perimeter, and diagonal of a rectangle, utilizing the basic arithmetic methods within the trait.

I then created a Rettangolo class that uses the Calculator trait. This class has two private properties: base and height, which are initialized through the constructor. The class includes three public methods:

getArea(), which calculates and returns the area of the rectangle.
getPerimetro(), which calculates and returns the perimeter.
getDiagonale(), which calculates and returns the diagonal using the Pythagorean theorem.
Finally, I instantiated a Rettangolo object with base 344 and height 33 and printed its area, perimeter, and diagonal. This structure demonstrates code reusability through traits and encapsulation in the class design.



-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


In questo codice PHP, ho implementato un trait chiamato Calculator per fornire operazioni matematiche di base come addizione, sottrazione, moltiplicazione, divisione e radice quadrata. Inoltre, ho aggiunto metodi specifici per calcolare area, perimetro e diagonale di un rettangolo, sfruttando le operazioni aritmetiche definite nel trait.

Successivamente, ho creato una classe Rettangolo che usa il Calculator. Questa classe ha due proprietà private: base e altezza, inizializzate tramite il costruttore. Ho poi definito tre metodi pubblici:

getArea(), che calcola e restituisce l'area del rettangolo.
getPerimetro(), che calcola e restituisce il perimetro.
getDiagonale(), che calcola e restituisce la diagonale sfruttando il teorema di Pitagora.
Infine, ho istanziato un oggetto Rettangolo con base 344 e altezza 33, stampando la sua area, perimetro e diagonale. Questo approccio dimostra riutilizzo del codice tramite il trait e incapsulamento nella progettazione della classe.
