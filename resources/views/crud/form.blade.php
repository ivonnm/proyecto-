
            <label for="fotografia">fotografia</label>
            {{ $registro->fotografia }}"
            <img src="" alt="">
            <input type="file" class="form-control" name="fotografia" id="fotografia" value="{{ $registro->fotografia }}"/>

            <br>
            <label for="nombre">Nombre</label>
            <input type="text"  class="form-control" name="nombre" value="{{ $registro->nombre }}"/>
            <br>
            <label for="apellidoPaterno">Apellido Paterno:</label>
            <input type="text" class="form-control" name="apellidoP" value="{{ $registro->apellidoP }}"/>
            <br>
            <label for="apellidoMaterno">Apellido Materno</label>
            <input type="text"  class="form-control" name="apellidoM" value="{{ $registro->apellidoM }}"/>
            <br>
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion" placeholder="1234 Main St"  value="{{ $registro->direccion }}"/>

            <br>
            <label for="nivel" class="form-label">Nivel</label>
            <input type="text" class="form-control" name="nivel" placeholder="1234 Main St"  value="{{ $registro->nivel }}"/>

            <br>
            <label for="horario" class="form-label">Horario</label>
            <input type="text" class="form-control" name="horario" placeholder="1234 Main St"  value="{{ $registro->horario }}"/>

            <label for="telefono">Telefono</label>
            <input type="tel" class="form-control" name="telefono" value="{{ $registro->telefono }}"/>
            <br>
            <label for="edad">Edad</label>
            <input type="tel" class="form-control" name="edad" value="{{ $registro->edad }}"/>
            <br>
            <br>
            <label for="dias">Dias de clases </label>
            <input type="text"  class="form-control" name="dias" value="{{ $registro->dias }}"/>
            <br>

            <br>
            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="correo" placeholder="name@example.com" value="{{ $registro->correo }}">

            <br>
            <button class="btn btn-success" type="submit">Guardar Datos</button>

