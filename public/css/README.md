<h1>mi(Martin and Iva) css library</h1>

<h2>Амииии Документация:</h2>

<h2>Задължително е да се използва mi-config.css файла, защото от него зависят основни стойности, които mi.css изполузва! Стойностите в него са описани чрез css variables. Минималните стойности които са нужни са:</h2>



    :root {
      --primary-color: основен цвят на сайта;
      --primary-hover-color: по-тъмен основен цвят на сайта;
      --success-color: цвят за успех;
      --success-hover-color: по-тъмен цвят за успех;
      --warning-color: цвят за предупреждение;
      --warning-hover-color: по-тъмен цвят за предупреждение;
      --danger-color: цвят за опасност;
      --danger-hover-color: по-тъмен цвят за опасност;
      --info-color: цвят за информация;
      --info-hover-color: по-тъмен цвят за информация;
      --white-color: #ffffff;
      --gray-color: някакав сив цвят;
      --rem: 16px;
      --nav-height: височина на навигацията в rem!;
      --header-desktop-background-image: url(път до изображение);
      --header-notebook-background-image: url(път до изображение);
      --header-tablet-background-image: url(път до изображение);
      --header-mobile-background-image: url(път до изображение);
      --main-background-image: url(път до изображение);
      --btn-nav-max-height: максимална височина за бутони в навигацията в мерна единица vw;
      --footer-gap: gap свойството за сайта, задължително в rem;
    }




<h2>Задължителни класове за всяка страница</h2>
<table>
  <tr>
    <th>&nbsp; &nbsp; &nbsp; &nbsp; Име на клас &nbsp; &nbsp; &nbsp; &nbsp; </th>
    <th>Описание</th>
  </tr>
  <tr>
    <td>.mi-layout</td>
    <td>Слага се задължително на div елемента, непосредствено след body!<br>Този клас се слага на елемент който играе ролята wrapper за цялата страница.<br>По този начин навигация, хедър и футър<br>ще са винаги респонсив и подредени правилно.</td>
  </tr>
  <tr>
    <td>.mi-navbar</td>
    <td>Слага се на елемент, който е предвиден за навигация.<br>В него трябва да има <b><i>ul</i></b> елементи, не повече от едно ниво на вътре!<br>Възможно е да се ползват и dropdown менюта.</td>
  </tr>
  <tr>
    <td>.mi-header</td>
    <td>Слага се задължително на header елемента!</td>
  </tr>
  <tr>
    <td>.mi-main</td>
    <td>Слага се задължително на main елемента!</td>
  </tr>
  <tr>
    <td>
      .mi-footer
    </td>
    <td>Слага се задължително на footer елемента в страницата!</td>
  </tr>
  <tr>
    <td>Снипет за копиране</td>
<td>

    <body>
      <div class="mi-layout">

        <nav class="mi-navbar"></nav>

        <header class="mi-header"></header>

        <main class="mi-main"></main>

        <footer class="mi-footer"></footer>

      </div>
    <body>

</td>
  </tr>
</table>

<h2>Полезни</h2>
<table>
  <tr>
    <th>&nbsp; &nbsp; &nbsp; &nbsp; Име на клас &nbsp; &nbsp; &nbsp; &nbsp; </th>
    <th>Описание</th>
  </tr>
  <tr>
    <td>.mi-icon</td>
    <td>Все още се разработва.</td>
  </tr>
</table>

