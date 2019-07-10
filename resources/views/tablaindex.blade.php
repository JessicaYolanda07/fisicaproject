@extends('plantilla')
@section('seccion')
  <section class="content-header">
    <h1>
      PROGRAMACÍON DE HORARIOS
    </h1>
  </section>
  <section class="content">
    <div class="container">
      <section class="col-lg-10 connectedSortable">
        <div calss= "container">
          <div class="box box-primary">
            <div class="wrap">
              <form action="" class="formulario">
                <div  class = " radio ">           
                  <table class="table table-hover table-condensed table-bordered">
                    <tr>
                      <td><h3 class="box-title">HORA</h3></td>
                      <td><h2 class="box-title">Lunes</h2></td>
                      <td><h2 class="box-title">Martes</h2></td>
                      <td><h2 class="box-title">Miercoles</h2></td>
                      <td><h2 class="box-title">Jueves</h2></td>
                      <td><h2 class="box-title">Viernes</h2></td>
                      <td><h2 class="box-title">Sabado</h2></td>
                      <td><h2 class="box-title">Domingo</h2></td>
                    </tr>
                    <tr>
                      <td><h6 class="box-title">07:45 - 10:00</h6></td>
                      <br>
                      <td>
                        <input type="radio" name="grupo" id="lunes">
                        <label for="lunes">L1-G1</label>
                      </td>
                      <td>
                        <input type="radio" name="grupo" id="martes">
                        <label for="martes">L1-G2</label>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr >
                      <td><h6 class="box-title">10:00 - 12:15</h6></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><h6 class="box-title">12:15 - 14:00</h6></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><h6 class="box-title">14:00 - 16:15</h6></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <input type="radio" name="grupo" id="jueves">
                        <label for="jueves">L3-G3</label>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><h6 class="box-title">16:15 - 18:30</h6></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix no-border">
              <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> GUARDAR</button>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
@endsection
     