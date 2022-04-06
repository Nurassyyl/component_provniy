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
      <div class="spravka" style="max-width: 210mm; height: 297mm; margin: 20px auto; padding: 30mm 20mm 5mm 30mm; 
      font-family: 'Times New Roman', Times, serif; background-color: #ffffff;">

      <h4 style="text-align: center;">
        МОДУЛЬДІК АНЫҚАТАМА  <br> МОДУЛЬНЫЙ СПРАВОЧНИК <br> MODULAR REFERENCE
      </h4>

      <table style="margin-top: 30px;" >

        <tr>
          <td style="width: auto;">
            Модуль коды және аталуы 
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
          
        </tr>

        <tr>
          <td style="width: auto;">
            Код и названия модуля
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Code and names module
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Модуль типі
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Тип модуля
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Module type
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            ECTS кредит көлемі
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Объем кредитов ECTS
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Total of credits ECTS
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Оқыту формасы
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Күндізгі" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Форма обучения
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Очная" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Form of study
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="full-time" >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Модуль мазмұны
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; width: 100%; " placeholder="Заполняется для каждого ОП вручную " >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Содержание модуля
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; width: 100%; " placeholder="Заполняется для каждого ОП вручную " >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Module content
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; width: 100%; " placeholder="Заполняется для каждого ОП вручную " >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Бақылау формасы 
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Емтихан " >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Форма контроля
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Экзамен " >
          </td>
        </tr>

        <tr>
          <td style="width: auto;">
            Type of control
          </td>
          <td style="width: auto;">
            <input type="text" style="border: none; outline: none; " placeholder="Exam " >
          </td>
        </tr>

      </table>
        
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