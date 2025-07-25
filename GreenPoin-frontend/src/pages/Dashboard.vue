<!-- resources/js/Pages/Dashboard.vue -->
<template>
  <div class="p-6">
    <h2 class="text-3xl font-bold text-green-700 mb-4">GreenPoin RT Dashboard</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
      <div class="bg-green-100 p-4 rounded shadow">
        <h3 class="text-xl font-semibold text-green-800">Total Reports</h3>
        <p class="text-2xl mt-2">{{ totalReports }}</p>
      </div>
      <div class="bg-green-100 p-4 rounded shadow">
        <h3 class="text-xl font-semibold text-green-800">Total Collected (kg)</h3>
        <p class="text-2xl mt-2">{{ totalKg }}</p>
      </div>
    </div>

    <h3 class="text-xl font-semibold text-green-700 mb-2">Report History</h3>
    <ul class="space-y-2">
      <li v-for="(report, i) in history" :key="i" class="p-3 bg-white rounded shadow">
        {{ report.type }} - {{ report.amount }}kg - {{ report.date }}
      </li>
    </ul>
  </div>
</template>

<script setup>
const totalReports = 12;
const totalKg = 98;
const history = [
  { type: 'Plastic', amount: 10, date: '2025-07-21' },
  { type: 'Organic', amount: 5, date: '2025-07-20' },
];
</script>
