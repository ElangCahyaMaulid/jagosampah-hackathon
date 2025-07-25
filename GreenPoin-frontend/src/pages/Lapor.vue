<!-- resources/js/Pages/Report.vue -->
<template>
  <div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-green-700 mb-4">Report Waste</h2>
    <form @submit.prevent="submitReport">
      <div class="mb-4">
        <label class="block text-gray-700">Waste Type</label>
        <select v-model="form.type" class="w-full border rounded p-2">
          <option value="plastic">Plastic</option>
          <option value="organic">Organic</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Amount (kg)</label>
        <input type="number" v-model="form.amount" class="w-full border rounded p-2" required />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Location Description</label>
        <textarea v-model="form.location" class="w-full border rounded p-2" rows="3"></textarea>
      </div>
      <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Submit Report
      </button>
    </form>
  </div>
</template>

<script setup>
import { reactive } from 'vue';

const form = reactive({
  type: 'plastic',
  amount: 1,
  location: '',
});

function submitReport() {
  alert(`Reported ${form.amount}kg of ${form.type} waste at ${form.location}`);
  // Later: Send to GreenPoin backend
}
</script>
