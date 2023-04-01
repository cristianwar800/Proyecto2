<template>
  <div>
    <h3>PACIENTES</h3>
    <form @submit.prevent="search">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" v-model="searchTerm" placeholder="Busqueda de paciente">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Buscar</button>
        </div>
      </div>
    </form>
    <table class="table table-stripped table-hover">
      <thead>
        <tr>
          <th>ID del paciente</th>
          <th>Nombre</th>
          <th>Consulta Finalizada</th>
          <th>Fecha de ingreso</th>
          <th>Urgencia</th>
          <th>Descripcion</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(paciente, index) in pacientes" :key="index">
          <td>{{ paciente.id }}</td>
          <td>{{ paciente.nombre }}</td>
          <td>{{ paciente.finalizado }}</td>
          <td>{{ paciente.fecha_limite }}</td>
          <td>{{ paciente.urgencia }}</td>
          <td>{{ paciente.descripcion }}</td>
          <td>
            <button class="btn btn-primary" @click="edit(paciente)">Editar</button>
            <button class="btn btn-info" @click="show(paciente)">Ver</button>
            <button class="btn btn-danger" @click="deletePaciente(paciente)" onclick="return confirm('¿Deseas borrar el registro?')">Eliminar consulta</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pacientes: [],
      searchTerm: ''
    }
  },
  mounted() {
    this.fetchPacientes()
  },
  methods: {
    fetchPacientes() {
      this.$inertia.get('/pacientes', { search: this.searchTerm }, {
        onSuccess: (data) => {
          this.pacientes = data.pacientes
        }
      })
    },
    search() {
      this.fetchPacientes()
    },
    edit(paciente) {
      this.$inertia.visit(`/pacientes/${paciente.id}/edit`)
    },
    show(paciente) {
      this.$inertia.visit(`/pacientes/${paciente.id}`)
    },
    deletePaciente(paciente) {
      if (confirm('¿Deseas borrar el registro?')) {
        this.$inertia.delete(`/pacientes/${paciente.id}`, {}, {
          onSuccess: () => {
            this.fetchPacientes()
          }
        })
      }
    }
  }
}
</script>
