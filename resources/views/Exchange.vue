<template>
  <ViewContainer>
    <div class="bg-gray-400 style flex flex-wrap p-8 justify-between">
      <div class="p-2 rounded-md bg-gray-300 overflow-y-auto w-full">
        <table class="rounded-md overflow-hidden w-full">
          <tr class=" bg-gray-800 text-gray-300">
            <th class="text-left">
              Icon
            </th>
            <th class="text-left">
              Name
            </th>
            <th class="text-right">
              Price
            </th>
          </tr>
          <tr
            v-for="(coin, i) in coins.data"
            :key="i"
            :class="i % 2 ? 'bg-gray-300' : 'bg-gray-500'"
          >
            <td class="text-left">
              {{ i }}
            </td>
            <td class="text-left">
              {{ coin.symbol }} - {{ coin.name }}
            </td>
            <td class="text-right">
              $ {{ coin.priceUsd | formatPriceCoin }}
            </td>
          </tr>
        </table>
      </div>
    </div>
  </ViewContainer>
</template>

<script>
import axios from "axios";
import ViewContainer from "./ViewContainer";

export default {
  name: "Exchange",

  components: {
    ViewContainer
  },

  filters: {
    formatPriceCoin(coin) {
      return parseFloat(coin).toFixed(2);
    }
  },

  data() {
    return {
      coins: []
    };
  },

  watch: {
    coins(newValue, oldValue) {
      return newValue;
    }
  },

  mounted() {
    this.getCoins();
  },

  methods: {
    getCoins() {
      axios.get("https://api.coincap.io/v2/assets?limit=30")
        .then(response => {
          this.coins = response.data;
        });
    }
  }

};
</script>

<style>
.style {
    width: 96.5%;
}

</style>
