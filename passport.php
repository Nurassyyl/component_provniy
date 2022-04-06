<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer ></script>
  <title>Passport</title>
</head>
<body>
  <div class="btn"><button type="button" class="btn-primary">Скачать</button></div>
  <div class="spravka">
    <h4 style="text-align: center;" >
      Білім беру бағдарламасының паспорты / Паспорт образовательной программы <br> / The Passport of Education Program</h4>
    </h4>
    <br> 
    <form action="passport_handler" method="post">
      <table>
        <!-- Education area code and classification -->
        <tr>
          <td>
            Білім Беру саласының коды мен жіктелуі
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
          Код и классификация области образования
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
          Education area code and classification
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <!-- Code and classification of training -->
        <tr>
          <td>
            Дайындық бағыттарының коды мен жіктелуі 
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <tr>
          <td>
            Код и классификация направления подготовки
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <tr>
          <td>
            Code and classification of training areas
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <!-- Code and name of education program -->
        <tr>
          <td>
            Білім беру бағдарламасыныңкоды мен атауы
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <tr>
          <td>
            Код и наименование образовательной программы
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <tr>
          <td>
            Code and name of education program
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <!-- Groups of educational programs -->
        <tr>
          <td>
            Білім беру бағдарламаларының топтары
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Группы образовательных программ
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Groups of educational programs
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <!-- The uniqueness of the educational program -->
        <tr>
          <td>
            Білім беру бағдарламаларының бірегейлігі
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Уникальность образовательной программы
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            The uniqueness of the educational program 
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
      </table>

      <table>
        <tr>
          <th>
            Білім беру бағдарламасы аясында дайындау бейінінің картасы / Карта профиля подготовки в рамках образовательной программы / 
            Profile map of education program
          </th>
        </tr>
      </table>

      <table>
        <tr>
          <td>
            БББ мақсаты
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Цель ОП
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Objective of EP 
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <!-- Purpose of EP -->
        <tr>
          <td>
            БББ міндеті
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Задачи ОП
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Purpose of EP 
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <!-- Result of training of EP -->
        <tr>
          <td>
            БББ оқыту нәтижелері/
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Результаты обучения по ОП/
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Result of training of EP/ 
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
    </table>

    <table>
        <tr>
          <th>
            Түлектің біліктілік сипаттамасы / Квалификационная характеристика выпускника / 
            Graduate Qualification Characteristics
          </th>
        </tr>
      </table>

      <table>
        <tr>
          <td>
            Берілетін дәреже
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <tr>
          <td>
            Присуждаемая степень
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <tr>
          <td>
            Awarded degree
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="из РУПа">
          </td>
        </tr>
        <!-- list of posts -->
        <tr>
          <td>
            Лауазымдарының тізімі
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Перечень должностей
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            List of posts
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <!-- The object of professional activity -->
        <tr>
          <td>
            Кәсіби қызмет объектісі
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            Объект профессиональной деятельности
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
        <tr>
          <td>
            The object of professional activity  
          </td>
          <td>
            <input type="text" style="border: none; outline: none; " placeholder="ЗАПОЛНЯЕТСЯ ДЛЯ КАЖДОГО ОП ВРУЧНУЮ">
          </td>
        </tr>
    </table>
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
  </div>
</body>
</html>