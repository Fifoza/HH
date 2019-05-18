<h1>mi(Martin and Iva) css library</h1>

<h2>Амииии Документация:</h2>

<ul>
  
  <li>
    <b><i>.mi-layout</i></b><p>Слага се задължително на div елемента, непосредствено след body! Този клас се слага на елемент който играе ролята wrapper за цялата страница. По този начин навигация, хедър и футър ще са винаги респонсив и подредени правилно.</p>
  </li>

  <li>
    <b><i>.mi-navbar</i></b><p>Слага се на елемент, който е предвиден за навигация. В него трябва да има <b><i>ul</i></b> елементи, не повече от едно ниво на вътре! Възможно е да се ползват и dropdown менюта.</p>
  </li>

  <li>
    <b><i>.mi-header</i></b><p>Слага се задължително на header елемента!</p>
  </li>

  <li>
    <b><i>.mi-main</i></b><p>Слага се задължително на main елемента!</p>
  </li>

  <li>
    <b><i>.mi-footer</i></b><p>Слага се задължително на footer елемента в страницата!</p>
  </li>

  <li>
    <b><i>.mi-icon</i></b><p>Все още се разработва.</p>
  </li>

  <li>
    <b><i>mi-btn-primary</i></b><p>Бутон (a или button елемент) който семантично е основен бутон за сайта.</p>
  </li>

  <li>
    <b><i>mi-btn-success</i></b><p>Бутон (a, button) който семантично е за успешно дествие.</p>
  </li>

  <li>
    <b><i>mi-btn-warning</i></b><p>Бутон (a, button) който семантично е за предупреждение/повишено внимание.</p>
  </li>

  <li>
    <b><i>mi-btn-danger</i></b><p>Бутон (a, button) който семантично е за опасно действие.</p>
  </li>

  <li>
    <b><i>mi-btn-info</i></b><p>Бутон (a, button) който семантично води до информация за нещо или страница за нещото.</p>
  </li>

  <li>
    <b><i>mi-btn-link</i></b><p>Бутон (a, button) който семантично представя анкар таг(линк).</p>
  </li>

  <li>
    <b><i>mi-btn-nav</i></b><p>Бутон (a, button). Ползва се в навигационното меню. Би трябвало да пасне на темата сайта.</p>
  </li>

  <li>
    <b><i>mi-btn-footer</i></b><p>Бутон (a, button). Ползва се във футъра на сайта. Би трябвало да пасне на темата сайта.</p>
  </li>

  <li>
    <b><i>.mi-search-input-nav</i></b><p>Ако има нужда от търсачка в навигацията, това е правилният клас. Слага се форма в li елемент. В тази форма се слага input със тип search. Логично е да се използва и бутонче за изпращане на формата, което е прието да ползва класа <b><i>.mi-search-button-nav</i></b>.</p>
  </li>

  <li>
    <b><i>.mi-search-button-nav</i></b><p>Стилизира бутона за изпращане на формата за търсене, в навигационното меню.</p>
  </li>

  <li>
    <b><i>#haburger</i></b><p>Това id бива сложено на елемент input от тип checkbox. Позволява контрола върху навигацията само със CSS, когато има нужда от респонсив екстри.</p>
  </li>

  <li>
    <b><i>#hamburger-button</i></b><p>Слага се на обикновен див елемент. Важното е да се сложат 3 на брой празни дива в текущият. Така ще бъдат стилизирани чертичките на хамбургер бутона.</p>
  </li>

  <li>
    <b><i>.mi-dropdown-nav</i></b><p>Нужно е да покажа примерен код за този клас!</p>
  </li>

  <li>
    <b><i>.mi-dropdown-content-nav</i></b><p>Нужно е да покажа примерен код за този клас!</p>
  </li>

  <li>
    <b><i>.mi-btn-footer</i></b><p>Бутон (a или button елемент), който е в тон с темата на сайта.</p>
  </li>

  <li>
    <b><i>.mi-icon</i></b><p>Все още се работи по него.</p>
  </li>

  <li>
    <ul>
      <li><b><i>.mi-gap-?-for-desktop</i></b></li>
      <li><b><i>.mi-gap-?-for-notebook</i></b></li>
      <li><b><i>.mi-gap-?-for-tablet</i></b></li>
      <li><b><i>.mi-gap-?-for-mobile</i></b></li>
    </ul>
    <p>Помага на елементи с display: grid; да дишат(примерно във footer елемента). Нужно е да ? да се замести със стойност от 0 до 5. Колкото по-голямо е числото, толкова повече място ще бъде осигурено.</p>
  </li>

