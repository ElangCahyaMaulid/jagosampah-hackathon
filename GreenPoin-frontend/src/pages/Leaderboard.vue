<!-- resources/js/Pages/Leaderboard.vue -->
<template>
  <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow rounded-lg">
    <h2 class="text-2xl font-bold text-green-800 mb-4">Community Leaderboard</h2>
    <table class="w-full text-left border-collapse">
      <thead>
        <tr>
          <th class="border-b p-2">#</th>
          <th class="border-b p-2">Community (RT)</th>
          <th class="border-b p-2">Total Collected (kg)</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, i) in leaderboardRT" :key="i">
          <td class="p-2">{{ i + 1 }}</td>
          <td class="p-2">{{ item.rt }}</td>
          <td class="p-2">{{ item.total }} kg</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
import { leaderboardRT } from '../mock/data.js'
</script>
