<template>
  <div class="p-6">
    <h2 class="text-3xl font-bold text-green-700 mb-4">Dashboard RT</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
      <div class="bg-green-100 p-4 rounded shadow">
        <h3 class="text-xl font-semibold text-green-800">Total Laporan</h3>
        <p class="text-2xl mt-2">{{ totalLaporan }}</p>
      </div>
      <div class="bg-green-100 p-4 rounded shadow">
        <h3 class="text-xl font-semibold text-green-800">Total Kg Terkumpul</h3>
        <p class="text-2xl mt-2">{{ totalKg }}</p>
      </div>
    </div>

    <h3 class="text-xl font-semibold text-green-700 mb-2">Riwayat Laporan</h3>
    <ul class="space-y-2">
      <li v-for="(laporan, i) in riwayat" :key="i" class="p-3 bg-white rounded shadow">
        {{ laporan.jenis }} - {{ laporan.jumlah }}kg - {{ laporan.tanggal }}
      </li>
    </ul>
  </div>
</template>

<script setup>
const totalLaporan = 12;
const totalKg = 98;
const riwayat = [
  { jenis: 'Plastik', jumlah: 10, tanggal: '2025-07-21' },
  { jenis: 'Organik', jumlah: 5, tanggal: '2025-07-20' },
];
</script>
