<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer ></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.index.css">
  <title>Practika</title>
</head>
<body>
  <div class="btn"><button type="button" class="btn-primary">Скачать</button></div>
      <div class="spravka">
        <div class="mop-header-title">
          <h3>
            САРСЕН АМАНЖОЛОВ АТЫНДАҒЫ ШЫҒЫС ҚАЗАҚСТАН УНИВЕРСИТЕТІ <br>
            ВОСТОЧНО КАЗАХСТАНСКИЙ УНИВЕРСИТЕТ <br> ИМЕНИ САРСЕНА АМАНЖОЛОВА
          </h3>
        </div>
        <form action="handler_page_one.php" method="post">
        <div class="srpavka_flex">
          <div class="mop-header-agreed-left">
            <h4>КЕЛІСІЛДІ/СОГЛАСОВАНО/AGREED</h4>
            <i class="mop-header-agreed-left-word"><span>Название организации партнера-работодателя <br> Руководитель
                организации </span></i>
              <p> <input type="text" name="username" class="handler_page_one"> А.Т.Ә. / Ф.И.О.</p>
          </div>
          <div class="mop-header-agreed-right">
            <h4>БЕКІТІЛДІ/УТВЕРЖДЕНО/APPROVED</h4>
            <p>Ғылыми Кеңес төрағасы/\Председатель</p>
            <p>Ученого Совета/Chairman of Academic Senate</p>
            <p>
              <input type="text" name="rector" class="handler_page_one">Төлеген М.Ә.
            </p>
            <p>
              Хаттама/Протокол/Protocol 
              №<input type="text" name="protocol" class="handler_page_one" style="width: 20px">
            </p>
            <p>
              <<<input type="text" name="days" class="handler_page_one" style="width: 20px">>><input type="text" name="word"  class="handler_page_one">20<input type="text" name="year" class="handler_page_one" style="width: 20px">ж/г/y</p>
            <p>ЗАПОЛНЯЕТСЯ ПОСТОЯННО</p>
          </div>
        </div>
        <div class="spravka-main" >
          <h3 class="mop-header-title" >БІЛІМ БЕРУ БАҒДАРЛАМАСЫ <br> ОБРАЗОВАТЕЛЬНАЯ ПРОГРАММА <br> EDUCATION PROGRAMME </h3>
          <div class="mop-main-title">
            <strong>
              Коды және аталуы
              <input type="text" name="code_and_names_kz" class="handler_page_one"><br>
              Код и наименование
              <input type="text" name="code_and_names_ru" class="handler_page_one"> <br>
              Code and names
              <input type="text" name="code_and_names_en" class="handler_page_one"><br>
            </strong>
          </div>
          <p  style="margin-top: 30px;" ><strong>Бағдарлама деңгейі/Уровень программы/Program Level</strong> </p>
          <p>
            <select name="program_level">
              <option disabled>Выберите нужное</option>
              <option value="Бакалавриат/Бакалавриат/Bachelor`s degree">Бакалавриат/Бакалавриат/Bachelor`s degree</option>
              <option value="Магистратура/Магистратура/Master`s Programme">Магистратура/Магистратура/Master`s Programme</option>
              <option value="Докторантура/Докторантура/Doctoral Program">Докторантура/Докторантура/Doctoral Program</option>
            </select>
          </p>
          <p  style="margin-top: 30px;" >
            <div style="display: flex;"> 
              <strong>
              Кадрларды дайындау бағытының атауы және коды: <br> 
              </strong>
              <p>из РУПа</p>
            </div>
            <div style="display: flex;"> 
              <strong>
              Код и наименование направления подготовки кадров: <br> 
              </strong>
              <p>из РУПа</p>
            </div>
            <div style="display: flex;"> 
              <strong>
              Code and names of areas of training: <br> 
              </strong>
              <p>из РУПа</p>
            </div>
          </p>
          <p  style="margin-top: 30px;" >
            Оқытудың типтік мерзімі: 
            <select name="training_period">
              <option disabled>Выберите нужное</option>
              <option value="4">4</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </p>
          <p  style="margin-top: 30px;" >
            <strong>Типичный срок обучения: </strong> 4/2/3 года<br>
            <strong>Standard period of study:</strong> 4/2/3 year
          </p>
          <p  style="margin-top: 30px;" >
            <strong>Біліктілік деңгейі/Уровень квалификации/Qualification level:</strong>
            <select name="Qualifiction_level">
              <option disabled>Выберите нужное</option>
              <option value="6 ҰБШ, 6ЕБШ / 6 НРК, 6 ЕРК/ 6 NQF, 6 EQF">6 ҰБШ, 6ЕБШ / 6 НРК, 6 ЕРК/ 6 NQF, 6 EQF</option>
              <option value="7 ҰБШ, 7 ЕБШ / 7 НРК, 7 ЕРК/ 7 NQF, 7 EQF">7 ҰБШ, 7 ЕБШ / 7 НРК, 7 ЕРК/ 7 NQF, 7 EQF</option>
              <option value="8 ҰБШ, 8 ЕБШ / 8 НРК, 8 ЕРК/ 8 NQF, 8 EQF">8 ҰБШ, 8 ЕБШ / 8 НРК, 8 ЕРК/ 8 NQF, 8 EQF</option>
            </select>
          </p>
          <p style="margin-top: 60px; text-align: center; " >
            <strong>
              Қабылдау жылы/Год набора/Admission 20__
            </strong>
          </p>
        </div>
      </div>
      <div class="btn" style="text-align: right;"><input type="submit" class="btn-primary" value="Отправить"></div>
  </form>
  <script>
    button = document.querySelector('.btn');
    console.log(button);
    button.addEventListener("click", function() {
      var element = document.querySelector('.spravka');
      html2pdf(element);
    })
  </script>
</body>
</html>