<h2>Бутони</h2>
<table>
  <tr>
    <th>Име на клас</th>
    <th>Описание</th>
  </tr>
  <tr>
    <td>mi-btn-primary</td>
    <td>Бутон (a или button елемент)<br>който семантично е основен бутон за сайта.</td>
  </tr>
  <tr>
    <td>mi-btn-success</td>
    <td>Бутон (a, button)<br>който семантично е за успешно дествие.</td>
  </tr>
  <tr>
    <td>mi-btn-warning</td>
    <td>Бутон (a, button)<br>който семантично е за предупреждение/повишено внимание.</td>
  </tr>
  <tr>
    <td>mi-btn-danger</td>
    <td>Бутон (a, button)<br>който семантично е за опасно действие.</td>
  </tr>
  <tr>
    <td>mi-btn-info</td>
    <td>Бутон (a, button)<br>който семантично води до информация за нещо или страница за нещото.</td>
  </tr>
  <tr>
    <td>mi-btn-link</td>
    <td>Бутон (a, button)<br>който семантично представя анкар таг(линк).</td>
  </tr>
  <tr>
    <td>mi-btn-nav</td>
    <td>Бутон (a, button).<br>Ползва се в навигационното меню.<br>Следва стиловете от темата на сайта.<br>Ползва се само в nav елемент с клас .mi-navbar</td>
  </tr>
  <tr>
    <td>mi-btn-footer</td>
    <td>Бутон (a, button).<br>Ползва се във футъра на сайта.<br>Следва стиловете от темата на сайта.<br>Ползва се само във footer елемент с клас .mi-footer</td>
  </tr>
</table>

<h2>Полезни за навигацията</h2>
<table>
  <tr>
    <th>&nbsp; &nbsp; &nbsp; &nbsp; Име на клас &nbsp; &nbsp; &nbsp; &nbsp; </th>
    <th>Описание</th>
  </tr>
  <tr>
    <td>.mi-search-input-nav</td>
    <td>Ако има нужда от търсачка в навигацията, това е правилният клас.<br>Слага се форма в li елемент.<br>В тази форма се слага input със тип search.<br>Логично е да се използва и бутонче за изпращане на формата,<br>което е прието да ползва класа .mi-search-button-nav.</td>
  </tr>
  <tr>
    <td>.mi-search-button-nav</td>
    <td>Стилизира бутона за изпращане на формата за търсене<br>в навигационното меню.</td>
  </tr>
  <tr>
    <td>#haburger</td>
    <td>Това id бива сложено на елемент input от тип checkbox.<br>Позволява контрола върху навигацията само със CSS,<br>когато има нужда от респонсив екстри.</td>
  </tr>
  <tr>
    <td>#hamburger-button</td>
    <td>Слага се на обикновен див елемент.<br>Важното е да се сложат 3 на брой празни дива в текущият.<br>Така ще бъдат стилизирани чертичките на хамбургер бутона.</td>
  </tr>
  <tr>
    <td>.mi-dropdown-nav</td>
    <td>Нужно е да покажа примерен код за този клас!</td>
  </tr>
  <tr>
    <td>.mi-dropdown-content-nav</td>
    <td>Нужно е да покажа примерен код за този клас!</td>
  </tr>
</table>

