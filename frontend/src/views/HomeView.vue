<template>
  <div>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>IP Address</th>
          <th>Date</th>
          <th>Car</th>
          <th>Car VIN</th>
          <th>Car Year</th>
        </tr>
      </thead>

      <tbody v-for="car in cars" :key="car.id">
        <tr>
          <td>{{ car.id }}</td>
          <td>{{ car.first_name }}</td>
          <td>{{ car.last_name }}</td>
          <td>{{ car.email }}</td>
          <td>{{ car.gender }}</td>
          <td>{{ car.ip_address }}</td>
          <td>{{ car.date }}</td>
          <td>{{ car.car }}</td>
          <td>{{ car.car_vin }}</td>
          <td>{{ car.car_year }}</td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <paginate
      :page-count="20"
      :page-range="3"
      :margin-pages="2"
      :click-handler="clickCallback"
      :prev-text="'Prev'"
      :next-text="'Next'"
      :container-class="'pagination'"
      :page-class="'page-item'"
    >
    </paginate>
  </div>
</template>

<script>
import axios from "axios";
//import Paginate from "vuejs-paginate-next";

export default {
  data() {
    return {
      cars: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost:8000/api/cars/")
      .then((response) => (this.cars = response.data.data));
  },
};
</script>
