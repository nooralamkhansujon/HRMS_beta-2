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
            <!-- <table
              class="table hover stripe compact order-column"
              id="datatables-view-department"
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
                        <vue-feather type="more-vertical"></vue-feather>
                      </button>
                      <div class="dropdown-menu">
                        <a
                          class="dropdown-item"
                          href="#"
                          :id="'edit_department_' + department.id"
                          @click.prevent="editDepartment(department.id)"
                        >
                          <vue-feather type="edit-2" class="mr-50"></vue-feather>
                          <span>Edit</span>
                        </a>
                        <a
                          class="dropdown-item"
                          href="javascript:void(0);"
                          :id="'delete_department_' + department.id"
                          @click.prevent="deleteDepartment(department.id)"
                        >
                          <vue-feather type="trash" class="mr-50"></vue-feather>
                          <span>Delete</span>
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table> -->
            <!-- show entities select  and search input  -->
            <div class="d-flex justify-content-between my-3 mx-3">
              <div class="d-flex justify-content-center">
                <span style="font-size: 20px" class="mx-1">show</span>
                <select
                  v-model.trim="currentEntries"
                  @change="paginateEntries()"
                  class="form-control px:width-15"
                >
                  <option v-for="sh in showEntries" :key="sh" :value="sh">
                    {{ sh }}
                  </option>
                </select>
                <span class="ml-1" style="font-size: 20px">entries</span>
              </div>
              <div class="end:flex">
                <input
                  type="search"
                  class="input px:width-25"
                  placeholder="Search"
                  v-model="searchInput"
                  @keyup="searchEvent"
                />
              </div>
            </div>
            <table-data
              :entries="filteredEntries"
              :columns="columns"
              @edit_department="editDepartment"
              @delete_department="deleteDepartment"
            ></table-data>
            <div class="between:flex my-3 mx-3">
              <div style="font-size: 20px; font-weight: bold" class="text-secondary">
                show {{ showInfo.from }} to {{ showInfo.to }} of {{ showInfo.of }} entries
              </div>
              <div class="end:flex">
                <ul class="pagination:nav">
                  <li :class="['nav-item', { disabled: currentPage == 1 }]">
                    <a
                      href="#"
                      class="nav-link"
                      @click.prevent="(currentPage = 1), paginateEntries()"
                    >
                      First
                    </a>
                  </li>
                  <li :class="['nav-item', { disabled: currentPage == 1 }]">
                    <a
                      href="#"
                      class="nav-link"
                      @click.prevent="
                        currentPage < 1 ? (currentPage = 1) : (currentPage -= 1),
                          paginateEntries()
                      "
                    >
                      Prev
                    </a>
                  </li>
                  <li
                    class="nav-item"
                    v-for="pagi in showPagination"
                    :key="pagi"
                    :class="{ ellipsis: pagi === '...', active: pagi === currentPage }"
                  >
                    <a href="#" @click.prevent="paginateEvent(pagi)" class="nav-link">{{
                      pagi
                    }}</a>
                  </li>
                  <li :class="['nav-item', { disabled: currentPage == allPages }]">
                    <a
                      href="#"
                      class="nav-link"
                      @click.prevent="
                        currentPage > allPages
                          ? (currentPage = allPages)
                          : (currentPage += 1),
                          paginateEntries()
                      "
                    >
                      Next
                    </a>
                  </li>
                  <li :class="['nav-item', { disabled: currentPage == allPages }]">
                    <a
                      href="#"
                      class="nav-link"
                      @click.prevent="(currentPage = allPages), paginateEntries()"
                    >
                      Last
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Basic table -->

    <!-- add modal  -->
    <!--  Modals start -->
    <section>
      <div class="row">
        <div class="col-12">
          <!-- Basic trigger modal -->
          <div class="basic-modal">
            <!-- add modal Modal -->
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
    <section>
      <div class="col-12">
        <!-- Basic trigger modal -->
        <div class="basic-modal">
          <!-- edit modal Modal -->
          <div
            class="modal fade text-left edit_modal"
            id="edit_Department"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel2"
            aria-hidden="true"
            :class="[showEditModal ? 'show' : '']"
          >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel2">Edit Department</h4>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                    @click.prevent="SetHideEditModal"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        v-model="editForm.id"
                        id="department_id"
                      />
                      <label for="exampleInputEmail1">Enter Department</label>
                      <input
                        type="text"
                        class="form-control"
                        v-model="editForm.department_name"
                        placeholder="Enter Department Name"
                        id="department_name"
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
                          v-model="editForm.status"
                          class="custom-control-input"
                          id="editstatus"
                        />
                        <label class="custom-control-label" for="status">Active</label>
                      </div>
                    </div>
                    <button
                      type="submit"
                      :disabled="isClicked"
                      @click.prevent="updateDepartment"
                      class="btn btn-primary"
                    >
                      {{ isClicked ? "Please Wait..." : "Edit Department" }}
                    </button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    @click.prevent="SetHideEditModal"
                    class="btn btn-success"
                    data-dismiss="modal"
                  >
                    close
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Basic trigger modal end -->
      </div>
    </section>
  </div>
</template>

