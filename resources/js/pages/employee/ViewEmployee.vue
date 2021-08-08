<template>
  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
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
    <!-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
      <div class="form-group breadcrumb-right">
        <div class="dropdown">
          <button
            class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle"
            type="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i data-feather="grid"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="app-todo.html"
              ><i class="mr-1" data-feather="check-square"></i
              ><span class="align-middle">Todo</span></a
            ><a class="dropdown-item" href="app-chat.html"
              ><i class="mr-1" data-feather="message-square"></i
              ><span class="align-middle">Chat</span></a
            ><a class="dropdown-item" href="app-email.html"
              ><i class="mr-1" data-feather="mail"></i
              ><span class="align-middle">Email</span></a
            ><a class="dropdown-item" href="app-calendar.html"
              ><i class="mr-1" data-feather="calendar"></i
              ><span class="align-middle">Calendar</span></a
            >
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <div class="content-body">
    <!-- Basic table -->
    <section id="basic-datatable">
      <div class="row">
        <div class="col-12">
          <div class="card basic-datatable-card">
            <table class="datatables-view table">
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
export default {
  mounted() {
    $(".datatables-view").DataTable();
  },
};
</script>

<style scoped>
.basic-datatable-card {
  width: 100%;
  overflow-x: scroll;
}
</style>
