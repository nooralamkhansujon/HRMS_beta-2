<template>
  <table class="table table-border">
    <thead>
      <tr>
        <th v-for="th in tHeader" :key="th">
          <div class="d-flex justify-content-center">
            <span>{{ th }}</span>
            <span>
              <vue-feather type="arrow-down-circle"></vue-feather>
            </span>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr v-for="(row,index) in tBody" :key="row">
             <td>{{row[index]}}</td>
             <td></td>
             <td></td>
             <td></td>
        </tr> -->
    </tbody>
  </table>
</template>

<script>
export default {
  props: {
    columns: Array,
    entries: Array,
  },
  computed: {
    tHeader() {
      return this.columns;
    },
    tBody() {
      return this.entries;
    },
  },
};
</script>
