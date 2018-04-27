<template>
  <div class="card">
    <div class="card-header">
      <h2 class="form-title">Contratación</h2>
    </div>
    <div class="card-block">
      <form action="#">
        <!--Datos personales-->
        <fieldset>
          <legend>Datos personales</legend>
          <div class="row">
            <div class="col-md-3">
              <label for="fecha_ingreso">Fecha de ingreso</label>
              <div class="input-group">
                <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Nacionalidad</label> <br>
                <input type="radio" name="nacionalidad" value="v"> V
                <input type="radio" name="nacionalidad" value="e"> E
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="cedula">Cédula de identidad</label>
                <input type="text" name="cedula" id="cedula" class="form-control" maxlength="11" placeholder="Cédula de identidad">
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row mt-3">
            <div class="col-md-3">
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <label for="foto">Foto</label>
              <input type="file" name="foto" id="foto" class="form-control-file">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label for="fecha_nacimiento">Fecha de nacimiento</label>
              <div class="input-group">
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Género</label> <br>
                <input type="radio" name="genero" value="femenino"> Femenino
                <input type="radio" name="genero" value="masculino"> Masculino
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="estado_civil">Estado civil</label>
                <select name="estado_civil" id="estado_civil" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option value="solter@">Solter@</option>
                  <option value="casad@">Casad@</option>
                  <option value="concubinato">Concubinato</option>
                  <option value="divorciad@">Divorciad@</option>
                  <option value="viud@">Viud@</option>
                </select>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </fieldset>

        <!--Datos de direccion-->
        <fieldset>
          <legend>Datos de habitación</legend>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control" v-model="estado" @change="obtenerCiudades">
                  <option value="" selected="selected">Seleccione</option>
                  <option :value="estado.estado" v-for="estado in venezuela">{{ estado.estado }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <select name="ciudad" id="ciudad" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option :value="ciudad" v-for="ciudad in ciudadesFiltradas">{{ ciudad }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <label for="direccion">Dirección local</label>
              <div class="input-group">
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección local">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-location-arrow"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </fieldset>

        <!--Datos de contacto-->
        <fieldset>
          <legend>Datos de contacto</legend>
          <div class="row mb-3">
            <div class="col-md-3">
              <label for="telefono_fijo">Teléfono fijo</label>
              <div class="input-group">
                <input type="tel" pattern="\d" class="form-control" name="telefono_fijo" id="telefono_fijo" placeholder="Teléfono fijo" maxlength="11">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-phone"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <label for="telefono_movil">Teléfono móvil</label>
              <div class="input-group">
                <input type="tel" name="telefono_movil" id="telefono_movil" class="form-control" placeholder="Teléfono movil" maxlength="11">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-mobile-alt"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="email">Correo electrónico</label>
              <div class="input-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="far fa-envelope"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="discapacidad">¿Posee alguna discapacidad?</label> <br>
                <input type="radio" name="discapacidad" id="discapacidad" value="si" v-model="discapacidad"> Si
                <input type="radio" name="discapacidad" id="discapacidad-no" value="no" v-model="discapacidad"> No
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select name="tipo_discapacidad" id="tipo_discapacidad" class="form-control" :disabled="toggleDiscapacidad">
                  <option value="" selected="selected">Seleccione</option>
                  <option value="trastorno del habla y lenguaje">Trastorno del habla y lenguaje</option>
                  <option value="visual">Visual</option>
                  <option value="motriz">Motriz</option>
                  <option value="auditiva">Auditiva</option>
                </select>
              </div>
            </div>
          </div>
        </fieldset>

        <!--Datos laborales-->
        <fieldset>
          <legend>Datos laborales</legend>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="sucursal">Sucursal</label>
                <select name="sucursal" id="sucursal" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option :value="sucursal.id" v-for="sucursal in sucursales">{{ sucursal.nombre | capitalize }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="departamento">Departamento</label>
                <select name="departamento" id="departamento" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option :value="departamento.id" v-for="departamento in departamentos">{{ departamento.descripcion | capitalize }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="cargo">Cargo</label>
                <select ref="cargo" name="cargo" id="cargo" class="form-control" @change="obtenerTabuladorSalarial" v-model="cargo">
                  <option value="" selected="selected">Seleccione</option>
                  <option :value="{cargo_id: cargo.id, tabulador_salarial: cargo.tabulador_salarial_id}" v-for="cargo in cargos">{{ cargo.nombre | capitalize }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nivel_academico">Nivel Académico</label>
                <select name="nivel_academico" id="nivel_academico" class="form-control" v-model="nivel_academico" @change="obtenerProfesiones">
                  <option value="" selected="selected">Seleccione</option>
                  <option value="bachiller">Bachiller</option>
                  <option value="tsu">TSU</option>
                  <option value="profesional">Profesional</option>
                  <option value="especialista 1">Especialista 1</option>
                  <option value="especialista 2">Especialista 2</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="profesion">Profesión</label>
                <select name="profesion" id="profesion" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option :value="profesion.id" v-for="profesion in profesiones">{{ profesion.titulo | capitalize }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="condicion_laboral">Condición laboral</label>
                <select name="condicion_laboral" id="condicion_laboral" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option value="suplente">Suplente</option>
                  <option value="fijo">Fijo</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="tipo_horario">Tipo de horario</label>
                <select name="tipo_horario" id="tipo_horario" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option value="fijo">Fijo</option>
                  <option value="rotativo">Rotativo</option>
                </select>
              </div>
            </div>
          </div>
        </fieldset>

        <!--Datos de nómina-->
        <fieldset>
          <legend>Datos de nómina</legend>
          <div class="row">
            <div class="col-md-2">
              <label>
                <strong>Nivel:</strong>
              </label>
              <template v-if="tabulador !== ''">{{ tabulador[0].cod_nivel }}</template>
            </div>
            <div class="col-md-2">
              <label><strong>Sueldo base:</strong>
              </label>
              <template v-if="tabulador !== ''">{{ tabulador[0].sueldo_base }}</template>
            </div>
            <div class="col-md-8"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="banco">Banco</label>
                <select name="banco" id="banco" class="form-control" @change="obtenerCodigoBancario" v-model="banco">
                  <option value="" selected="selected">Seleccione</option>
                  <option :value="banco.banco" v-for="banco in bancos">{{ banco.banco }}</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <label for="cuenta_bancaria">Número de cuenta bancaria</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <input type="text" name="codigo_cuenta" id="codigo_cuenta" readonly :value="codigo_cuenta" size="4" style="border: none; background: transparent;">
                  </span>
                </div>
                <input type="text" name="cuenta_bancaria" id="cuenta_bancaria" class="form-control" placeholder="Número de cuenta bancaria" maxlength="20">
              </div>
            </div>
          </div>
        </fieldset>

        <!--Botones de accion-->
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <button type="submit" class="btn btn-success">
                <i class="fas fa-check"></i> Guardar y generar contrato
              </button>
              <button type="reset" class="btn btn-danger">
                <i class="fas fa-eraser"></i> Cancelar
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card-footer text-muted">
      <span>&nbsp;</span>
    </div>
  </div>
</template>

<script>
  export default {
    name: "Contratacion",
    data() {
      return {
        sucursales: [],
        departamentos: [],
        cargos: [],
        nivel_academico: '',
        profesiones: [],
        bancos: [],
        banco: '',
        codigo_cuenta: '',
        venezuela: [],
        estado: '',
        ciudades: [],
        ciudadesFiltradas: [],
        discapacidad: '',
        cargo: '',
        tabulador: ''
      }
    },
    computed: {
      toggleDiscapacidad: function() {
        if (this.discapacidad == 'si') return false;
        else return true;
      }
    },
    created() {
      this.obtenerSucursales();
      this.obtenerDepartamentos();
      this.obtenerCargos();
      this.obtenerBancos();
      this.obtenerEstados();
    },
    methods: {
      obtenerSucursales() {
        axios.get('obtener-sucursales')
          .then((response) => {
            this.sucursales = response.data;
          });
      },
      obtenerDepartamentos() {
        axios.get('obtener-departamentos')
          .then((response) => {
            this.departamentos = response.data;
          });
      },
      obtenerCargos() {
        axios.get('obtener-cargos')
          .then((response) => {
            this.cargos = response.data;
          });
      },
      obtenerProfesiones() {
        axios.get('obtener-profesiones', {
          params: {
            nivel_academico: this.nivel_academico
          }
        })
          .then((response) => {
            this.profesiones = response.data;
          });
      },
      obtenerTabuladorSalarial() {
        axios.get('obtener-tabulador', {
          params: {
            tabulador_salarial_id: this.cargo.tabulador_salarial
          }
        })
          .then((response) => {
            this.tabulador = response.data;
          });
      },
      obtenerBancos() {
        axios.get('obtener-bancos')
          .then((response) => {
            this.bancos = response.data;
          });
      },
      obtenerCodigoBancario() {
        var that = this;
        const banco = this.banco;
        this.bancos.forEach(function (element) {
          if (banco === element.banco) {
            that.codigo_cuenta = element.codigo;
          }
        });
      },
      obtenerEstados() {
        axios.get('obtener-estados')
          .then((response) => {
            this.venezuela = response.data;
          });
      },
      obtenerCiudades() {
        this.ciudades = this.venezuela.filter(venezuela => venezuela.estado === this.estado);
        if (typeof (this.ciudades[0].ciudades) !== 'undefined') {
          for (let i = 0; i < this.ciudades[0].ciudades.length; i++) {
            this.ciudadesFiltradas = this.ciudades[0].ciudades;
          }
        } else {
          this.ciudadesFiltradas = '';
        }
      }
    },
    filters: {
      capitalize: function (value) {
        if (!value) return '';
        value = value.toString();
        return value.charAt(0).toUpperCase() + value.slice(1);
      }
    }
  }
</script>

<style scoped>

</style>