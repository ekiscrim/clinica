<div class="container contenido post">
    <div class="banner">
	<img src="<?php echo base_url("assets/img/chicas.png") ?>" alt="Dr. Sanchez Nebreda"></img>
    </div>
     <div class="frase">
           <p>“Nuestro compromiso con los pacientes está basado<br>
                  en nuestra experiencia y la búsqueda de la excelencia."</p>
      </div>
      <div class="pensando">
        <p>¿Pensando <br>en hacerte la <b>cirugía estética?</b><br><br>
        <button type="button"data-toggle="modal" data-target="#exampleModal" class="btn btn-success">Haznos una consulta</button></p>
      </div><br><br>
    </div>
    <div class="sombra"></div>
    </div>
    <div class="container contenido post">
      <div class="row">
        <div class="col-md-4 ciru post">
            <h3>Cirugía estética de las mamas</h3>
            <div class="col-md-4 imagen1 img-responsive">
                <img src="<?php echo base_url("assets/img/cirmam.png") ?>" alt="Cirugía estética de las mamas"></img>
            </div>
             <p>Durante la primera consulta, el cirujano plástico evaluaremos el tamaño
             y la forma de las mamas, la firmeza de la piel y su estado general de salud.
             Se realizará además una exploración de mamas y en algunos casos se solicitará
              un estudio mamográfico. Se le explicarán las distintas técnicas quirúrgicas,
              se discutirá el tamaño y la forma que tendrán su mamas y las opciones posible
              para conseguir...
              </p>
             <a href="<?php echo base_url().'servicios#mamas' ?>"class="btn btn-success leerMas">Leer más</a>
       </div>
        <div class="col-md-4 ciru post">
            <h3>Cirugía estética de la nariz</h3>
            <div class="col-md-4 imagen1 img-responsive">
                <img src="<?php echo base_url("assets/img/nariz.png") ?>" alt="Cirugía estética de la nariz"></img>

            </div>
             <p>
             La rinoplastia es la cirugía que modifica la forma de la nariz, y es uno de los
             procedimientos quirúrgicos que realizamos con mas frecuencia de todas
             nuestras intervenciones de cirugia estetica.
             La rinoplastia puede disminuir o aumentar el tamaño de la nariz, cambiar
              la forma de la punta o del dorso, estrechar los orificios nasales o cambiar
              el ángulo entre la nariz y el labio superior...
            </p>
             <a href="<?php echo base_url().'servicios#nariz' ?>"class="btn btn-success leerMas">Leer más</a>
       </div>
        <div class="col-md-4 ciru post">
            <h3>Liposucción</h3>
            <div class="col-md-4 imagen1 img-responsive">
                <img src="<?php echo base_url("assets/img/lipo.png") ?>" alt="Liposucción"></img>
            </div>
             <p>Hace aún pocos años, las deformidades por acúmulos grasos localizados
              no tenían una solución quirúrgica aceptable, hasta la aparición de la liposucción,
              que ha revolucionado la corrección de estos problemas. Esta técnica no equivale a
              un tratamiento de la obesidad, sino que está destinada a subsanar aquellas zonas
              corporales en las que persisten acúmulos grasos habitualmente rebeldes a los regímenes
              dietéticos.
            </p>
             <a href="<?php echo base_url().'servicios#liposuccion' ?>"class="btn btn-success leerMas">Leer más</a>
        </div>
        </div>
      </div>
      <hr>
  <div class="post">
    <div class="container contenido">
      <div class="row">
        <div class="col-sm-6 galeriaIndex">
            <h3>Galería Antes y Después</h3>
                <img src="<?php echo base_url("assets/img/antes1.png") ?>"></img>
                 <img src="<?php echo base_url("assets/img/despues1.png") ?>"></img>
                 <button type="button" class="btn btn-success VerMas">Ver más</button>
       </div>

        <div class="col-md-6">
            <h3>Opiniones</h3>
            <div class="actualidad">
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec
                lorem ullamcorper, scelerisque turpis id, vestibulum neque. Mauris in sapien ac
                 nunc fringilla rutrum a at eros. Quisque ornare augue sit amet nulla efficitur rutrum.
                 Duis vestibulum ligula ex, ac finibus purus iaculis a. Integer vehicula feugiat lacus,
                  nec dignissim ipsum dictum ut. Nam vitae ipsum condimentum, efficitur erat at,
                   finibus nisi.
            </p>
            </div>
             <button type="button" class="btn btn-success leerMasActualidad">Leer más</button>
       </div>
       </div>
      </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="exampleModalLabel">Consulta</h3>
      </div>
      <div class="modal-body">
      <form method="post" accept-charset="utf-8" action="<?php echo base_url().'sendMailGmail' ?>"  class="email"  id="myform" />
          <div class="form-group">
            <label for="recipient-name" class="control-label">Su correo:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="ejemplo@ejemplo.com">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Consulta:</label>
            <textarea class="form-control" id="message-text" placeholder="Escriba su consulta aqui"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="Submit">Enviar mensaje</button>
      </div>
    </div>
  </div>
</div>

</script>