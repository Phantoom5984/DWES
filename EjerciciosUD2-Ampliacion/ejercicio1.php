<?php
/**
 * @author Sergio Salvago Medina
 */
// Ejercicio 1. Escribe un programa que muestre tu horario de clase mediante una tabla imprimiendo desde php el html necesario así como los datos.
echo '<!doctype html>

<html>
    <head>
        <title>sergiosm</title>     
    </head>
    <body>
        <p>
            <style>
            table, th, td {
                border-bottom: 5px solid black;
                border-radius: 10px;
                border-spacing: 10px;
              }
              th, td {
                text-align: left;
                padding-top: 5px;
                padding-bottom: 10px;
                padding-left: 20px;
                padding-right: 10px;
                }
            </style>
            <table style="width:100%; height:800px">
              <tr style="background-color: gray;">
                <th>Hora</th>
                <td>Lunes</td>
                <td>Martes</td>
                <td>Miércoles</td>
                <td>Jueves</td>
                <td>Viernes</td>
              </tr>
                <tr>
                  <th style="background-color: gray;">14:10/15:05</th>
                  <td rowspan="2" style="background-color: pink;">Desarrollo WEB en Entorno Cliente</td>
                  <td rowspan="2" style="background-color: yellow;">Despliegue de aplicaciones</td>
                  <td></td>
                  <td rowspan="2" style="background-color: pink;">Desarrollo WEB en Entorno Cliente</td>
                  <td rowspan="2" style="background-color: orange;">Desarrollo WEB en Entorno Servidor</td>
                </tr>
                <tr>
                  <th style="background-color: gray;">15:05/16:00</th>
                  <td rowspan="2" style="background-color: orange;">Desarrollo WEB en Entorno Servidor</td>
                </tr>
                <tr>
                  <th style="background-color: gray;">16:00/16:55</th>
                  <td style="background-color: green;">Empresa e iniciativa</td>
                  <td style="background-color: green;">Empresa e iniciativa</td>
                  <td style="background-color: orange;">Desarrollo WEB en Entorno Servidor</td>
                  <td style="background-color: green;">Empresa e iniciativa</td>
                </tr>
                <tr>
                  <th style="background-color: gray;">16:55/17:15</th>
                  <td colspan="5" style="text-align: center; color: gray;">recreo</td>
                </tr>
                <tr>
                    <th style="background-color: gray;">17:15/18:10</th>
                    <td rowspan="2" style="background-color: orange;">Desarrollo WEB en Entorno Servidor</td>
                    <td style="background-color: grey;">Tutoria Segundo</td>
                    <td rowspan="2" style="background-color: blue;">Diseño de interfaces</td>
                    <td style="background-color: orange;">Desarrollo WEB en Entorno Servidor</td>
                    <td rowspan="2" style="background-color: blue;">Diseño de interfaces</td>
                  </tr>
                  <tr>
                    <th style="background-color: gray;">18:10/19:05</th>
                    <td rowspan="3" style="background-color: pink;">Desarrollo WEB en Entorno Cliente</td>
                    <td rowspan="2" style="background-color: yellow;">Despliegue de aplicaciones</td>
                  </tr>
                  <tr>
                    <th style="background-color: gray;">19:05/20:00</th>
                    <td rowspan="2" style="background-color: blue;">Diseño de interfaces</td>
                    <td rowspan="2" style="background-color: yellow;">Despliegue de aplicaciones</td>
                  </tr>
                  <tr>
                    <th style="background-color: gray;">20:00/20:55</th>
                  </tr>
              </table>
         </p>
        </body>
        </html>'; //Con este echo pongo el html.
?>