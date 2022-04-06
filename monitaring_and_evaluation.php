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
  <link rel="stylesheet" href="css/map_of_compotetences.css">
  <title>Map of Compotetences</title>
</head>
<body>
  <div class="btn"><button type="button" class="btn-primary">Скачать</button></div>
      <div class="spravka" style="max-width: 210mm; height: 297mm; margin: 20px auto; padding: 5mm 20mm 5mm 30mm; 
      font-family: 'Times New Roman', Times, serif; background-color: #ffffff; font-size: 14px;">
        <strong style = " display: block; padding-top: 80px; "> Контроль и оценивание результатов обучения </strong>
        <p style="margin-top: 30px;" > 
        При подготовке бакалавров по образовательной программе ___ из РУПа___________ предусматривает широкий диапазон различых форм контроля и оценки предпологаемых результатов обучения: <i> текущий и рубежный контроль </i> (опрос на занятиях, тестирование по темам учебной дисциплины, контрольные работы, защита курсовых работ, дискуссии, тренинги, коллоквиумы, др.), <i> промежуточная аттестация </i> (тестирование по разделам учебной дисциплины, экзамен, защита отчетов по практикам), <i> итоговая государственная аттестация </i> (защита дипломной работы), <i> отзывы работадателей о качестве подготовки выпускников. </i> Итоги оценивания достижимости результатов обучения обсуждаются на заседениях Академических комитетов и Совета.
        </p>

        <strong style = " display: block; padding-top: 50px; "> Оқыту нәтижелерін бақылау және бағалау </strong>
        <p style="margin-top: 30px;" > 
        ___ из РУПа___________ білім беру бағдарламасы бойынша бакалаврларды дайындау кезінде оқытудың болжамды нәижелерін бақылау мен бағалаудың әртүрлі түрлерінің кең ауқымын қарастырады: ағымдағы және аралық бақылау (сабақтардағы сұрау, оқу пәнінің тақырыптары бойынша тестілеу, бақылау жұмыстары, курстық жұмыстарды қорғау, дискуссиялар, тренингтер, коллоквиумдар, т.б.), аралық аттестаттау
        (оқу пәнінің бөлімдері бойынша тестілеу, емтихан, практика бойынша есептерді қорғау), қорытынды мемлекеттік аттестаттау (дипломдық жұмыс қорғау), оқу жетістіктерін сырттай бағалау (ОЖСБ), түлектердің дайындық сапасы туралы жұмыс берушілердің пікірлері. Оқу нәтижелеріне қол жеткізуді бағалау қорытындылары академиялық комитеттер мен Кеңес отырыстарында талқыланады.
        </p>

        <strong style = " display: block; padding-top: 50px; "> Monitoring and evaluation of learning outcomes </strong>
        <p style="margin-top: 30px;" > 
        In the preparation of bachelors on the educational program ＿ из РУПа … provides a wide range of different forms of control and evaluation of the expected learning outcomes: current and midterm control (survey in the classroom, testing on the subjects of the
         discipline, tests, defense of coursework, discussions, trainings, colloquiums, etc.), interim certification (testing on the sections of the discipline, exam, protection of reports on practices), the final state certification (thesis), external evaluation of educational achievements (EAUD), feedback from employers about the quality of training of graduates. The results of the assessment
         of the achievability of learning outcomes are discussed at meetings of Academic committees and the Council.
        </p>

      </div>
      <div class="btn" style="text-align: right;"><input type="submit" class="btn-primary" value="Отправить"></div>
  
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