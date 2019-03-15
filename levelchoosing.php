<?php
  require 'header.php';
 ?>

<div class="levelButtons">

    <div class="tooltip">
        <button class="dropbtn">A1</button>
        <span class="tooltiptext">Мога да разбирам и използвам познати ежедневни изрази и много основни фрази, насочени към удовлетворяване на нуждите на конкретен тип. Мога да представям себе си и другите, да задавам въпроси и да споделям лични детайли, като например къде живея, хора, които познавам, и неща, които имам. Мога да взаимодействам по прост начин, при условие че другият говори бавно и ясно и е готов да помогне.</span>
    </div>

    <div class="tooltip">
        <button class="dropbtn">A2</button>
        <span class="tooltiptext">Мога да разбирам изречения и често използвани изрази, свързани с области от най-непосредствено значение (напр. много основни лични и семейни детайли, пазаруване, местна география, заетост). Мога да комуникирам в прости и рутинни задачи, изискващи опростен и директен обмен на информация по познати и рутинни въпроси. Мога да опиша с прости думи аспекти от своето минало, непосредствена околна среда и въпроси в области от незабавна нужда.</span>
    </div>

    <div class="tooltip">
        <button class="dropbtn">B1</button>
        <span class="tooltiptext">Мога да разбирам основните моменти от ясния стандартен принос по познати въпроси, които се срещат редовно в работата, училището, свободното време и т.н. Мога да създам прост свързан текст по познати или лични теми. Мога да описвам преживявания и събития, мечти, надежди и амбиции и да дам накратко причини и обяснения за мнения и планове.</span>
    </div>

    <div class="tooltip">
        <button class="dropbtn">B2</button>
        <span class="tooltiptext">Мога да разбирам основните идеи на сложния текст, както по конкретни, така и по абстрактни теми, включително технически дискусии в своята област на специализация. Мога да общувам с известна степен на плавност и спонтанност, което прави редовното взаимодействие с носители на езика напълно възможно без напрежение, за която и да е от страните. Мога да създам ясен, подробен текст по различни теми и да обясня гледната си точка по актуален въпрос, като давам предимствата и недостатъците на различните възможности.</span>
    </div>

    <div class="tooltip">
        <button class="dropbtn">C1</button>
        <span class="tooltiptext">Мога да разбирам широк спектър от взискателни, по-дълги текстове и да разпознавам скрито значение. Мога да се изразявам свободно и спонтанно, без много очевидно търсене на изрази. Мога да използвам езика гъвкаво и ефективно за социални, академични и професионални цели. Мога да създам ясен, добре структуриран и подробен текст по сложни теми, показващ контролирано използване на организационни модели, съединители и свързани устройства.</span>
    </div>

    <div class="tooltip">
        <button class="dropbtn">C2</button>
        <span class="tooltiptext">Мога лесно да разбера почти всичко, което чувам или чета. Мога да обобщавам информация от различни устни и писмени източници, да реконструирам аргументи и отчети в съгласувано представяне. Мога да се изразявам спонтанно, много плавно и точно, като отличавам по-фините нюанси на смисъла дори и в по-сложни ситуации.</span>
    </div>

</div>

<form action="diagnostic-test.php" style="text-align:center">
    <input type="submit" class="dropbtn" value="Диагностичен тест" />
</form>