<script>
import DepartmentApi from "../../api/Department.js";
import { $array } from "alga-js";
//Datatable Modules
import "jquery/dist/jquery.min.js";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import $ from "jquery";
import TableData from "./table/TableData";
import { computed } from "vue";

export default {
  components: {
    TableData,
  },
  data() {
    return {
      departmentList: [],
      form: {
        department_name: "",
        status: false,
      },
      editForm: {
        id: null,
        department_name: "",
        status: false,
      },
      isClicked: false,
      errors: {},
      success: "",
      showEditModal: false,
      error: "",
      columns: [
        { name: "id", text: "Department Id" },
        { name: "department_name", text: "Department Name" },
        { name: "status", text: "Status" },
        { name: "Created At", text: "Created At" },
        { name: "action", text: "Action" },
      ],
      showEntries: [5, 10, 15, 25, 50, 100],
      currentEntries: 10,
      filteredEntries: [],

      currentPage: 1,
      allPages: 1,
      searchEntries: [],
      searchInput: "",
    };
  },
  computed: {
    showInfo() {
      return $array.pageInfo(
        this.getCurrentDepartment(),
        this.currentPage,
        this.currentEntries
      );
      //=> { from: 11, to: 12, of: 12 }
    },
    showPagination() {
      return $array.pagination(this.allPages, this.currentPage, 2);
    },
  },
  provide() {
    return {
      raw: computed(() =>
        this.searchEntries.length == 0 ? this.departmentList : this.searchEntries
      ),
    };
  },
  methods: {
    addDepartment() {
      this.isClicked = true;
      this.errors = {};
      this.success = "";
      DepartmentApi.store(this.form)
        .then(({ data }) => {
          this.isClicked = false;
          this.form.department_name = "";
          this.form.status = false;
          this.success = data.success;
          console.log(data);
          this.getDepartment();
        })
        .catch((error) => {
          if (error.response.status === 422) {
            this.errors = error.response.data.errors;
          }
          this.isClicked = false;
          this.success = "";
        });
    },
    editDepartment(department_id) {
      DepartmentApi.getDepartment(department_id)
        .then(({ data }) => {
          this.editForm.id = data.department.id;
          this.editForm.department_name = data.department.department_name;
          this.editForm.status = data.department.status ? true : false;
          this.SetShowEditModal();
        })
        .catch((error) => {
          if (error.response.status === 404) {
            this.error = error.response.data.error;
          }
        });
    },
    updateDepartment() {
      this.isClicked = true;
      this.success = "";
      this.errors = {};
      this.error = "";
      DepartmentApi.update(this.editForm)
        .then(({ data }) => {
          this.isClicked = false;
          this.success = data.success;
          this.getDepartment();
        })
        .catch((err) => {
          if (err.response.status === 422) {
            this.errors = err.response.data.errors;
          }
          if (err.response.status === 404) {
            this.error = err.response.data.error;
          }
          this.isClicked = false;
        });
    },
    deleteDepartment(department_id) {
      this.success = "";
      this.error = "";
      if (confirm("Are You Sure! You want to Delete this?")) {
        DepartmentApi.delete(department_id)
          .then(({ data }) => {
            this.success = data.success;
            this.getDepartment();
          })
          .catch((err) => {
            if (err.response.status === 404) {
              this.error = err.response.data.error;
            }
          });
      }
    },
    SetShowEditModal() {
      this.showEditModal = true;
    },
    SetHideEditModal() {
      this.showEditModal = false;
    },
    paginateEntries() {
      if (this.searchInput.length >= 1) {
        this.searchEntries = $array.search(this.searchInput)(this.departmentList);
      } else {
        this.searchEntries = []; //reset searchEntities
      }
      this.paginateData(this.getCurrentDepartment());
    },
    paginateData(data) {
      this.allPages = $array.pages(data, this.currentEntries); //get pages according current entries
      //paginates entries from total list
      this.filteredEntries = $array.paginate(data, this.currentPage, this.currentEntries);
    },
    getCurrentDepartment() {
      return this.searchEntries.length == 0 ? this.departmentList : this.searchEntries;
    },
    async getDepartment() {
      try {
        const { data } = await DepartmentApi.departmentList();
        this.departmentList = data.departmentList;
        this.filteredEntries = $array.paginate(
          this.departmentList,
          this.currentPage,
          this.currentEntries
        );
        this.allPages = $array.pages(this.departmentList, this.currentEntries);
      } catch (error) {
        console.log(error);
      }
    },
    paginateEvent(page) {
      this.currentPage = page;
      this.paginateEntries();
    },
    searchEvent() {
      this.currentPage = 1;
      this.paginateEntries();
    },
  },
  mounted() {
    this.getDepartment();
    $("#datatables-view-department").DataTable();
  },
};
</script>

<style scoped>
.basic-datatable-card {
  width: 100%;
  overflow-x: scroll;
}

.show {
  padding-right: 17px;
  display: block;
  z-index: 100;
  background: rgba(0, 0, 0, 0.3);
  /* top: 0;
  left: 0;
  right: 0;
  bottom: 0; */
}
/* .modal-dialog {
  z-index: 101;
} */
</style>
