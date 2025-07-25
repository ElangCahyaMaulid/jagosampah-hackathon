<!-- resources/js/Pages/Redeem.vue -->
<template>
  <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow rounded-lg">
    <h2 class="text-2xl font-bold text-green-700 mb-4">Redeem Your Points</h2>
    <p class="mb-4">Your Current Points: <strong>{{ poin }}</strong></p>

    <div class="grid grid-cols-1 gap-4">
      <div
        v-for="(item, i) in rewards"
        :key="i"
        class="border p-4 rounded flex justify-between items-center"
      >
        <div>
          <h3 class="font-semibold text-gray-800">{{ item.name }}</h3>
          <p class="text-sm text-gray-600">{{ item.points }} points</p>
        </div>
        <button
          :disabled="poin < item.points"
          @click="redeem(item)"
          class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700 disabled:bg-gray-400"
        >
          Redeem
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const poin = ref(120)

const rewards = [
  { name: 'Phone Credit Rp10.000', points: 100 },
  { name: 'Food Voucher', points: 150 },
]

function redeem(item) {
  if (poin.value >= item.points) {
    poin.value -= item.points
    alert(`You have successfully redeemed: ${item.name}`)
    // TODO: Send redemption to backend API
  } else {
    alert('Insufficient points to redeem this reward.')
  }
}
</script>