</ul>





<!-- 
.mi-column-for-desktop,
.mi-columns-2-for-desktop,
.mi-columns-3-for-desktop,
.mi-columns-4-for-desktop,
.mi-columns-5-for-desktop,
.mi-columns-6-for-desktop,
.mi-columns-7-for-desktop,
.mi-columns-8-for-desktop,
.mi-columns-9-for-desktop,
.mi-columns-10-for-desktop,
.mi-columns-11-for-desktop,
.mi-columns-12-for-desktop,
.mi-row-for-desktop,
.mi-rows-2-for-desktop,
.mi-rows-3-for-desktop,
.mi-rows-4-for-desktop,
.mi-rows-5-for-desktop,
.mi-rows-6-for-desktop,
.mi-rows-7-for-desktop,
.mi-rows-8-for-desktop,
.mi-rows-9-for-desktop,
.mi-rows-10-for-desktop,
.mi-column-for-notebook,
.mi-columns-2-for-notebook,
.mi-columns-3-for-notebook,
.mi-columns-4-for-notebook,
.mi-columns-5-for-notebook,
.mi-columns-6-for-notebook,
.mi-columns-7-for-notebook,
.mi-columns-8-for-notebook,
.mi-columns-9-for-notebook,
.mi-columns-10-for-notebook,
.mi-columns-11-for-notebook,
.mi-columns-12-for-notebook,
.mi-row-for-notebook,
.mi-rows-2-for-notebook,
.mi-rows-3-for-notebook,
.mi-rows-4-for-notebook,
.mi-rows-5-for-notebook,
.mi-rows-6-for-notebook,
.mi-rows-7-for-notebook,
.mi-rows-8-for-notebook,
.mi-rows-9-for-notebook,
.mi-rows-10-for-notebook,
.mi-column-for-tablet,
.mi-columns-2-for-tablet,
.mi-columns-3-for-tablet,
.mi-columns-4-for-tablet,
.mi-columns-5-for-tablet,
.mi-columns-6-for-tablet,
.mi-columns-7-for-tablet,
.mi-columns-8-for-tablet,
.mi-columns-9-for-tablet,
.mi-columns-10-for-tablet,
.mi-columns-11-for-tablet,
.mi-columns-12-for-tablet,
.mi-row-for-tablet,
.mi-rows-2-for-tablet,
.mi-rows-3-for-tablet,
.mi-rows-4-for-tablet,
.mi-rows-5-for-tablet,
.mi-rows-6-for-tablet,
.mi-rows-7-for-tablet,
.mi-rows-8-for-tablet,
.mi-rows-9-for-tablet,
.mi-rows-10-for-tablet,
.mi-column-for-mobile,
.mi-columns-2-for-mobile,
.mi-columns-3-for-mobile,
.mi-columns-4-for-mobile,
.mi-columns-5-for-mobile,
.mi-columns-6-for-mobile,
.mi-columns-7-for-mobile,
.mi-columns-8-for-mobile,
.mi-columns-9-for-mobile,
.mi-columns-10-for-mobile,
.mi-columns-11-for-mobile,
.mi-columns-12-for-mobile,
.mi-row-for-mobile,
.mi-rows-2-for-mobile,
.mi-rows-3-for-mobile,
.mi-rows-4-for-mobile,
.mi-rows-5-for-mobile,
.mi-rows-6-for-mobile,
.mi-rows-7-for-mobile,
.mi-rows-8-for-mobile,
.mi-rows-9-for-mobile,
.mi-rows-10-for-mobile
 -->