<h2>Контейнери</h2>
<table>
  <tr>
    <th>&nbsp; &nbsp; &nbsp; &nbsp; Име на клас &nbsp; &nbsp; &nbsp; &nbsp; </th>
    <th>описание</th>
  </th>
  <tr>
    <td>
      .mi-column-for-desktop
    </td>
    <td>Елементите в този елемент ще са подредени в 1 колона,<br>когато резолюцията е за desktop.</td>
  </tr>
  <tr>
    <td>
      .mi-?-columns-for-desktop
    </td>
    <td>Елементите в този елемент ще са подредени в ? колони,<br>където ? може да е между 2 и 12,<br>когато резолюцията е за desktop.</td>
  </tr>
  </tr>
  <tr>
    <td>
      .mi-row-for-desktop
    </td>
    <td>Елементите в този елемент ще са подредени в 1 ред,<br>когато резолюцията е за desktop.</td>
  </tr>
  <tr>
    <td>
      .mi-?-rows-for-desktop
    </td>
    <td>Елементите в този елемент ще са подредени в ? реда,<br>където ? може да е между 2 и 10,<br>когато резолюцията е за desktop.</td>
  </tr>
  <tr>
    <td>
      .mi-column-for-notebook
    </td>
    <td>Елементите в този елемент ще са подредени в 1 колона,<br>когато резолюцията е за notebook.</td>
  </tr>
  <tr>
    <td>
      .mi-?-columns-for-notebook
    </td>
    <td>Елементите в този елемент ще са подредени в ? колони,<br>където ? може да е между 2 и 12,<br>когато резолюцията е за notebook.</td>
  </tr>
  <tr>
    <td>
      .mi-row-for-notebook
    </td>
    <td>Елементите в този елемент ще са подредени в 1 ред,<br>когато резолюцията е за notebook.</td>
  </tr>
  <tr>
    <td>
      .mi-?-rows-for-notebook
    </td>
    <td>Елементите в този елемент ще са подредени в ? реда,<br>където ? може да е между 2 и 10,<br>когато резолюцията е за notebook.</td>
  </tr>
  <tr>
    <td>
      .mi-column-for-tablet
    </td>
    <td>Елементите в този елемент ще са подредени в 1 колона,<br>когато резолюцията е за tablet.</td>
  </tr>
  <tr>
    <td>
      .mi-?-columns-for-tablet
    </td>
    <td>Елементите в този елемент ще са подредени в ? колони,<br>където ? може да е между 2 и 12,<br>когато резолюцията е за tablet.</td>
  </tr>
  <tr>
    <td>
      .mi-row-for-tablet
    </td>
    <td>Елементите в този елемент ще са подредени в 1 ред,<br>когато резолюцията е за tablet.</td>
  </tr>
  <tr>
    <td>
      .mi-?-rows-for-tablet
    </td>
    <td>Елементите в този елемент ще са подредени в ? реда,<br>където ? може да е между 2 и 10,<br>когато резолюцията е за tablet.</td>
  </tr>
  <tr>
    <td>
      .mi-column-for-mobile
    </td>
    <td>Елементите в този елемент ще са подредени в 1 колона,<br>когато резолюцията е за tablet.</td>
  </tr>
  <tr>
    <td>
      .mi-?-columns-for-mobile
    </td>
    <td>Елементите в този елемент ще са подредени в ? колони,<br>където ? може да е между 2 и 12,<br>когато резолюцията е за mobile.</td>
  </tr>
  <tr>
    <td>
      .mi-row-for-mobile
    </td>
    <td>Елементите в този елемент ще са подредени в 1 ред,<br>когато резолюцията е за mobile.</td>
  </tr>
  <tr>
    <td>
      .mi-?-rows-for-mobile
    </td>
    <td>Елементите в този елемент ще са подредени в ? реда,<br>където ? може да е между 2 и 10,<br>когато резолюцията е за mobile.</td>
  </tr><tr>
    <td>
      .mi-gap-?-for-desktop
    </td>
    <td>Помага на елементи с display: grid; намиращи се на резолюция за desktop,<br>да дишат(примерно във footer елемента).<br>Нужно е да ? да се замести със стойност от 0 до 5.<br>Колкото по-голямо е числото, толкова повече място ще бъде осигурено.</td>
  </tr>
  <tr>
    <td>
      .mi-gap-?-for-notebook
    </td>
    <td>Помага на елементи с display: grid; намиращи се на резолюция за notebook,<br>да дишат(примерно във footer елемента).<br>Нужно е да ? да се замести със стойност от 0 до 5.<br>Колкото по-голямо е числото, толкова повече място ще бъде осигурено.</td>
  </tr>
  <tr>
    <td>
      .mi-gap-?-for-tablet
    </td>
    <td>Помага на елементи с display: grid; намиращи се на резолюция за tablet,<br>да дишат(примерно във footer елемента).<br>Нужно е да ? да се замести със стойност от 0 до 5.<br>Колкото по-голямо е числото, толкова повече място ще бъде осигурено.</td>
  </tr>
  <tr>
    <td>
      .mi-gap-?-for-mobile
    </td>
    <td>Помага на елементи с display: grid; намиращи се на резолюция за mobile,<br>да дишат(примерно във footer елемента).<br>Нужно е да ? да се замести със стойност от 0 до 5.<br>Колкото по-голямо е числото, толкова повече място ще бъде осигурено.</td>
  </tr>
</table>