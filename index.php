<!--Написать функцию которая проверяет является треугольник прямоугольным. Треугольник задается тремя точками.-->
<form method="post">
    <p>Введите координату X первой вершины треугольника</p>
    <input type="text" name="x1"/>
    <p>Введите координату Y первой вершины треугольника</p>
    <input type="text" name="y1"/>
    <p>Введите координату X второй вершины треугольника</p>
    <input type="text" name="x2"/>
    <p>Введите координату Y второй вершины треугольника</p>
    <input type="text" name="y2"/>
    <p>Введите координату X третьей вершины треугольника</p>
    <input type="text" name="x3"/>
    <p>Введите координату Y третьей вершины треугольника</p>
    <input type="text" name="y3"/><br>
    <input type="submit" value="Проверить">
</form>
<?php

function rightTriangle($x1, $y1, $x2, $y2, $x3, $y3)
{
    $a = sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);
    $b = sqrt(($x3 - $x1) ** 2 + ($y3 - $y1) ** 2);
    $c = sqrt(($x3 - $x2) ** 2 + ($y3 - $y2) ** 2);
    return $b ** 2 + $c ** 2 == $a ** 2;
}

if (!empty($_POST['x1']) &&
    !empty($_POST['y1']) &&
    !empty($_POST['x2']) &&
    !empty($_POST['y2']) &&
    !empty($_POST['x3']) &&
    !empty($_POST['y3'])
) {
    $result = rightTriangle(intval($_POST['x1']), intval($_POST['y1']), intval($_POST['x2']),
        intval($_POST['y2']), intval($_POST['x3']), intval($_POST['y3']));
    if ($result === false) {
        echo 'Треугольник не является прямоугольным';
    } else {
        echo 'Треугольник является прямоугольным';
    }
}