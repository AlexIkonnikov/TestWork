<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <title>Document</title>
</head>
<body class="page">
    <header class="main-header">
        <div class="main-header__wrapper">
            <a class="main-header__logo" href="#"><img src="img/logo.png" alt="Логотип Банка"></a>
            <ul class="main-header__number-list">
                <li>8-800-100-5005</li>
                <li>+7 (3452) 522-000</li>
            </ul>
        </div>
        <nav class="main-header__navigation navigation">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="#" class="navigation__link">Кредитные карты</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link navigation__link--active">Вклады</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">Дебетовая карта</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">Страхование</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">Друзья</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link">Интернет-банк</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content">

        <ul class="bread-crumbs">
            <li class="bread-crumbs__item"><a href="#" class="bread-crumbs__link">Главная</a></li>&ndash;
            <li class="bread-crumbs__item"><a href="#" class="bread-crumbs__link">Вклады</a></li>&ndash;
            <li class="bread-crumbs__item"><a class="bread-crumbs__link bread-crumbs__link--active">Калькулятор</a></li>
        </ul>

        <form class="form main-content__form" method="post" action="calc.php">
            <fieldset class="form__fieldset">
                <legend class="form__heading">Калькулятор</legend>
                <label class="form__date"><p>Дата оформления вклада</p><input type="text" class="form__place" id="datepicker" name="date" id="start__day"></label>
                <label class="form__sum"><p>Сумма вклада</p><input type="number" min="1000" max="3000000" class="form__place" id="form__place1" name="start_sum" value="10000"><div class="form__range-wrapper"><input type="range" min="1000" max="3000000" class="form__range" id="form__range1"></div></label>
                <label class="form__time">
                    <p>Срок вклада</p>
                    <select class="form__select" name="time_depo">
                        <option  value="12">1 год</option>
                        <option  value="24">2 года</option>
                        <option  value="36">3 года</option>
                        <option  value="48">4 года</option>
                        <option  value="60">5 лет</option>
                     </select>
                </label>
                <label class="form__add">
                    <p>Пополнение вклада</p>
                    <label><input type="radio" name="add" value="0" checked class="no">Нет</label>
                    <label><input type="radio" name="add" value="1" class="yes">Да</label>
                </label>
                <label class="form__add-sum"><p>Сумма пополнение вклада</p><input type="number" min="1000" max="3000000" id="form__place2" class="form__place" name="summadd" value="10000" disabled><div class="form__range-wrapper"><input type="range" min="1000" max="3000000" id="form__range2" class="form__range" disabled></div></label>
                <div class="form__wrapper">
                    <p class="form__result">Результат:  </p>
                    <input type="submit" value="Рассчитать" class="form__submit">
                </div>
            </fieldset>
        
        </form>
    </main>
    <footer class="main-footer">
        <nav class="main-footer__nav">
            <ul class="main-footer__list">
                <li class="main-footer__item"><a class="main-footer__link" href="#">Кредитные карты</a></li>
                <li class="main-footer__item"><a class="main-footer__link" href="#">Вклады</a></li>
                <li class="main-footer__item"><a class="main-footer__link" href="#">Дебетовая карта</a></li>
                <li class="main-footer__item"><a class="main-footer__link" href="#">Страхование</a></li>
                <li class="main-footer__item"><a class="main-footer__link" href="#">Друзья</a></li>
                <li class="main-footer__item"><a class="main-footer__link" href="#">Интернет-банк</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>