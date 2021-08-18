<script>
export default {
  props: {
    columns: Array,
    entries: Array,
  },
  data() {
    return {
    };
  },
  computed: {
    tHeader() {
      return this.columns;
    },
    tBody() {
      return this.entries;
    },
  },
  methods: {

  },
};
</script>

<template>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th v-for="th in tHeader" :key="th.name" :style="{width:th.name == 'action'?'30%':'5%' }">
          <div class="d-flex justify-content-center">
            <span class="text-dark">{{ th.text }}</span>
            <span>
              <vue-feather
                size="20"
                type="chevron-down"
                class="ml-2 text-secondary"
              ></vue-feather>
            </span>
          </div>
        </th>
      </tr>
    </thead>
    <tbody style="font-size: 20px">
      <tr v-for="row in tBody" :key="row.id">
        <td align="center">{{ row.employee_id?.substr(0,10) }}</td>
        <td>{{ row.employee_name }}</td>
        <td>
            <img width="80" :src="row.employee_image"/>
        </td>
        <td>{{ row.employee_department }}</td>
        <td>{{ row.designation }}</td>
        <td>{{ row.mobile_number }}</td>
        <td>{{ row.joining_date }}</td>
        <td>
          <span
            class="badge rounded-pill"
            :class="[row?.employee_status != 1 ? 'bg-danger' : 'bg-success']"
          >
            {{ row?.employee_status == 1 ? "Active" : "Inactive" }}</span
          >
        </td>
        <td class="">
            <div class="dropdown" style="display:inline !important;" >
                <button
                type="button"
                class="btn btn-sm dropdown-toggle hide-arrow"
                data-toggle="dropdown"
                >
                <vue-feather type="more-vertical"></vue-feather>
                </button>
                <div class="dropdown-menu" style="display:inline !important;" >
                <a class="dropdown-item" href="#"
                @click.prevent="">
                    <vue-feather type="edit-2" class="mr-50"></vue-feather>
                    <span>Edit</span>
                </a>
                <a
                    class="dropdown-item"
                    href="javascript:void(0);"
                    @click.prevent=""
                >
                    <vue-feather type="trash" class="mr-50"></vue-feather>
                    <span>Delete</span>
                </a>
                </div>
            </div>
         <router-link :to="{name:'EmployeeDetails',params:{id:row.id}}" class="btn btn-sm btn-success ml-1" title="View Employee Details">
               <vue-feather type="eye"></vue-feather>
         </router-link>

         <a class="btn btn-sm btn-primary p-1 ml-1"  title="View Experience Details">
              experience
         </a>
         <a class="btn btn-sm btn-info p-1 ml-1"  title="View Experience Details">
              Education
         </a>
         <a class="btn btn-sm  p-1 ml-1" style="background:#7FBA43;color:#fff;"  title="View Employee Training">
              Training
         </a>
          <a class="btn btn-sm btn-warning p-1 ml-1"  title="View Promotion Details">
            promotion
         </a>

        </td>
      </tr>
    </tbody>
  </table>
</template>
