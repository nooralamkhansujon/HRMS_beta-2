<template>
  <div class="content-header row">
    <div class="content-header-left col-md-7 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">Employee List</h2>
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
    <div class="content-header-right text-md-right col-md-5 col-12 d-flex end">
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(department, index) in departmentList" :key="index">
                  <td>#{{ department?.id }}</td>
                  <td v-text="department?.department_name"></td>
                  <td>Action</td>
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
                    <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
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
                          placeholder="Enter Department Name"
                          id="text"
                        />
                        <small id="emailHelp" class="form-text text-muted"></small>
                      </div>
                      <div class="form-group custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="status" />
                        <label class="form-check-label" for="status">Active</label>
                      </div>
                      <button type="submit" class="btn btn-primary">
                        Add Department
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
export default {
  mixins: [GetDepartment],
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
