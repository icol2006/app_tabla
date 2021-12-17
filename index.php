<?php
    include("cn.php");
    $pagos = "SELECT * FROM pagos";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agroproducos Mercury</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="java.js">

    <script type="text/javascript">
      function showContent1() {
        element1 = document.getElementById("content1");
        element2 = document.getElementById("content2");
        check = document.getElementById("check");
        if (check.checked) {
            element1.style.display='block';
            element2.style.display='block';
        }

        else {
            element1.style.display='none';
            element2.style.display='none';
        }
      }
    </script>

    <script type="text/javascript">
      function showContent2() {
        element3 = document.getElementById("content3");
        element4 = document.getElementById("content4");
        check = document.getElementById("check2");
        if (check.checked) {
            element3.style.display='block';
            element4.style.display='block';
        }

        else {
            element3.style.display='none';
            element4.style.display='none';

        }
      }
    </script>

    <script type="text/javascript">
      function showContent3() {
        element5 = document.getElementById("content5");
        element6 = document.getElementById("content6");
        check = document.getElementById("check3");
        if (check.checked) {
            element5.style.display='block';
            element6.style.display='block';
        }

        else {
            element5.style.display='none';
            element6.style.display='none';

        }
      }
    </script>

    <script type="text/javascript">
      function showContent4() {
        element7 = document.getElementById("content7");
        element8 = document.getElementById("content8");
        check = document.getElementById("check4");
        if (check.checked) {
            element7.style.display='block';
            element8.style.display='block';
        }

        else {
            element7.style.display='none';
            element8.style.display='none';

        }
      }
    </script>

<script type="text/javascript">
      function showContent5() {
        element9 = document.getElementById("content9");
        element10 = document.getElementById("content10");
        check = document.getElementById("check5");
        if (check.checked) {
            element9.style.display='block';
            element10.style.display='block';
        }

        else {
            element9.style.display='none';
            element10.style.display='none';
        }
      }
    </script>

    <script type="text/javascript">
      function showContent6() {
        element11 = document.getElementById("content11");
        element12 = document.getElementById("content12");
        check = document.getElementById("check6");
        if (check.checked) {
            element11.style.display='block';
            element12.style.display='block';
        }

        else {
            element11.style.display='none';
            element12.style.display='none';

        }
      }
    </script>

    <script type="text/javascript">
      function showContent7() {
        element13 = document.getElementById("content13");
        element14 = document.getElementById("content14");
        check = document.getElementById("check7");
        if (check.checked) {
            element13.style.display='block';
            element14.style.display='block';
        }

        else {
            element13.style.display='none';
            element14.style.display='none';

        }
      }
    </script>

    <script type="text/javascript">
      function showContent8() {
        element15 = document.getElementById("content15");
        element16 = document.getElementById("content16");
        check = document.getElementById("check8");
        if (check.checked) {
            element15.style.display='block';
            element16.style.display='block';
        }

        else {
            element15.style.display='none';
            element16.style.display='none';

        }
      }
    </script>


