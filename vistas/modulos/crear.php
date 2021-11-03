
<!-- Wrapper -->
<div id="wrapper">

<!-- registrar -->
<section id="intro" class="wrapper style1 fullscreen fade-up">
   
    <div class="inner">
        <h2>Ingresar recuerdo </h2>
        <br>
        <form method="post" action="#">
            <div class="row gtr-uniform">
                <!--Ingresar titulo-->
                <div class="col-12">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Titulo" />
                </div>
                <!--Ingresar fecha-->
                <div class="col-6 col-12-xsmall">
                    <label for="fecha">Fecha</label>
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="2021-09-21" />
                </div>
                <!--Ingresar hora de inicio-->
                <div class="col-6 col-12-xsmall">
                    <label for="hora_inicio">Hora de inicio </label>
                    <input type="text" name="demo-text" id="demo-text" value="" placeholder="18:30" />
                </div>
                <!--Ingresar hora de finalizacion-->
                <div class="col-6 col-12-xsmall">
                    <label for="hora_finalizacion">Hora de finalización </label>
                    <input type="text" name="demo-text" id="demo-text" value="" placeholder="01:30" />
                </div>
                <!--Seleccionar tipo de recuerdo -->
                <div class="col-12">
                    <label for="tipo_recuerdo">Seleccionar tipo </label>
                    <select name="demo-category" id="demo-category">
                        
                        <option value="1">Información</option>
                        <option value="1">Buenos</option>
                        <option value="1">Malos</option>
                        <option value="1">Neutros</option>
                    </select>
                </div>
                <!--Seleccionar Emoticon-->
                <label for="emoticon">Emoticon </label>
                <div class="col-4 col-12-small">
                    <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                    <label for="demo-priority-low">&#128512</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="demo-priority-normal" name="demo-priority">
                    <label for="demo-priority-normal">&#128513</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="demo-priority-high" name="demo-priority">
                    <label for="demo-priority-high">&#128518</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="demo-priority-high" name="demo-priority">
                    <label for="demo-priority-high">&#128518</label>
                </div>
                <div class="col-4 col-12-small">
                    <input type="radio" id="demo-priority-high" name="demo-priority">
                    <label for="demo-priority-high">&#129299</label>
                </div>


                <!--                             -->
                <!--Ingresar Compañia -->
                <div class="col-12">
                    <label for="Compania">Compañia </label>
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Jose, Andrea ..." />
                </div>
                 <!--Ingresar Ubicacion -->
                 <div class="col-12">
                    <label for="ubicacion">Ubicación</label>
                    <input type="text" name="demo-name" id="demo-name" value="" placeholder="Charcas 2315, CABA" />
                </div>
                <!--Escriba su recuerdo -->
                <div class="col-12">
                    <label for="escrito">Escriba su recuerdo </label>
                    <textarea name="demo-message" id="demo-message" placeholder="Enter your memory " rows="6"></textarea>
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Enviar" class="primary" /></li>
                        <li><input type="reset" value="Cancelar" /></li>
                    </ul>
                </div>
            </div>
        </form>                            
    </div>
</section>
</div>


