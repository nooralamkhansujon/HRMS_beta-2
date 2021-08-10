<template>
  <div class="content-header row">
    <div class="content-header-left col-md-7 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Department List</h2>
          <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <router-link :to="{ name: 'Dashboard' }">Dashboard</router-link>
              </li>
              <li class="breadcrumb-item active">Employee List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-header-right text-md-right col-md-5 col-12 d-flex end mb-2">
      <button type="button" class="btn btn-primary waves-effect waves-float waves-light">
        Export Excel
      </button>
      <button
        type="button"
        class="btn btn-primary waves-effect ml-1"
        data-toggle="modal"
        data-target="#add_Department"
      >
        Add Department
      </button>
    </div>
  </div>
  <div class="content-body">
    <!-- Basic table -->
    <section id="department-datatable">
      <div class="row">
        <div class="col-12">
          <div class="card basic-datatable-card">
            <table
              class="datatables-view-department table hover stripe compact order-column"
            >
              <thead>
                <tr>
                  <th>Department Id</th>
                  <th>Department Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(department, index) in departmentList" :key="index">
                  <td>#{{ department?.id }}</td>
                  <td v-text="department?.department_name"></td>
                  <td>
                    <span
                      class="badge rounded-pill"
                      :class="[department?.status != 1 ? 'bg-danger' : 'bg-success']"
                    >
                      {{ department?.status == 1 ? "Active" : "Inactive" }}</span
                    >
                  </td>
                  <td>
                    <div class="dropdown">
                      <button
                        type="button"
                        class="btn btn-sm dropdown-toggle hide-arrow"
                        data-toggle="dropdown"
                      >
                        <!-- <i data-feather="more-vertical"></i> -->
                        <vue-feather type="more-vertical"></vue-feather>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);">
                          <vue-feather type="edit-2" class="mr-50"></vue-feather>
                          <span>Edit</span>
                        </a>
                        <a class="dropdown-item" href="javascript:void(0);">
                          <vue-feather type="trash" class="mr-50"></vue-feather>
                          <span>Delete</span>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--/ Basic table -->

    <!-- add modal  -->
    <!-- Basic Modals start -->
    <section id="basic-modals">
      <div class="row">
        <div class="col-12">
          <!-- Basic trigger modal -->
          <div class="basic-modal">
            <!-- Modal -->
            <div
              class="modal fade text-left"
              id="add_Department"
              tabindex="-1"
              role="dialog"
              aria-labelledby="myModalLabel1"
              aria-hidden="true"
            >
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add Department</h4>
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Enter Department</label>
                        <input
                          type="text"
                          class="form-control"
                          v-model="form.department_name"
                          placeholder="Enter Department Name"
                          id="text"
                        />
                        <small
                          id="emailHelp"
                          class="form-text text-danger"
                          v-if="errors?.department_name?.[0]"
                        >
                          {{ errors?.department_name?.[0] }}
                        </small>
                      </div>
                      <div class="form-group">
                        <div class="custom-checkbox custom-control">
                          <input
                            type="checkbox"
                            v-model="form.status"
                            class="custom-control-input"
                            id="status"
                          />
                          <label class="custom-control-label" for="status">Active</label>
                        </div>
                      </div>
                      <button
                        type="submit"
                        :disabled="isClicked"
                        @click.prevent="addDepartment"
                        class="btn btn-primary"
                      >
                        {{ isClicked ? "Please Wait..." : "Add Department" }}
                      </button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">
                      close
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Basic trigger modal end -->
        </div>
      </div>
    </section>
    <!-- Basic Modals end -->
  </div>
</template>

<script>
import GetDepartment from "../../mixins/GetDepartment.js";
import DepartmentApi from "../../api/Department.js";

export default {
  mixins: [GetDepartment],

  data() {
    return {
      form: {
        department_name: "",
        status: false,
      },
      isClicked: false,
      errors: {},
    };
  },
  methods: {
    addDepartment() {
      this.isClicked = true;
      this.errors = {};
      DepartmentApi.store(this.form)
        .then(({ data }) => {
          this.isClicked = false;
          this.form.department_name = "";
          this.form.status = false;
          console.log(data);
          this.getDepartment();
        })
        .catch((error) => {
          console.log(error.response);
          if (error.response.status === 422) {
            this.errors = error.response.data.errors;
          }
          this.isClicked = false;
        });
    },
  },
  mounted() {
    this.getDepartment();
    $(".datatables-view-department").DataTable();
  },
};
</script>

<style scoped>
.basic-datatable-card {
  width: 100%;
  overflow-x: scroll;
}
</style>