</head>
<body>
  <!-- Button trigger modal - Realizar nomina -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#realizarnomina">
    Realizar nomina
  </button>


    <form action="#" method="post">
      <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent1()">  Dia $
      <input type="checkbox" name="check" id="check2" value="1" onchange="javascript:showContent2()">  Hora $
      <input type="checkbox" name="check" id="check3" value="1" onchange="javascript:showContent3()">  Hora doble $
      <input type="checkbox" name="check" id="check4" value="1" onchange="javascript:showContent4()">  Tutoreo $
      <input type="checkbox" name="check" id="check5" value="1" onchange="javascript:showContent5()">   Raleo $
      <input type="checkbox" name="check" id="check6" value="1" onchange="javascript:showContent6()">  Bajar planta $
      <input type="checkbox" name="check" id="check7" value="1" onchange="javascript:showContent7()">  Deshoje $
      <input type="checkbox" name="check" id="check8" value="1" onchange="javascript:showContent8()">  Cosecha $
    </form>


    <table class="table table-hover" id="myTable">
      <thead>
        <tr>
          <th scope="col">ID Pago</th>
          <th scope="col">ID Empleado</th>
          <th scope="col">Nombre</th>
          <th scope="col">FECHA</th>

          <th scope="col" >Día</th>
          <th scope="col" id="content1" style="display: none;" class="pesos">$</th>

          <th scope="col">Hora</th>
          <th scope="col" id="content3" style="display: none;" class="pesos">$</th>
            
          <th scope="col">Hora extra doble</th>
          <th scope="col" id="content5" style="display: none;" class="pesos">$</th>
               
          <th scope="col">Tutoreo</th>
          <th scope="col"> 1x / 2x </th>
          <th scope="col" id="content7" style="display: none;" class="pesos">$</th>

          <th scope="col">Raleo</th>
          <th scope="col" id="content9" style="display: none;"  class="pesos">$</th>

          <th scope="col">Bajar planta</th>
          <th scope="col" id="content11" style="display: none;"  class="pesos">$</th>

          <th scope="col">Deshoje</th>
          <th scope="col">Hojas</th>
          <th scope="col" id="content13" style="display: none;"  class="pesos">$</th>

          <th scope="col">Cosecha</th>
          <th scope="col" id="content15" style="display: none;"  class="pesos">$</th>

          <th scope="col">INV</th>
          <th scope="col">TOTAL</th>

        </tr>
      </thead>

      <tbody>
        <tr>
            <?php $pagos = mysqli_query($conexion, $pagos);
             while($row=mysqli_fetch_assoc($pagos)) { ?>

            <td><?php echo $row["id_pago"]; ?></td>
            <td><?php echo $row["id_empleado"]; ?></td>
            <td> Marco Arellano </td>
            <td><?php echo $row["fecha"]; ?></td>
        
            <td><?php echo $row["dia"]; ?></td>
            <td id="content2" style="display: none" class="pesos">$3.33</td>

            <td><?php echo $row["hora"]; ?></td>
            <td id="content4" style="display: none;"  class="pesos">$4.44</td>
        
            <td><?php echo $row["hora_doble"]; ?></td>
            <td id="content6" style="display: none;"  class="pesos"> $5.55</td>

            <td><?php echo $row["tutoreo"]; ?></td>
            <td> 1x </td>
            <td id="content8" style="display: none;"  class="pesos"> $6.66</td>

            <td><?php echo $row["raleo"]; ?></td>
            <td id="content10" style="display: none;"  class="pesos">$7.77</td>

            <td><?php echo $row["bajar_planta"]; ?></td>
            <td id="content12" style="display: none;"  class="pesos">$8.88</td>

            <td><?php echo $row["deshoje"]; ?></td>
            <td>33</td>
            <td id="content14" style="display: none;"  class="pesos">$9.99</td>

            <td><?php echo $row["cosecha"]; ?></td>
            <td id="content16" style="display: none;"  class="pesos">$10.10</td>

            <td><?php echo $row["inv"]; ?></td>
            <td>$11.11</td>

            <?php } mysqli_free_result($pagos);?>
            
        </tr>
      </tbody>

    </table>
  
  <!-- Modal realizar nomina 1-->
  <div class="modal fade" id="realizarnomina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nomina</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <button type="button" class="btn btn-primary" id="btnAgregarNuevo">Agregar nuevo </button>
        <div class="modal-body form-group">
          <!-- tabla-->
          <table class="table table-hover" id="tablaNuevaNomina">
            <thead>
              <tr>
                <th scope="col">ID Pago</th>
                <th scope="col">ID Empleado</th>
               

              </tr>
            </thead>

            <tbody>              
              <tr>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td class="text-center">
                  <div class='btn btn-primary'>Guardar</div>
                  <div class='btn btn-primary'>Eliminar</div>
                </td>
              </tr>
            </tbody>
          </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="jquery-3.6.0.min.js">

</body>
</html>