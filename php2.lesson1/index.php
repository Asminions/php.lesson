<?php

/**
 * Class Article - Класс выпущенной статьи
 */
class Article
{
    /**
     * @var $id - Идентификатор статьи
     * @var $title - Загаловок статьи
     * @var $content - Контент статьи
     * @var $colorTitle - Цвет заголовка
     */
    public $id;
    public $title;
    public $content;
    public $colorTitle;

    /**
     * Article constructor.
     * @param $id - Идентификатор статьи
     * @param $title - Загаловок статьи
     * @param $content - Контент статьи
     * @param $colorTitle - Цвет заголовка
     */
    public function __construct($id, $title, $content, $colorTitle)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->colorTitle = $colorTitle;

    }

    /**
     * метод вывода нового заголовка
     * @param $newTitle - новый заголовок
     */
    public function newTitle($newTitle)
    {
        $this->title = $newTitle;
        echo 'Просто привет';
    }

    /**
     * метод вывода нового цвета заголовка
     * @param $newColor - новый цвет заголовка
     */
    public function newColor($newColor)
    {
        $this->colorTitle = $newColor;
        echo 'red';
    }


    /**
     *Вывод информации на страницу полученной из функции getHtml().
     */
    public function view()
    {
        echo $this->getHtml();
    }

    /**
     * @return string - возвращение указанной информации в функцию
     */
    public function getHtml()
    {
        return "<h1 style='color: $this->colorTitle'>$this->title</h1><p>$this->content</p>";
    }


}

/**
 * Class NewArticle - класс красит цвет текста контента
 * отличается тем что красит цвет основного текста статьи.
 */
class NewArticle extends Article
{
    /**
     * NewArticle constructor.
     * @param $id - Идентификатор статьи
     * @param $title - Загаловок статьи
     * @param $content - Контент статьи
     * @param $colorTitle - Цвет заголовка
     * @param $colorText - Цвет текста
     */
    public function __construct($id, $title, $content, $colorTitle, $colorText)
    {
        $this->colorTxt = $colorText;
        parent::__construct($id, $title, $content, $colorTitle);
    }

    public function showHtml(){
        echo "<h1 style='color: $this->colorTitle'>$this->title</h1>
        <p style='color: $this->colorTxt'>$this->content</p>";
    }

}


$article = new Article(1, "Животные", 'Здесь будет текст о животных, которые будут жить спустя
1000 лет, но я о них пока не знаю, поэтому подожду 1000 лет и допишу...', 'black');
$article2 = new Article(2, 'Машины', "Эта статья о новейшем выпуске машины, - телепортационного 
характера, так как эта <b>машина похоже на подушку</b>, она выполняеет теже сонные-реалии, как подушка. Продолжение 
следует... ", 'Black');
$article3 = new Article(3, 'Молочные продукты', 'А вот эта статья оооООООчень интересная и правдивая, 
не покупайте молочные продукты в Магните, в одном из этих магазинах воняет постоянно алкоголем и протухшей рыбой, 
а молочные продукты дак вообще похожи на простоквашу, после вскрытия запах мертвичины, даже оладушек не испечь...
 Так что задумайтесь о том какие удивительные молочные продукты в помещении на букву М...', 'red');

$article4 = new NewArticle(1, "Животные", 'Здесь будет текст о животных, которые будут жить спустя
1000 лет, но я о них пока не знаю, поэтому подожду 1000 лет и допишу...', 'black','red');
$article5 = new NewArticle(2, 'Машины', "Эта статья о новейшем выпуске машины, - телепортационного 
характера, так как эта <b>машина похоже на подушку</b>, она выполняеет теже сонные-реалии, как подушка. Продолжение 
следует... ", 'Black','orange');
$article6 = new NewArticle(3, 'Молочные продукты', 'А вот эта статья оооООООчень интересная и правдивая, 
не покупайте молочные продукты в Магните, в одном из этих магазинах воняет постоянно алкоголем и протухшей рыбой, 
а молочные продукты дак вообще похожи на простоквашу, после вскрытия запах мертвичины, даже оладушек не испечь...
 Так что задумайтесь о том какие удивительные молочные продукты в помещении на букву М...', 'red',
    'orange');

$article->view();
$article2->view();
$article3->view();
echo "<hr>";
$article4->showHtml();
$article5->showHtml();
$article6->showHtml();
echo "<hr>";

echo "<h3>Задание №5.	Дан код:</h3>";

class A {
    public function foo() {
        // Задаём статическое св-ва класса А
        static $x = 0;
        // Выводим префиксный инкримент
        echo ++$x;
    }
}
// Новые объекты класса А
$a1 = new A();
$a2 = new A();
echo "Вызов функции foo, - объекта a1. <br>";
$a1->foo();
echo "<br>Вызов функции foo, - объекта a2.<br>";
$a2->foo();
echo "<br>Вызов функции foo, - объекта a1. <br>";
$a1->foo();
echo "<br>Вызов функции foo, - объекта a2.<br>";
$a2->foo();
echo "<hr>";


/**
 * поменял буквы чтобы небыло проблем.
 */
echo "<h3>  Задание №6.	 Немного изменим п.5</h3>";
class C {
    public function foo() {
        // Задаём статическое св-ва класса C или D
        static $x = 0;
        // Выводим префиксный инкримент
        echo ++$x;
    }
}

/**
 * Class D - наследник класса С
 */
class D extends C {
}
$c1 = new C();
$d1 = new D();
echo "Вызов функции foo, - объекта с1 класса С. <br>";
$c1->foo();
echo "<br>Вызов функции foo, - объекта d1 класса D <br>";
$d1->foo();
echo "<br>Вызов функции foo, -  объекта с1 класса С.<br>";
$c1->foo();
echo "<br>Вызов функции foo, - объекта d1 класса D<br>";
$d1->foo();
echo "<hr>";

echo "<h3>Задание №7.	* Дан код:</h3>";

/**
 * Class E
 * 7-ое задание одинаковое с 6-ым. не нашел 10 отличий.
 */
class E {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class F extends E {
}
$e1 = new E;
$f1 = new F;
echo "Вызов функции foo, - объекта e1 класса E. <br>";
$e1->foo();
echo "<br>Вызов функции foo, - объекта f1 класса F <br>";
$f1->foo();
echo "<br>Вызов функции foo, -  объекта e1 класса E.<br>";
$e1->foo();
echo "<br>Вызов функции foo, - объекта f1 класса F<br>";
$f1->foo();
echo "<hr>";






