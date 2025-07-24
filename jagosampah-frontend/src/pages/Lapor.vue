<template>
  <div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-green-700 mb-4">Lapor Sampah</h2>
    <form @submit.prevent="submitReport">
      <div class="mb-4">
        <label class="block text-gray-700">Jenis Sampah</label>
        <select v-model="form.jenis" class="w-full border rounded p-2">
          <option value="plastik">Plastik</option>
          <option value="organik">Organik</option>
          <option value="lainnya">Lainnya</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Jumlah (kg)</label>
        <input type="number" v-model="form.jumlah" class="w-full border rounded p-2" required />
      </div>
      <div class="mb-4">
        <label class="block text-gray-700">Deskripsi Lokasi</label>
        <textarea v-model="form.lokasi" class="w-full border rounded p-2" rows="3"></textarea>
      </div>
      <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Kirim Laporan
      </button>
    </form>
  </div>
</template>

<script setup>
import { reactive } from 'vue';

const form = reactive({
  jenis: 'plastik',
  jumlah: 1,
  lokasi: '',
});

function submitReport() {
  alert(`Sampah ${form.jenis} sebanyak ${form.jumlah}kg dilaporkan di ${form.lokasi}`);
  // Kirim ke server nanti
}
</script>
