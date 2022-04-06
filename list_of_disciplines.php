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
        Көңілді топтар үшін модульдік білім беру бағдарламасы бойынша пәндер тізімі / Список дисциплин по модульной образовательной программе для полиязычных групп
      </h4>

      <table style="margin-top: 30px;" >
        <tr>
          <th style="width: 20px;" >№</th>
          <th style="width: 20px;">
            Оқу тіліндегі пәндер / <br> Наименование дисциплин на <br> языке обучения <br> / Name of the disciplines in the <br> language of instruction (50%) 
          </th>
          <th style="width: 20px;">
            Екінші тілдегі пәндер / <br> Наименование дисциплин на <br> втором языке <br> / Name of the disciplines in the <br> second language (20%)
          </th>
          <th style="width: 20px;">
            Ағылшын тіліндегі пәндер / <br> Наименование дисциплин на <br> английском языке <br> / Name of the disciplines in the <br> English language (30%)
          </th>
        </tr>

        <tr>
          <td style="width: 20px;">
            1
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
          </td>
        </tr>

        <tr>
          <td style="width: 20px;">
            2
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
          </td>
        </tr>

        <tr>
          <td style="width: 20px;">
            3
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
          </td>
          <td style="width: 20px;">
            <input type="text" style="border: none; outline: none; " placeholder="Из РУПа выбирается кнопкой" >
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