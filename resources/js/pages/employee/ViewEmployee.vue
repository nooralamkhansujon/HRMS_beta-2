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
    <div class="content-header-right text-md-right col-md-5 col-12 d-flex end mb-2">
      <button type="button" class="btn btn-primary waves-effect waves-float waves-light">
        Export Excel
      </button>
    </div>
  </div>
  <div class="content-body">
    <!-- Basic table -->
    <section id="basic-datatable">
      <div class="row">
        <div class="col-12">
          <div class="card basic-datatable-card">
            <table class="datatables-view table hover stripe compact order-column">
              <thead>
                <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Salary</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th>Action</th>
                  <th>id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>id</td>
                  <td>Employee Name</td>
                  <td>Email</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
                <tr>
                  <td>id</td>
                  <td>Employee Name</td>
                  <td>Email</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
                <tr>
                  <td>id</td>
                  <td>Employee Name</td>
                  <td>Email</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Date</td>
                  <td>Salary</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--/ Basic table -->
  </div>
</template>

<script>
import "jquery/dist/jquery.min.js";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import $ from "jquery";
export default {
  mounted() {
    $(".datatables-view").DataTable();
  },
  data(){
    return {
       columns: [
        { name: "id", text: "Department Id" },
        { name: "department_name", text: "Department Name" },
        { name: "status", text: "Status" },
        { name: "Created At", text: "Created At" },
        { name: "action", text: "Action" },
      ],
    }
  }
};
</script>

<style scoped>
.basic-datatable-card {
  width: 100%;
  overflow-x: scroll;
}
</style>
