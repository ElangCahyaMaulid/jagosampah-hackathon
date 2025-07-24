<template>
  <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow rounded-lg">
    <h2 class="text-2xl font-bold text-green-700 mb-4">Tukar Poin</h2>
    <p class="mb-4">Poin Kamu: <strong>{{ poin }}</strong></p>

    <div class="grid grid-cols-1 gap-4">
      <div v-for="(item, i) in rewards" :key="i" class="border p-4 rounded flex justify-between items-center">
        <div>
          <h3 class="font-semibold">{{ item.nama }}</h3>
          <p>{{ item.poin }} poin</p>
        </div>
        <button
          :disabled="poin < item.poin"
          @click="redeem(item.nama)"
          class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 disabled:bg-gray-400"
        >
          Tukar
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const poin = ref(120);

const rewards = [
  { nama: 'Pulsa 10rb', poin: 100 },
  { nama: 'Voucher Makanan', poin: 150 },
];

function redeem(nama) {
  alert(`Berhasil menukar poin dengan ${nama}`);
  // Logika update backend nanti
}
</script>