<ul class="cd-accordion-menu animated">
    <li class="has-children">
        <input type="checkbox" name="group-1" id="group-1">
        <label for="group-1">A1</label>

        <ul>
            <li class="has-children">
                <input type="checkbox" name="sub-group-1" id="sub-group-1">
                <label for="sub-group-1">Срещам хора/Meeting People</label>

                <ul>
                    <li><a href="levels.php?a1/1/1">Представяне/Introduction</a></li>
                    <li><a href="levels.php?a1/1/2">Приятели/Friends</a></li>
                    <li><a href="levels.php?a1/1/3">Лични местоимения/Personal Pronouns</a></li>
                    <li><a href="levels.php?a1/1/4">Често срещани фрази/Common Phrases</a></li>
                    <li><a href="levels.php?a1/1/5">Спелуване/Spelling</a></li>
                    <li><a href="levels.php?a1/1/6">Глаголът "to be"/"To be" verb</a></li>
                </ul>
            </li>
            <li class="has-children">
                <input type="checkbox" name="sub-group-2" id="sub-group-2">
                <label for="sub-group-2">Откъде съм?/Where am I from?</label>

                <ul>
                    <li><a href="levels.php?a1/2/1">Държави и народности/Countries and Nationalities</a></li>
                    <li><a href="levels.php?a1/2/2">Броене до 20/Counting to 20</a></li>
                    <li><a href="levels.php?a1/2/3">Множествено число на съществителни имена/Plural nouns</a></li>
                    <li><a href="levels.php?a1/2/4">Градът/The City</a></li>
                    <li><a href="levels.php?a1/2/5">Съкращения и апострофи/Contractions and Apostrophes</a></li>
                    <li><a href="levels.php?a1/2/6">Сегашно време/Present Simple</a></li>
                </ul>
            </li>
            <li class="has-children">
                <input type="checkbox" name="sub-group-3" id="sub-group-3">
                <label for="sub-group-3">Семейство/Family</label>

                <ul>
                    <li><a href="levels.php?a1/3/1">Моето семейство/My Family</a></li>
                    <li><a href="levels.php?a1/3/2">Моето голямо семейство/My Big Family</a></li>
                    <li><a href="levels.php?a1/3/3">Притежателни местоимения/Possessive determiners</a></li>
                    <li><a href="levels.php?a1/3/4">Описателни прилагателни/Descriptive Adjectives</a></li>
                    <li><a href="levels.php?a1/3/5">Размери/Measurements</a></li>
                </ul>
            </li>
            <li class="has-children">
                <input type="checkbox" name="sub-group-4" id="sub-group-4">
                <label for="sub-group-4">Моето ежедневие/My Daily Routine</label>

                <ul>
                    <li><a href="levels.php?a1/4/1">Дните от седмицата/Days of the Week</a></li>
                    <li><a href="levels.php?a1/4/2">Колко е часът?/What Time Is It?</a></li>
                    <li><a href="levels.php?a1/4/3">Въпроси с "Wh"/Questions with "Wh"</a></li>
                    <li><a href="levels.php?a1/4/4">Транспорт/Transport</a></li>
                    <li><a href="levels.php?a1/4/5">Въпроси с "do" и отрицателни въпроси/Questions with "Do" and Negative Questions</a></li>
                </ul>
            </li>
            <li class="has-children">
                <input type="checkbox" name="sub-group-5" id="sub-group-5">
                <label for="sub-group-5">Свободно време/Free Time</label>

                <ul>
                    <li><a href="levels.php?a1/5/1">Време/Weather</a></li>
                    <li><a href="levels.php?a1/5/2">Сезони и месеци/Seasons and Months</a></li>
                    <li><a href="levels.php?a1/5/3">Отрицание с "no"/Negation with "no"</a></li>
                    <li><a href="levels.php?a1/5/4">Хобита/Hobbies</a></li>
                    <li><a href="levels.php?a1/5/5">Спорт/Sports</a></li>
                </ul>
            </li>
            <li class="has-children">
                <input type="checkbox" name="sub-group-6" id="sub-group-6">
                <label for="sub-group-6">Супермаркет/Supermarket</label>

                <ul>
                    <li><a href="levels.php?a1/6/1">В супермаркета/At the Supermarket</a></li>
                    <li><a href="levels.php?a1/6/2">Списък с покупки/Grocery List</a></li>
                    <li><a href="levels.php?a1/6/3">Сегашно продължително/Present Continuous</a></li>
                    <li><a href="levels.php?a1/6/4">Храна/Food</a></li>
                    <li><a href="levels.php?a1/6/5">Ядене/Eating</a></li>
                    <li><a href="levels.php?a1/6/6">Сегашно продължително 2/Present Continuous 2</a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="has-children">
        <input type="checkbox" name="group-2" id="group-2">
        <label for="group-2">A2</label>

        <ul>
             <li class="has-children">
                <input type="checkbox" name="sub-group-7" id="sub-group-7">
                <label for="sub-group-7">Хайде да излезем!/Let’s get together!</label>

                <ul>
                    <li><a href="levels.php?a2/1/1">Приятели и семейство!/Friends and family!</a></li>
                    <li><a href="levels.php?a2/1/2">Излизам в града ми/Going out in my city</a></li>
                </ul>
            </li>
            <li class="has-children">
                  <input type="checkbox" name="sub-group-8" id="sub-group-8">
                  <label for="sub-group-8">На работа/On the job</label>

                  <ul>
                      <li><a href="levels.php?a2/2/1">Много работа!/A lot of work!</a></li>
                      <li><a href="levels.php?a2/2/2">Търсене на работа/Looking for a job</a></li>
                  </ul>
              </li>
              <li class="has-children">
                    <input type="checkbox" name="sub-group-9" id="sub-group-9">
                    <label for="sub-group-9">Изнасяне/Moving out</label>

                    <ul>
                        <li><a href="levels.php?a2/3/1">Новата ми къща!/My new house!</a></li>
                        <li><a href="levels.php?a2/3/2">Изнасяме се!/We are moving out!</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <input type="checkbox" name="sub-group-10" id="sub-group-10">
                    <label for="sub-group-10">Вечер в киното/A night at the cinema</label>

                    <ul>
                        <li><a href="levels.php?a2/4/1">Всичко за филмите!/All about films!</a></li>
                        <li><a href="levels.php?a2/4/2">Културата в града ми/Culture in my city</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <input type="checkbox" name="sub-group-11" id="sub-group-11">
                    <label for="sub-group-11">Гол!/Goal!</label>

                    <ul>
                        <li><a href="levels.php?a2/5/1">Спортове и игри/Sports and games</a></li>
                        <li><a href="levels.php?a2/5/2">Оставане във форма/Staying fit</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <input type="checkbox" name="sub-group-12" id="sub-group-12">
                    <label for="sub-group-12">Поглед в бъдещето/Looking ahead</label>

                    <ul>
                        <li><a href="levels.php?a2/6/1">Правене на планове/Making plans</a></li>
                        <li><a href="levels.php?a2/6/2">Говорене за бъдещето/Talking about the future</a></li>
                    </ul>
                </li>
        </ul>
    </li>

    <li class="has-children">
        <input type="checkbox" name="group-3" id="group-3">
        <label for="group-3">B1</label>

                <ul>
               <li class="has-children">
                  <input type="checkbox" name="sub-group-13" id="sub-group-13">
                  <label for="sub-group-13">Ad campaign</label>

                  <ul>
                      <li><a href="levels.php?b1/1/1">Ad campaigns</a></li>
                      <li><a href="levels.php?b1/1/2">The use of ‘go’, ‘play’ and ‘do’ with adverbs of frequency</a></li>
                  </ul>
              </li>
              <li class="has-children">
                    <input type="checkbox" name="sub-group-14" id="sub-group-14">
                    <label for="sub-group-14">Subcultures</label>

                    <ul>
                        <li><a href="levels.php?b1/2/1">Urban tribes</a></li>
                        <li><a href="levels.php?b1/2/2">Modals of deduction</a></li>
                    </ul>
                </li>
                <li class="has-children">
                      <input type="checkbox" name="sub-group-15" id="sub-group-15">
                      <label for="sub-group-15">What shows do you watch?</label>

                      <ul>
                          <li><a href="levels.php?b1/3/1">Criticism of film and theatre</a></li>
                          <li><a href="levels.php?b1/3/2">Verb noun collocations</a></li>
                      </ul>
                  </li>
                  <li class="has-children">
                      <input type="checkbox" name="sub-group-16" id="sub-group-16">
                      <label for="sub-group-16">Moving abroad</label>

                      <ul>
                          <li><a href="levels.php?b1/4/1">Moving abroad can be difficult</a></li>
                          <li><a href="levels.php?b1/4/2">More on infinitives of purpose</a></li>
                      </ul>
                  </li>
                  
          </ul>
      </li>

    <li class="has-children">
        <input type="checkbox" name="group-4" id="group-4">
        <label for="group-4">B2</label>

        <ul>
             <li class="has-children">
                    <input type="checkbox" name="sub-group-17" id="sub-group-17">
                    <label for="sub-group-17">Interculturalism at the office</label>

                    <ul>
                        <li><a href="levels.php?b2/1/1">Negotiating</a></li>
                        <li><a href="levels.php?b2/1/2">The present perfect continuous</a></li>
                    </ul>
                </li>
                <li class="has-children">
                      <input type="checkbox" name="sub-group-18" id="sub-group-18">
                      <label for="sub-group-18">Urbanism</label>

                      <ul>
                          <li><a href="levels.php?b2/2/1">What is the ideal city?</a></li>
                          <li><a href="levels.php?b2/2/2">American and British English: spelling</a></li>
                      </ul>
                  </li>
                  <li class="has-children">
                        <input type="checkbox" name="sub-group-19" id="sub-group-19">
                        <label for="sub-group-19">Music Cultures</label>

                        <ul>
                            <li><a href="levels.php?b2/3/1">Writing a review of an album</a></li>
                            <li><a href="levels.php?b2/3/2">Advanced uses of the future</a></li>
                        </ul>
                    </li>

            </ul>
        </li>


    <li class="has-children">
        <input type="checkbox" name="group-5" id="group-5">
        <label for="group-5">C1</label>

        <ul>
            <li class="has-children">
                    <input type="checkbox" name="sub-group-20" id="sub-group-20">
                    <label for="sub-group-20">Music</label>

                    <ul>
                        <li><a href="levels.php?c1/1/1">Subordinating conjunctions</a></li>
                        <li><a href="levels.php?c1/1/2">Analogies</a></li>
                    </ul>
                </li>
                <li class="has-children">
                      <input type="checkbox" name="sub-group-21" id="sub-group-21">
                      <label for="sub-group-21">Literature</label>

                      <ul>
                          <li><a href="levels.php?c1/2/1">Future in the past</a></li>
                          <li><a href="levels.php?c1/2/2">Admitting fault and apologising</a></li>
                      </ul>
                  </li>
                  <li class="has-children">
                        <input type="checkbox" name="sub-group-22" id="sub-group-22">
                        <label for="sub-group-22">Mysteries and Curiosities</label>

                        <ul>
                            <li><a href="levels.php?c1/3/1">Structuring a sentence: relative clauses</a></li>
                            <li><a href="levels.php?c1/3/2">Expressing regrets and criticisms</a></li>
                        </ul>
                    </li>
                   <li class="has-children">
                    <input type="checkbox" name="sub-group-23" id="sub-group-23">
                    <label for="sub-group-23">Visual Arts</label>

                    <ul>
                        <li><a href="levels.php?c1/4/1">Structuring a sentence: inversion</a></li>
                        <li><a href="levels.php?c1/4/2">Negotiating and dealing with conflict</a></li>
                    </ul>
                </li>
                <li class="has-children">
                      <input type="checkbox" name="sub-group-24" id="sub-group-24">
                      <label for="sub-group-24">Identity and Inspiration</label>

                      <ul>
                          <li><a href="levels.php?c1/5/1">Modals in the past</a></li>
                          <li><a href="levels.php?c1/5/2">Speculation and deduction</a></li>
                      </ul>
                  </li>
                  <li class="has-children">
                        <input type="checkbox" name="sub-group-25" id="sub-group-25">
                        <label for="sub-group-25">Classic and contemporary folklore</label>

                        <ul>
                            <li><a href="levels.php?c1/6/1">Ellipsis</a></li>
                            <li><a href="levels.php?c1/6/2">Making presentations and speeches</a></li>
                        </ul>
                    </li>
        </ul>
    </li>


    <li class="has-children">
        <input type="checkbox" name="group-6" id="group-6">
        <label for="group-6">C2</label>

        <ul>
             <li class="has-children">
                <input type="checkbox" name="sub-group-26" id="sub-group-26">
                <label for="sub-group-26">Creative Writing</label>

                <ul>
                    <li><a href="levels.php?c2/1/1">Analogies</a></li>
                    <li><a href="levels.php?c2/1/2">Metaphors and Similes</a></li>
                    <li><a href="levels.php?c2/1/3">Writing Headlines</a></li>
                    <li><a href="levels.php?c2/1/4">Poetry</a></li>
                    <li><a href="levels.php?c2/1/5">Rhetoric</a></li>
                </ul>
            </li>
            <li class="has-children">
                <input type="checkbox" name="sub-group-27" id="sub-group-27">
                <label for="sub-group-27">Grammar Basics C2</label>

                <ul>
                    <li><a href="levels.php?c2/2/1">Common Mistakes in English</a></li>
                    <li><a href="levels.php?c2/2/2">Polishing Your Grammar</a></li>
                    <li><a href="levels.php?c22/3">Adverb Placement</a></li>
                    <li><a href="levels.php?c2/2/4">Homonyms</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<!-- cd-accordion-menu -->



<?php
   require 'footer.php';
  ?>
